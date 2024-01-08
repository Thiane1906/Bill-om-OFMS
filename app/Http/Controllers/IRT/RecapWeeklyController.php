<?php

namespace App\Http\Controllers\IRT;

use Illuminate\Http\Request;
use App\Models\Facturation\Irt;
use App\Http\Controllers\Controller;

class RecapWeeklyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country_code=request('pays');
        $week=date('W',strtotime('-1 week'));
        $year=date('Y',strtotime('-1 week'));
        $recapWeekly=Irt::where('prod_data_time','S'.$week)->whereRaw('substr(creation_date, 1, 4) = ?',$year)->get();
        $transaction_pays=$this->transaction_pays;
        $nom_pays=null;
        if (request('week')) {
            $requestWeek=request('week');
            $week=substr($requestWeek, 6, 8);
            $year=substr($requestWeek, 0, 4);
            $recapWeekly=Irt::where('prod_data_time','S'.$week)->whereRaw('substr(creation_date, 1, 4) = ?', $year)->get();
            if ($country_code) {
                $recapWeekly=Irt::where('prod_data_time','S'.$week)->whereRaw('substr(creation_date, 1, 4) = ?', $year)->whereIn('sender_country_code',['SN',$country_code])->whereIn('receiver_country_code',['SN',$country_code])->get();
            }
        }else{
            if ($country_code) {
                $recapWeekly=Irt::where("prod_data_time",'!=','M')->whereIn('sender_country_code',['SN',$country_code])->whereIn('receiver_country_code',['SN',$country_code])->get();
            }
        }
        if ($country_code) {
            foreach ($transaction_pays as $country) {
                if ($country_code==$country['country_code']) {
                    $nom_pays=$country['libelle'];
                }
            }
        }
        $reception_sum = $recapWeekly->where('receiver_country_code','SN')->sum('receiver_amount');
        $envoi_sum = $recapWeekly->where('sender_country_code','SN')->sum('sender_amount');
        $nbr_trans_entrant = $recapWeekly->where('receiver_country_code','SN')->count();
        $nbr_trans_sortant = $recapWeekly->where('sender_country_code','SN')->count(); 
        return view('IRT.LDP.index_recap_weekly',compact('transaction_pays','reception_sum','envoi_sum','nbr_trans_entrant','nbr_trans_sortant','week','year','nom_pays'));
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
