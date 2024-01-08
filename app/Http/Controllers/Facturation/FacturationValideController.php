<?php

namespace App\Http\Controllers\Facturation;

use File;
use ZipArchive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Models\Facturation\Catalogue;
use App\Models\Facturation\CatalogueHasSim;
use App\Models\Facturation\Facturation;
use Illuminate\Support\Facades\Storage;

use function PHPSTORM_META\map;

class FacturationValideController extends Controller
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
        // $ra= range(1, 33);
        // $b = array(19,20,21,22, 23,28,29,30,31,32,33);
        // return $tab = array_diff($ra, $b);
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info, "liste factures valides");
        $yesterday = date("Ymd", strtotime("yesterday"));
        //$d=date('m');
        // $facturation = Facturation::where("statut",2)->where('date_transaction',$yesterday)->orderBy('date_transaction','DESC')->get();
        $facturation = Facturation::where('statut', 2)->take(2000)->orderBy('date_transaction', 'DESC')->get();
        if (request('dates') !== null && request('nom_partenaire') == null) {
            $dates = request('dates');
            $from = Carbon::createFromFormat('d/m/Y', explode("-", preg_replace('/\s+/', '', $dates))[0])->format('Ymd');
            $to = Carbon::createFromFormat('d/m/Y', explode("-", preg_replace('/\s+/', '', $dates))[1])->format('Ymd');
            $facturation = Facturation::whereBetween('date_transaction', [$from, $to])->where("statut", 2)->orderBy('date_transaction', 'DESC')->get();
        } elseif (request('dates') !== null && request('nom_partenaire') !== null) {
            $dates = request('dates');
            $nom_partenaire = request('nom_partenaire');
            $from = Carbon::createFromFormat('d/m/Y', explode("-", preg_replace('/\s+/', '', $dates))[0])->format('Ymd');
            $to = Carbon::createFromFormat('d/m/Y', explode("-", preg_replace('/\s+/', '', $dates))[1])->format('Ymd');
            $facturation = Facturation::whereBetween('date_transaction', [$from, $to])->where("statut", 2)->where("nom_partenaire", $nom_partenaire)->orderBy('date_transaction', 'DESC')->get();
        }
        return view('Facturation.Facturation.index_valide', compact('facturation'));
    }

    public function dateDifference($date)
    {
        $factDate = str_replace('/', '-', $date);
        $trueDate = Carbon::parse($factDate);
        $diff = now()->diffInDays($trueDate);
        return $diff;
    }

    public function dormants()
    {
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info, "liste partenaire dormant");
        $facturation = Facturation::where("statut", 1)->orderBy('date_transaction', 'desc')->get();
        $facturationU = $facturation->unique('nom_partenaire');
        //dd($facturationU);
        $cpt = [];
        //dd($facturation);  
        foreach ($facturationU as $fact) {
            if ($this->dateDifference($fact->date_transaction) > 30) {
                array_push($cpt, $fact->nom_partenaire);
            }
        }
        $partenaires = Catalogue::with(['sim_designation'])->whereBetween('nom_partenaire', $cpt)->orderBy('num_ap', 'desc')->paginate(15);
        return view('Facturation.Dormant.index', compact('partenaires'));
    }

    public function search(Request $request)
    {
        $recherche = $this->recherche($request->nom_partenaire, $request->dates);
        $facturation = $recherche[0];
        $nom_partenaire = $recherche[1];
        $dates = $recherche[2];
        return view('Facturation.Facturation.index_valide', compact('facturation', 'nom_partenaire', 'dates'));
    }


    public function exportUnique($selected_id)
    {
        $mytime = Carbon::now()->format('Ymd-Hi');
        $facture = Facturation::where("statut", 2)->whereIn("id", $selected_id)->get();
        $facture_sum = Facturation::where("statut", 2)->whereIn("id", $selected_id)->sum("a_reverser");
        $onglet_facturation = $this->onglet_facturation[$facture[0]->onglet_facturation_id]['libelle'];
        $factBool = $onglet_facturation != 'PTUPS' && $onglet_facturation != 'Sonatel mobile';
        if ($factBool) {
            $data = [
                'date' => date('d/m/Y'),
                'facture' => $facture,
                'facture_sum' => $facture_sum,
                'factBool' => $factBool,
            ];
        } else {
            $pillArray = [];
            $piArray = [];
            $ptups = [];
            $catalogueHasSim = CatalogueHasSim::whereIn('onglet_facturation_id', [12, 15])->get();
            foreach ($catalogueHasSim as $chs) {
                if ($chs->identifiant_designation == 'MPAYACHATPASS') {
                    array_push($pillArray, $chs->sim_head);
                } elseif ($chs->identifiant_designation == 'ACHATPASS') {
                    array_push($piArray, $chs->sim_head);
                } else {
                    array_push($ptups, $chs->sim_head);
                }
            }
            $facturePi = $facture->whereIn('sim_head', $piArray);
            $facture_pi_sum = $facturePi->sum('a_reverser');
            $facturePill = $facture->whereIn('sim_head', $pillArray);
            $facture_pill_sum = $facturePill->sum('a_reverser');
            $facturePtups = $facture->whereIn('sim_head', $ptups);
            $facture_ptups_sum = $facturePtups->sum('a_reverser');
            $data = [
                'date' => date('d/m/Y'),
                'facture' => $facture,
                'facturePi' => $facturePi,
                'facturePill' => $facturePill,
                'facturePtups' => $facturePtups,
                'facture_sum' => $facture_sum,
                'facture_pi_sum' => $facture_pi_sum,
                'facture_pill_sum' => $facture_pill_sum,
                'facture_ptups_sum' => $facture_ptups_sum,
                'factBool' => $factBool,
            ];
        }
        $pdf = PDF::loadView('Facturation.Facturation.pdf', $data)->setPaper('a4', 'landscape');
        // $path = public_path("export\\");
        // $pdf->save($path.'/'.'invoice1.pdf');
        return $pdf->download($onglet_facturation . '_' . $mytime . '.pdf');
    }
    public function exportSleeping()
    {
        $facturation = Facturation::where("statut", 1)->orderBy('date_transaction', 'desc')->get();
        $cpt = [];
        for ($i = 0; $i < $facturation->count(); $i++) {
            if ($this->dateDifference($facturation[$i]->date_transaction) > 30) {
                array_push($cpt, $facturation[$i]->nom_partenaire);
            }
        }
        $partenaires = Catalogue::with(['sim_designation'])->whereBetween('nom_partenaire', $cpt)->orderBy('num_ap', 'desc')->get();
        $data = [
            'date' => date('d/m/Y'),
            'mois' => date('M'),
            'partenaires' => $partenaires
        ];
        $pdf = PDF::loadView('Facturation.Dormant.pdf', $data)->setPaper('a4', 'landscape');
        return $pdf;
    }

    public function export_pdf(Request $request)
    {
        $arr = [];
        if ($request->selected_id) {
            $mytime = Carbon::now()->format('Ymd-Hi');

            if (count($request->selected_id) == 1) {
                return $this->exportUnique($request->selected_id);
            } elseif (count($request->selected_id) != 1) {
                $facture_array = Facturation::where("statut", 2)->whereIn("id", $request->selected_id)
                    ->distinct('onglet_facturation_id')->pluck('onglet_facturation_id')->toArray();
                if (count($facture_array) != 1) {
                    File::cleanDirectory(public_path("export/"));
                    foreach ($facture_array as $val) {
                        $facture = Facturation::where("statut", 2)->whereIn("id", $request->selected_id)
                            ->where("onglet_facturation_id", $val)->get();
                        $facture_sum = Facturation::where("statut", 2)->whereIn("id", $request->selected_id)
                            ->where("onglet_facturation_id", $val)->sum("a_reverser");
                        $onglet_facturation = $this->onglet_facturation[$facture[0]->onglet_facturation_id]['libelle'];
                        $factBool = $onglet_facturation != 'PTUPS' && $onglet_facturation != 'Sonatel mobile';
                        if ($factBool) {
                            $data = [ 
                                'date' => date('d/m/Y'),
                                'facture' => $facture,
                                'facture_sum' => $facture_sum,
                                'factBool' => $factBool,
                            ];
                        } else {
                            $pillArray = [];
                            $piArray = [];
                            $ptups = [];
                            $catalogueHasSim = CatalogueHasSim::whereIn('onglet_facturation_id', [12, 15])->get();
                            foreach ($catalogueHasSim as $chs) {
                                if ($chs->identifiant_designation == 'MPAYACHATPASS') {
                                    array_push($pillArray, $chs->sim_head);
                                } elseif ($chs->identifiant_designation == 'ACHATPASS') {
                                    array_push($piArray, $chs->sim_head);
                                } else {
                                    array_push($ptups, $chs->sim_head);
                                }
                            }
                            $facturePi = $facture->whereIn('sim_head', $piArray);
                            $facture_pi_sum = $facturePi->sum('a_reverser');
                            $facturePill = $facture->whereIn('sim_head', $pillArray);
                            $facture_pill_sum = $facturePill->sum('a_reverser');
                            $facturePtups = $facture->whereIn('sim_head', $ptups);
                            $facture_ptups_sum = $facturePtups->sum('a_reverser');
                            $data = [
                                'date' => date('d/m/Y'),
                                'facture' => $facture,
                                'facturePi' => $facturePi,
                                'facturePill' => $facturePill,
                                'facturePtups' => $facturePtups,
                                'facture_sum' => $facture_sum,
                                'facture_pi_sum' => $facture_pi_sum,
                                'facture_pill_sum' => $facture_pill_sum,
                                'facture_ptups_sum' => $facture_ptups_sum,
                                'factBool' => $factBool,
                            ];
                        }
                        $pdf = PDF::loadView('Facturation.Facturation.pdf', $data)->setPaper('a4', 'landscape');
                        $path = public_path("export/");
                        $pdf->save($path . '/' . $onglet_facturation . '_' . $mytime . '.pdf');
                        // $pdf->download('inv'.$val.'.pdf');
                    }

                    $zip = new \ZipArchive();
                    $fileName = 'export_facture_' . $mytime . '.zip';
                    $path = public_path('export/') . $fileName;

                    if ($zip->open($path, \ZipArchive::CREATE) == TRUE) {
                        $files = File::files(public_path('export/'));
                        foreach ($files as $key => $value) {
                            $relativeName = basename($value);
                            $zip->addFile($value, $relativeName);
                        }
                        $zip->close();
                    }
                    return response()->download($path);
                } else {
                    return $this->exportUnique($request->selected_id);
                }
            } else {
                session()->flash("message", "Aucune facture n'a été selectionnée.");
                return redirect()->route('facturation_valide.index');
            }
        } else {
            session()->flash("message", "Aucune facture n'a été selectionnée.");
            return redirect()->route('facturation_valide.index');
        }
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
        return $request;
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
        $this->visiteLien($info, "détail facture validée");
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
