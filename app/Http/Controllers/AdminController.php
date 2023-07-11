<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\Transation;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\pretpersonel;
use App\Models\Virement;

class AdminController extends Controller
{


    public function accueil_dashboard()
    {
        $transations=Transation::all();
        $users=User::all();
        $depots=Depot::all();
        $virements=Virement::all();
        return view('admin_dashbord.pages.index',[
            'transations'=>$transations->count(),
            'users'=>$users->count(),
            'depots'=>$depots->count(),
            'virements'=>$virements->count(),
        ]);
    }

    public function demande_pret(pretpersonel $table)
    {
        $donnee = pretpersonel::where('lue', 'false')->get();

        return view('admin_dashbord.pages.DemandePret', compact('donnee'));
    }

    public function demande_pret_control(pretpersonel $table, $id)
    {
        $donne = pretpersonel::find($id);
        $donne->lue = true;
        $donne->save();
        $donnee = pretpersonel::where('lue', 'false')->get();
        return view('admin_dashbord.pages.DemandePret', compact('donnee'));
    }


    public function client_non_valide()
    {
        $clients = User::where('admin_validation', null)->get();
        return view('admin_dashbord.pages.client_non_valide', [
            'clients' => $clients
        ]);
    }
    public function clients()
    {
        $clients = User::where('admin_validation', 1)->get();
        return view('admin_dashbord.pages.clients', [
            'clients' => $clients
        ]);
    }
    public function virements()
    {
        $virements = Virement::all();
        return view('admin_dashbord.pages.virements', [
            'virements' => $virements
        ]);
    }
    public function transations()
    {
        $transations = Transation::all();
        return view('admin_dashbord.pages.transations', [
            'transations' => $transations
        ]);
    }
    public function chat_admin()
    {
        return view('admin_dashbord.pages.chat');
    }

    public function valide_client($id)
    {
        $user = User::findOrFail($id);
        $user->admin_validation = 1;
        $user->save();
        return back()->with(['success' => 'Client validé avec success']);
    }
    public function delete_client($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with(['success' => 'Client suprimer avec success']);
    }


    public function change_virement_progression(Request $request)
    {
        $credientials = $request->validate([
            'virement_id' => ['required'],
            'pourcentage' => ['required', 'int'],
            'temps_attente'=>['required']
        ]);
        $virement = Virement::findOrFail($request->virement_id);
        $virement->pourcentage = $request->pourcentage;
        $virement->temps_attente = $request->temps_attente;
        $virement->save();
        return back()->with(['success' => 'Pourcentage modifié avec succes']);
    }


    public function delete_virement($id)
    {
        $virement = Virement::findOrFail($id);
        $virement->delete();
        return back()->with(['success' => 'Virement modifié avec succes ']);
    }
    public function valider_virement($id)
    {
        $virement = Virement::findOrFail($id);
        $virement->valide = 1;
        $virement->save();
        return back()->with(['success' => 'Virement validé avec succes ']);
    }

    public function crediter_compte(Request $request)
    {
        $credientials = $request->validate([
            'user_id' => ['required','exists:users,id'],
            'id_transation' => ['required'],
            'nom_banque' => ['required'],
            'date_heure' => ['required'],
            'motif' => ['required'],
            'montant' => ['required','int']
        ]);

        if($request->montant>0){
         Transation::create([
            'user_id' => $request->user_id,
            'id_transation_banque' => $request->id_transation,
            'nom_banque' => $request->nom_banque,
            'date_heure' => $request->date_heure,
            'motif' => $request->motif,
            'montant' => $request->montant
         ]);
         $user=User::findOrFail($request->user_id);
         $user->solde+=$request->montant;
         $user->save();
        return back()->with(['success' => 'compte crediter avec success ']);

        }else{
        return back()->withErrors('Montant doit etre superieur à 0');

        }


    }
}
