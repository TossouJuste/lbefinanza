<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\formulaire;
use App\Models\pretpersonel;

class pretpersonnel extends Controller
{
    
    public function post_car_loan(formulaire $request,pretpersonel $model)
    {
       pretpersonels::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email'=> $request->email,
        'telephone'=> $request->telephone,
        'pays' => $request->pays,
        'montant' => $request->montant,
        'statut' => $request->statut,
        'adresse' => $request->adresse,
        'ville' => $request->ville,
        'duree' =>$request->duree,
        'piece' =>$request->peice,
        'typepret'=>$request->typepret,

       ]);
       return view('Siteweb_SeedBank.redirect',[
        'email'=>  $request->email,
        'nom'=>  $request->nom,
      ]);

      
    }


}
