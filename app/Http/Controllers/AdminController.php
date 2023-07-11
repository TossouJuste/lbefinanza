<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pretpersonel;
use App\Models\donation;
use App\Models\investissement;
use App\Models\contact;
use App\Models\carte;

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

    
    
    public function contact(contact $table)
    {
        $donnee = contact::where('lue','false')->get();

        return view('admin_dashbord.pages.contactReception', compact('donnee'));
    }

    public function contact_control(contact $table,$id)
    {
        $donne = contact::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = contact::where('lue','false')->get();
        return view('admin_dashbord.pages.contactReception', compact('donnee'));
       
    }

    public function donation(donation $table)
    {
        $donnee = donation::where('lue','false')->get();

        return view('admin_dashbord.pages.donnationReception', compact('donnee'));
    }

    public function donation_control(donation $table,$id)
    {
        $donne = donation::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = donation::where('lue','false')->get();
        return view('admin_dashbord.pages.donnationReception', compact('donnee'));
       
    }

    public function gestion(investissement $table)
    {
        $donnee = investissement::where('lue','false')->get();

        return view('admin_dashbord.pages.gestionportefeuilReception', compact('donnee'));
    }

    public function gestion_control(investissement $table,$id)
    {
        $donne = investissement::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = investissement::where('lue','false')->get();
        return view('admin_dashbord.pages.gestionportefeuilReception', compact('donnee'));
       
    }

    
    public function carte(carte $table)
    {
        $donnee = carte::where('lue','false')->get();

        return view('admin_dashbord.pages.Demandecarte', compact('donnee'));
    }

    public function carte_control(carte $table,$id)
    {
        $donne = carte::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = carte::where('lue','false')->get();
        return view('admin_dashbord.pages.Demandecarte', compact('donnee'));
       
    }
}
