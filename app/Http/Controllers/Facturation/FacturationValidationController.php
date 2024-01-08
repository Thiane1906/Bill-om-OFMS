<?php

namespace App\Http\Controllers\Facturation;

use DB;

use DateTime;
use Carbon\Carbon;
use Barryvdh\DomPDF\PDF;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Models\Facturation\Facturation;
use App\Models\GestionStructure\Tracking;
use App\Support\Authorization\AuthorizationUserTrait;

class FacturationValidationController extends Controller
{
    private $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();
        $this->userRepo = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ini_set('max_execution_time',-1);
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"liste facture en validation");
        $yesterday=date("Ymd", strtotime("yesterday"));
       // $facturation = Facturation::where("statut",1)->where('date_transaction',$yesterday)->orderBy('date_transaction','DESC')->get();
       $facturation = Facturation::where('statut',1)->take(2000)->orderBy('date_transaction','DESC')->get();
       $month=date('m');
       $year=date('Y');
       $day=date('d');
       $facturationResto=null;
       if($day==16){
           $facturationResto = Facturation::where('statut',1)->where('onglet_facturation_id',13)->whereBetween('date_transaction',[$year.$month.'01',$year.$month.'15'])
           ->select([DB::raw("nom_partenaire"),DB::raw("sim_head"),DB::raw("compte_bancaire"),DB::raw("num_ap"),DB::raw("SUM(transaction_amount) as total_transaction"), DB::raw("SUM(commission) as total_commission"),DB::raw("SUM(a_reverser) as total_reversement")])->groupBy('sim_head','compte_bancaire','num_ap','nom_partenaire')->get();
        }    
        elseif ($day==1) {
            //dd($year.$month.'16',$year.$month.date('t'));
            $month=date('m',strtotime('-1 month'));
            $year=date('Y',strtotime('-1 month'));
            $facturationResto= Facturation::where('statut',1)->where('onglet_facturation_id',13)->whereBetween('date_transaction',[$year.$month.'16',$year.$month.date('t')])->orderBy('date_transaction','DESC')
            ->select([DB::raw("nom_partenaire"),DB::raw("sim_head"),DB::raw("num_ap"),DB::raw("SUM(transaction_amount) as total_transaction"), DB::raw("SUM(commission) as total_commission"),DB::raw("SUM(a_reverser) as total_reversement")])->groupBy('sim_head','compte_bancaire','num_ap','nom_partenaire')->get();
            //dd($facturationResto);       
        }
        //dd($facturationResto);
        if (request('dates')) {
            $dates=request('dates');    
            $from = Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[0])->format('Ymd');
            $to = Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[1])->format('Ymd');
            if ( request('nom_partenaire')==null) {
                $facturation=Facturation::whereBetween('date_transaction',[$from,$to])->where("statut",1)->orderBy('date_transaction','DESC')->get();   
            }elseif(request('nom_partenaire')!==null){
                $nom_partenaire=request('nom_partenaire');
                $facturation=Facturation::whereBetween('date_transaction',[$from,$to])->where("statut",1)->where("nom_partenaire",$nom_partenaire)->orderBy('date_transaction','DESC')->get();   
            }
        }
        //(date('m/d/Y',strtotime("-39 days"))==$facturation[0]->date_transaction);
        return view('Facturation.Facturation.index_envalidation',compact('facturation','facturationResto'));
    }

    public function search(Request $request){
        $recherche = $this->recherche($request->nom_partenaire,$request->dates);
        $facturation = $recherche[0];
        $nom_partenaire = $recherche[1];
        $dates = $recherche[2];
        return view('Facturation.Facturation.index_envalidation',compact('facturation','nom_partenaire', 'dates'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = $this->userRepo->infoConnect();
        $validation_do = Carbon::now()->format('YmdHis');
        if($request->selected_id){
            Facturation::whereIn('id', $request->selected_id)
            ->update([
                'statut' => 2,
                'valider_par' => $info,
                'validation_do' => $validation_do]
                ,['timestamps' => false]
            );
            if (count($request->selected_id)==1){
                session()->flash("message_success","La facture a été validée avec succès.");
            }
            else{
                session()->flash("message_success","Les factures ont été validées avec succès.");
            }
        }
        else{
            session()->flash("message","Aucune facture n'a été sélectionnée.");
        }
        return back();
    }

    public function rejet(Request $request){
        $info = $this->userRepo->infoConnect();
        $rejet_do = Carbon::now()->format('YmdHis');
        if($request->selected_id){
            Facturation::whereIn('id', $request->selected_id)
            ->update([
                'statut' => 3,
                'motif_rejet_do' => $request->motif_rejet,
                'rejeter_par' => $info,
                'rejet_do' => $rejet_do],
                ['timestamps' => false]);
            if (count($request->selected_id)==1){
                session()->flash("message","La facture a été rejetée avec succès.");
            }
            else{
                session()->flash("message","Les factures ont été rejetées avec succès.");
            }
        }
        else{
            session()->flash("message","Aucune facture n'a été sélectionnée.");
        }
        return redirect()->route('facturation_envalidation.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"détail facture en validation");
        $facturation = Facturation::find($id);
        $onglet_facturation = $this->onglet_facturation[$facturation->onglet_facturation_id]['libelle'];
        return response()->json(['data' => $facturation, "onglet_facturation" => $onglet_facturation]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"modification facturation en validation");
        $facturation = Facturation::where('id', decrypt($id))->first();
        return view('Facturation.Facturation.update_envalidation', compact('facturation'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Facturation $facturation,$id)
    {
        $info = $this->userRepo->infoConnect();
        $facturation = Facturation::where('id',$id)->first();
        try {
            $facturation->update([
                'num_ap' => $request->num_ap,
                'nom_partenaire' => $request->nom_partenaire,
                'transaction_amount' => $request->transaction_amount,
                'commission' => $request->commission,
                'a_reverser' => $request->transaction_amount-$request->commission,
                'sim_head' => $request->sim_head,
                'created_by' => $info,
            ]);
            Tracking::create([
                'user' => $info,
                'action' => "a modifié une ancienne facturation num_ap: ".$facturation->num_ap." ,nom_partenaire: ".
                $facturation->nom_partenaire." ,transaction_amount: ".$facturation->transaction_amount.
                " ,commission: ".$facturation->commission." ,a_reverser: ".$facturation->a_reverser.
                " ,sim_head: ".$facturation->sim_head,
                'ip_machine' => request()->ip(),
                'url' => url()->current()
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash("message","La facturation existe déjà dans le système.");
            return redirect()->route('facturation.edit', encrypt($facturation->id));
        }
        session()->flash("message_success","Facturation modifiée avec succès.");
        return redirect()->route('facturation_envalidation.index');
    }    

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
