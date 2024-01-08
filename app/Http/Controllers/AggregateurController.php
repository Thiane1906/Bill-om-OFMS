<?php

namespace App\Http\Controllers;

use App\Http\Requests\AggregateurRequest;
use App\Models\Aggregateur;
use App\Models\Transaction;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AggregateurController extends Controller
{
    //

    // public function index(){
    //     $partenaires= Aggregateur::paginate(8);
    //     // return $partenaires;
    //     return view("Facturation.Aggregation.aggregateur",compact('partenaires'));
    // }

   

    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $partenaires = Aggregateur::when($search, function ($query) use ($search) {
            $query->where('nom_partenaire', 'like', $search . '%')
                  ->orWhere('adresse', 'like', $search . '%')
                  ->orWhere('fonction', 'like', $search . '%');
        })->orderBy("id", 'DESC')->paginate(8);
    
        return view("Facturation.Aggregation.aggregateur", compact('partenaires'));
    }
    


    public function store(AggregateurRequest $request){
        try {
            $aggregateur = Aggregateur::updateOrCreate(
                ['id' => $request->id], 
                [
                    'nom_partenaire' => $request->nom_partenaire,
                    'adresse' => $request->adresse,
                    'fonction' => $request->fonction,
                    'reference' => $request->reference,
                    'commision' => $request->commision,
                    'taux_couverture_dollar' => $request->taux_couverture_dollar,
                    'ninea' => $request->ninea,
                ]
            );
            
        }catch (\Illuminate\Database\QueryException $e) {
            return $e;
            session()->flash("message","L aggregateur existe déjà dans le système.");
            // return redirect()->route('aggregateur.create');
        }
       
        return redirect()->route('aggregateur.index');
    }

    public function create(){ 
        return view("Facturation.Aggregation.add");
    }
    public function show($id)
    {
        $aggregateur = Aggregateur::findOrFail($id);
        return view("Facturation.Aggregation.update", compact('aggregateur'));
    }
    


    public function update(Request $request, Aggregateur $aggregateur)
    {
        $aggregateur->update($request->only("nom_partenaire","adresse","fonction","reference","commision","taux_couverture_dollar","ninea"));
        // return $aggregateur;
        // return view("Facturation.Aggregation.aggregateur",compact('aggregateur'));
        return redirect()->route('aggregateur.index');
    }

    public function getTransactionByIdAggregateur($idAggre){
       $transaction= Transaction::where('aggregateur_id',$idAggre)->get();
       return view('Facturation.Aggregation.transactions',compact('transaction'));
    }
    
}
