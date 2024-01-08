<?php

namespace App\Http\Controllers\Facturation;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Models\Facturation\Facturation;

class FacturationRejeteController extends Controller
{
    private $userRepo;
    public function __construct(UserRepository $userRepository)
    {
        parent::__construct();
        $this->userRepo = $userRepository;
    }

    public function index()
    {
        ini_set('max_execution_time',-1);
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"liste facture rejetée");
        $yesterday=date("Ymd", strtotime("yesterday"));
       // $facturation = Facturation::where("statut",3)->where('date_transaction',$yesterday)->orderBy('date_transaction','DESC')->get();
        $facturation = Facturation::where("statut",3)->orderBy('date_transaction','DESC')->get();
        if (request('dates')!==null && request('nom_partenaire')==null) {
            $dates=request('dates');    
            $from = Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[0])->format('Ymd');
            $to = Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[1])->format('Ymd');
            $facturation=Facturation::whereBetween('date_transaction',[$from,$to])->where("statut",3)->orderBy('date_transaction','DESC')->get();   
        }elseif(request('dates')!==null && request('nom_partenaire')!==null){
            $dates=request('dates');    
            $nom_partenaire=request('nom_partenaire');
            $from = Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[0])->format('Ymd');
            $to = Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[1])->format('Ymd');
            $facturation=Facturation::whereBetween('date_transaction',[$from,$to])->where("statut",3)->where("nom_partenaire",$nom_partenaire)->orderBy('date_transaction','DESC')->get();   
        }
        return view('Facturation.Facturation.index_rejetee',compact('facturation'));
    }

    public function show($id)
    {
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"détail facture rejetée");
        $facturation = Facturation::find($id);
        $onglet_facturation = $this->onglet_facturation[$facturation->onglet_facturation_id]['libelle'];
        return response()->json(['data' => $facturation, "onglet_facturation" => $onglet_facturation]);
    }
}
