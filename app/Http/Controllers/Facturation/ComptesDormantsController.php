<?php

namespace App\Http\Controllers\Facturation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Models\Facturation\Catalogue;
use App\Models\Facturation\Facturation;

class ComptesDormantsController extends Controller
{
    private $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();
        $this->userRepo = $userRepository;
    }
    /**
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"liste partenaire dormant");
        $facturation = Facturation::where("statut",1)->orderBy('date_transaction','desc')->get();
        $facturationU=$facturation->unique('nom_partenaire');
        //dd($facturationU);
        $cpt=[];
        //dd($facturation);  
        foreach($facturationU as $fact){
            if($this->dateDifference($fact->date_transaction)>=30){
                //dd($this->dateDifference($fact->date_transaction));
                array_push($cpt,$fact->nom_partenaire);
            }
        }
       $partenaires=Catalogue::with(['sim_designation'])->whereIn('nom_partenaire',$cpt)->orderBy('num_ap','desc')->paginate(15);
       if (request('days')) {
           $cpt=[];
           foreach($facturationU as $fact){
               if($this->dateDifference($fact->date_transaction)>=request('days')){
                   //dd($this->dateDifference($fact->date_transaction));
                   array_push($cpt,$fact->nom_partenaire);
                }
            }
            $partenaires=Catalogue::with(['sim_designation'])->whereIn('nom_partenaire',$cpt)->orderBy('num_ap','desc')->paginate(15); 
        }
       if (request('search') && request('search2')==null) {
        $id=0;
        foreach($this->onglet_facturation as $onglet){
            if (request('search')==$onglet['libelle']) {
               $id=$onglet['id'];
               //dd($id);
            }
               $partenaires=Catalogue::whereHas('sim_designation',function($q) use ($id)
                {
                   $q->where('onglet_facturation_id',$id);
                })->orderBy('num_ap','DESC')->whereIn('nom_partenaire',$cpt)->paginate(15);
        }
    } elseif(request(('search2')) && request('search')==null){
         $partenaires=Catalogue::with(['sim_designation'])->where('nom_partenaire',request('search2'))->whereIn('nom_partenaire',$cpt)->orderBy('num_ap','DESC')->paginate(15);
    }
    elseif(request('search') && request('search2')){
        $id=0;
        foreach($this->onglet_facturation as $onglet){
            if (request('search')==$onglet['libelle']) {
               $id=$onglet['id'];
            }
               $partenaires=Catalogue::whereHas('sim_designation',function($q) use ($id)
                {
                   $q->where('onglet_facturation_id',$id);
                })->where('nom_partenaire',request('search2'))->whereIn('nom_partenaire',$cpt)->orderBy('num_ap','DESC')->paginate(15);
        }
    } 
    $catalogue=Catalogue::all();
    return view('Facturation.Dormant.index',compact('partenaires','catalogue'));
    }

    public function dateDifference($date)
    {
        $factDate=Carbon::createFromFormat('Ymd', $date)->format('d-m-Y');
        $trueDate=Carbon::parse($factDate);
        $diff=now()->diffInDays($trueDate);
        return $diff;
    }


    public function search(Request $request){
        $recherche = $this->recherche($request->nom_partenaire,$request->dates);
        $facturation = $recherche[0];
        $nom_partenaire = $recherche[1];
        $dates = $recherche[2];
        return view('Facturation.Facturation.index_valide',compact('facturation','nom_partenaire', 'dates'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
