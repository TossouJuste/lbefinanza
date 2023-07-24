<?php

namespace App\Http\Controllers;
use App\Models\Assurance;

use Illuminate\Http\Request;


class assurannce extends Controller
{
    public function assurance(Request $request,Assurance $table)
    {
        Assurance::create([
            'nom' => $request->nom,
            'prenom' =>$request->prenom,
            
            'email'=> $request->email,
            'civilite'=>$request->civilite,
            'type' => $request->type,
            'telephone' => $request->telephone,
            'pays' =>$request->pays,
           
        ]);
        return view('Siteweb_SeedBank.redirect_assurance',[
            'email'=>  $request->email,
            'nom'=>  $request->nom,
           
          ]);
    }

    public function assurances()
    {
        
        return view('Siteweb_SeedBank.formulaire.assurance');
    }

    public function assurance_f(Assurance $table)
    {
        $donnee = Assurance::where('lue','false')->get();

        return view('admin_dashbord.pages.assurance', compact('donnee'));
    }
    public function assurance_control(Assurance $table,$id)
    {
        $donne = Assurance::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = Assurance::where('lue','false')->get();
        return view('admin_dashbord.pages.assurance', compact('donnee'));
       
    }
}
