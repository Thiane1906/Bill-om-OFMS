<?php

namespace App\Http\Controllers\IRT;

use Illuminate\Http\Request;
use App\Models\Facturation\Irt;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;

class RecapMonthlyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $month=request('month');
        $country_code=request('pays');
        $lastMonth=date('m',strtotime('-1 month'));
        setlocale(LC_TIME, 'fr_FR.utf8');
        $month_name =  strftime("%B",mktime(0,0,0, $lastMonth,1,date("Y")));
        $year=date('Y',strtotime('-1 month'));
        $ld=date('t',strtotime('-1 month'));
        $firstDay=intval(Carbon::createFromFormat('d/m/Y','01'.'/'.$lastMonth.'/'.$year)->format('Ymd0000'));
        $lastDay=intval(Carbon::createFromFormat('d/m/Y',$ld.'/'.$lastMonth.'/'.$year)->format('Ymd2359'));
        $transaction_pays=$this->transaction_pays;
        $nom_pays=null;
        //dd(strtotime($firstday),strtotime($lastday),strtotime($lastday)-strtotime($firstday));
            foreach($transaction_pays as $country){
                if ($country['country_code']==$country_code) {
                    $pays=$country['libelle'];
                }
            }
            $recapMonthly = Irt::where("prod_data_time",'M')->whereBetween('creation_date',[$firstDay,$lastDay])->get();
            if ($month) {
                $lastMonth=substr($month, 5, 7);
                $year=substr($month, 0, 4);  
                $ld=date('t', mktime(0, 0, 0, $lastMonth, 1,$year));
                $firstDay=intval(Carbon::createFromFormat('d/m/Y','01'.'/'.$lastMonth.'/'.$year)->format('Ymd0000'));
                $lastDay=intval(Carbon::createFromFormat('d/m/Y',$ld.'/'.$lastMonth.'/'.$year)->format('Ymd2359'));
                $recapMonthly = Irt::where("prod_data_time",'M')->whereBetween('creation_date',[$firstDay,$lastDay])->get();
                if ($country_code) {
                    $recapMonthly=Irt::where("prod_data_time",'M')->whereBetween('creation_date',[$firstDay,$lastDay])->whereIn('sender_country_code',['SN',$country_code])->whereIn('receiver_country_code',['SN',$country_code])->get();
                }
            }else{
                if ($country_code) {
                    $recapMonthly=Irt::where("prod_data_time",'M')->whereIn('sender_country_code',['SN',$country_code])->whereIn('receiver_country_code',['SN',$country_code])->get(); 
                }
            }
            if ($country_code) {
                foreach ($transaction_pays as $country) {
                    if ($country_code==$country['country_code']) {
                        $nom_pays=$country['libelle'];
                    }
                }
            }
            $month_name =  strftime("%B",mktime(0,0,0, $lastMonth,1,date("Y")));
            $reception_sum = $recapMonthly->where('receiver_country_code','SN')->sum('receiver_amount');
            $envoi_sum = $recapMonthly->where('sender_country_code','SN')->sum('sender_amount');
            $nbr_trans_entrant = $recapMonthly->where('receiver_country_code','SN')->count();
            $nbr_trans_sortant = $recapMonthly->where('sender_country_code','SN')->count();              
            
            return view('IRT.LDP.index_recap_monthly',compact('reception_sum','envoi_sum','nbr_trans_entrant','nbr_trans_sortant','transaction_pays','nom_pays','month_name','year'));
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
