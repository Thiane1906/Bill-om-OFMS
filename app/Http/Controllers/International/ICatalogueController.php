<?php

namespace App\Http\Controllers\International;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Models\Facturation\IntCatalogue;

class ICatalogueController extends Controller
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
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info,"liste catalogue international");
        $icatalogue=IntCatalogue::where('archived',0)->paginate(10);
        $international_type = $this->international_type;
        $search=request('search');
        $search2=request('search2');
        if(!empty($search) && empty($search2)){
            $icatalogue=IntCatalogue::where('partenaires',$search)->where('archived',0)->paginate(10);
        }
        elseif(empty($search) && !empty($search2)){
            $icatalogue=IntCatalogue::where('type',$search2)->where('archived',0)->paginate(10);
        }
        elseif(!empty($search) && !empty($search2)){
            $icatalogue=IntCatalogue::where('type',$search2)->where('partenaires',$search)->where('archived',0)->paginate(10);
        }
        return view('Facturation.International.index_icatalogue',compact('icatalogue','international_type'));
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
        $info = $this->userRepo->infoConnect();
        $this->visiteLien($info, "détails catalogue international");
        $icatalogue = IntCatalogue::find($id);
        return response()->json(['data' => $icatalogue]);
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
        $this->visiteLien($info, "modification catalogue international");
        $icatalogue = IntCatalogue::where('id', decrypt($id))->first();
        return view('Facturation.International.update_icatalogue', compact('icatalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IntCatalogue $icatalogue,$id)
    {
        $info = $this->userRepo->infoConnect();
        $icatalogue=IntCatalogue::where('id',$id)->first();
        try{
            $icatalogue->update([
                'partenaires' => $request->partenaires,
                'compte_technique' => $request->compte_technique,
                'type' => $request->type,
                'commission' => $request->commission,
                'statut' => $request->statut,
                'periodicites' => $request->periodicites,
                'taux_commission' => $request->taux_commission,
                'taux_conversion' => $request->taux_conversion,
            ]);

        }
        catch (\Illuminate\Database\QueryException $e) {
            session()->flash("message","Le catalogue existe déjà dans le système.");
            return redirect()->route('catalogue_international.edit', encrypt($icatalogue->id));
        }
        //dd($icatalogue);
        session()->flash("message_success","Partenaire modifié avec succès.");
        return redirect()->route('catalogue_international.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
    public function delete(Request $request){
        //dd($request->selected_id);
        $info = $this->userRepo->infoConnect();
        $icatalogue=IntCatalogue::where('id',$request->selected_id)->first();
        try{
            $icatalogue->update([
                'archived' => 1,            
            ]);

        }
        catch (\Illuminate\Database\QueryException $e) {
            session()->flash("message","Le catalogue existe déjà dans le système.");
            return redirect()->route('catalogue_international.index');
        }
        //dd($icatalogue);
        session()->flash("message_success","Partenaire supprimé avec succès.");
        return redirect()->route('catalogue_international.index');    
    }
}
