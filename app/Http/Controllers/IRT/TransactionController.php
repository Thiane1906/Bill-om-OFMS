<?php

namespace App\Http\Controllers\IRT;

use Carbon\Carbon;
use App\Classes\GestionFile;
use Illuminate\Http\Request;
use App\Models\Facturation\Irt;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class TransactionController extends Controller
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
        //->whereRaw('substr(creation_date, 4, 6) = ?', $month)
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"liste irt");
        
        $month=date('m',strtotime('-1 month'));
        $year=date('Y',strtotime('-1 month'));
        $year2=date('Y',strtotime('-1 week'));
        $ld=date('t',strtotime('-1 month'));
        $firstDay=intval(Carbon::createFromFormat('d/m/Y','01'.'/'.$month.'/'.$year)->format('Ymd0000'));
        $lastDay=intval(Carbon::createFromFormat('d/m/Y',$ld.'/'.$month.'/'.$year)->format('Ymd2359'));
        $week2=date('W',strtotime('-1 week'));
        $nom_pays=null;
        //$irt=Irt::where('prod_data_time','M')->orderBy('creation_date','ASC')->paginate(10);
        //$irt2=Irt::where('prod_data_time','!=','M')->orderBy('creation_date','ASC')->paginate(10);
        $irt=Irt::where('prod_data_time','M')->whereBetween('creation_date',[$firstDay,$lastDay])->orderBy('creation_date','ASC')->paginate(10);
        $irt2=Irt::where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?',$year2)->orderBy('creation_date','ASC')->paginate(10);
        
        $transaction_pays=$this->transaction_pays;
        $dates=request('dates');
        $semaines=request('week');
        $pays=request('pays');
        $transaction_type=request('transaction_type');
        
        if ($dates && !$semaines) {
            $firstDay = intval(Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[0])->format('Ymd0000'));
            $lastDay = intval(Carbon::createFromFormat('d/m/Y',explode("-",preg_replace('/\s+/', '', $dates))[1])->format('Ymd2359'));
            $irt=Irt::whereBetween('creation_date',[$firstDay,$lastDay])->where('prod_data_time','M')->orderBy('creation_date','ASC')->paginate(10);
            if ($pays!=null && $transaction_type==null) {
                $irt=Irt::where('prod_data_time','M')->whereIn('sender_country_code',['SN',$pays])->whereBetween('creation_date',[$firstDay,$lastDay])->whereIn('receiver_country_code',['SN',$pays])->orderBy('creation_date','ASC')->paginate(10);
            }
            if ($transaction_type!=null && $pays==null) {
                if ($transaction_type=='send') {
                    $irt=Irt::where('sender_country_code','SN')->whereBetween('creation_date',[$firstDay,$lastDay])->where('prod_data_time','M')->orderBy('creation_date','ASC')->paginate(10);
                }else{
                    $irt=Irt::where('receiver_country_code','SN')->whereBetween('creation_date',[$firstDay,$lastDay])->where('prod_data_time','M')->orderBy('creation_date','ASC')->paginate(10);   
                }
            }
            if ($transaction_type!=null && $pays!=null) {
                if ($transaction_type=='send') {
                    $irt=Irt::where('receiver_country_code',$pays)->whereBetween('creation_date',[$firstDay,$lastDay])->where('prod_data_time','M')->orderBy('creation_date','ASC')->paginate(10);
                }else{
                    $irt=Irt::where('sender_country_code',$pays)->whereBetween('creation_date',[$firstDay,$lastDay])->where('prod_data_time','M')->orderBy('creation_date','ASC')->paginate(10);
                }
            }
        }
        if ($semaines && !$dates) {
            $week2=substr($semaines, 6, 8);
            $year2=substr($semaines, 0, 4);
            $irt2=Irt::where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?', $year2)->orderBy('creation_date','ASC')->paginate(10);
            //dd($irt2);
            if ($pays!=null && $transaction_type==null) {
                $irt2=Irt::whereIn('sender_country_code',['SN',$pays])->where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?',$year2)->whereIn('receiver_country_code',['SN',$pays])->orderBy('creation_date','ASC')->paginate(10);
            }
            if ($transaction_type!=null && $pays==null) {
                if ($transaction_type=='send') {
                    $irt2=Irt::where('sender_country_code','SN')->where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?',$year2)->orderBy('creation_date','ASC')->paginate(10);
                }else{
                    $irt2=Irt::where('receiver_country_code','SN')->where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?',$year2)->orderBy('creation_date','ASC')->paginate(10);   
                }
            }
            if ($transaction_type!=null && $pays!=null) {
                if ($transaction_type=='send') {
                    $irt2=Irt::where('receiver_country_code',$pays)->where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?',$year2)->orderBy('creation_date','ASC')->paginate(10);
                }else{
                    $irt2=Irt::where('sender_country_code',$pays)->where('prod_data_time','S'.$week2)->whereRaw('substr(creation_date, 1, 4) = ?',$year2)->orderBy('creation_date','ASC')->paginate(10);
                }
            }
        }
        if (!$semaines && !$dates) {
            if ($pays!=null && $transaction_type==null) {
                $irt2=Irt::whereIn('sender_country_code',['SN',$pays])->whereIn('receiver_country_code',['SN',$pays])->orderBy('creation_date','ASC')->paginate(10);
            }
            if ($transaction_type!=null && $pays==null) {
                if ($transaction_type=='send') {
                    $irt2=Irt::where('sender_country_code','SN')->orderBy('creation_date','ASC');
                }
                else{
                    $irt2=Irt::where('receiver_country_code','SN')->orderBy('creation_date','ASC')->paginate(10);   
                }
            }
            if ($transaction_type!=null && $pays!=null) {
                if ($transaction_type=='send') {
                    $irt2=Irt::where('sender_country_code','SN')->where('receiver_country_code',$pays)->orderBy('creation_date','ASC')->paginate(10);
                }else{
                    $irt2=Irt::where('sender_country_code',$pays)->where('receiver_country_code','SN')->orderBy('creation_date','ASC');
                }   
            }        
        }

        if ($pays) {
            foreach ($transaction_pays as $country) {
                if ($pays==$country['country_code']) {
                    $nom_pays=$country['libelle'];
                }
            }
        }

        return view('IRT.LDP.index_transactionv3',compact('transaction_pays','irt','irt2','firstDay','lastDay','week2','year2','nom_pays'));
        
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
