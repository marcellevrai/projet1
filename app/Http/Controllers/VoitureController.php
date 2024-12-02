<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoitureFilter;
use Illuminate\Http\Request;
use App\Models\Voiture;
use Illuminate\View\View;
use Ramsey\Uuid\Type\Integer;

class VoitureController extends Controller
{

   /* public function ajouter_voiture(): View{
        $voiture = new Voiture();
        $voiture->marque = 'Toyota';
        $voiture->modele = 'Corolla';
        $voiture->save();
    
        return view('GestionVoi.ajout', [
            'message' => 'Voiture ajoutée avec succès !'
        ]); 
    }*/
    
    public function ajouter_voiture(){
        return view('GestionVoi.ajout');
    }
    
    public function store(VoitureFilter $request){
        $voiture = voiture::create([
            'marque' => $request->input('marque'),
            'modele' => $request->input('modele'),
        ]);
        return redirect()->route('Listevoiture')->with('success', 'Voiture ajoutée avec succès')->withInput([]);
    }
    /*public function store(Request $request){
    // Valider les données avant de créer une voiture
    $validatedData = $request->validate([
        'marque' => 'required|string|max:255',
        'modele' => 'required|string|max:255',
    ]);

    // Créer une voiture avec les données validées
    $voiture = Voiture::create([
        'marque' => $validatedData['marque'],
        'modele' => $validatedData['modele'],
    ]);

    // Rediriger vers la liste des voitures
    return redirect()->route('Listevoiture');
    
}*/


    public function voitures(): View{

        return view('GestionVoi.index', [
            
            'voitures' => voiture::paginate(1)
            
        ]);
    }    
    public function ListeVoiture(): view{
        $listes = Voiture::all();
        return view('GestionVoi.listeVoiture', [
            'listes' => $listes
        ]);
       
    }
}
