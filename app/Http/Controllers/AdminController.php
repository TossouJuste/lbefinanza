<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pretpersonel;

class AdminController extends Controller
{
    

    public function accueil_dashboard()
    {
        return view('admin_dashbord.components.app');
    }
    
    public function demande_pret(pretpersonel $table)
    {
        $donnee = pretpersonel::where('lue','false')->get();

        return view('admin_dashbord.pages.DemandePret', compact('donnee'));
    }

    public function demande_pret_control(pretpersonel $table,$id)
    {
        $donne = pretpersonel::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = pretpersonel::where('lue','false')->get();
        return view('admin_dashbord.pages.DemandePret', compact('donnee'));
       
    }
}
