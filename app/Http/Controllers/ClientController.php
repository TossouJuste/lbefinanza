<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\User;
use App\Models\Virement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClientController extends Controller
{
    //
    public function accueil_dashboard()
    {
        return view('client_dashboard.pages.index');
    }
    public function my_account()
    {
        return view('client_dashboard.pages.account');
    }
    public function my_profil()
    {
        return view('client_dashboard.pages.profil');
    }
    public function my_transations()
    {
        return view('client_dashboard.pages.transations');
    }
    public function new_transfert()
    {
        return view('client_dashboard.pages.new_transfert');
    }
    public function new_virement()
    {  $user=auth()->user();
        $virement=Virement::where('user_id',$user->id)->where('valide',0)->first();
        // dd($virement);
        return view('client_dashboard.pages.new_virement',[
            'virement_cours'=>$virement
        ]);
    }
    public function virement_pourcentage($user_id,$virement_id)
    {  
        $virement=Virement::where('id',$virement_id)->where('user_id',$user_id)->where('valide',0)->first();
        return view('client_dashboard.pages.virement_pourcentage',[
            'virement'=>$virement
        ]);
    }
    public function virement_nombre_pourcentage($user_id,$virement_id)
    {  
        $virement=Virement::where('id',$virement_id)->where('user_id',$user_id)->where('valide',0)->first();
        return view('client_dashboard.pages.nombre_pourcentage',[
            'nombre'=>$virement->pourcentage
        ]);
    }
    
    public function chat_view()
    {
        return view('client_dashboard.pages.chat');
    }
    public function chat_admin_view()
    {

        return view('client_dashboard.pages.chat_admin');
    }



    public function depot(Request $request)
    {
        $credentials = $request->validate([
            'numero_compte' => ['required', 'exists:users,numero_compte'],
            'motif' => ['required'],
            'montant' => ['required', 'int'],
        ]);

        if ($request->montant > 0) {
            $user_auth = auth()->user();
            $user = User::find($user_auth->id);
            $user_2 = User::where('numero_compte', $request->numero_compte)->first();
            if ($user->solde > $request->montant) {

                if($user->id!=$user_2->id){
                // creeons un depot 
                Depot::create([
                    'numero_compte' => $request->numero_compte,
                    'motif' => $request->motif,
                    'montant' => $request->montant,
                    'user_id' => $user->id
                ]);

                $user->solde -= $request->montant;
                $user_2->solde += $request->montant;
                $user->save();
                $user_2->save();


                return back()->with(
                    ['success' => 'Operation effectuée avec succès.']
                );
            }else{
                return back()->withErrors(
                    "Vous tentez d'envoyer de l'argent à vous même!",
                );
            }
            } else {
                return back()->withErrors(
                    'Votre solde est insuffisant pour cette opération.',
                );
            }
        } else {
            return back()->withErrors(
                'Montant entré non valide.',
            );
        }
    }



    // effectuer un virement 

    public function virement(Request $request)
    {
        $credentials = $request->validate([
            'pays' => ['required'],
            'banque' => ['required'],
            'iban' => ['required'],
            'bic' => ['required'],
            'intitule_compte' => ['required'],
            'montant' => ['required','int'],
        ]);

        if ($request->montant > 0) {
            $user_auth = auth()->user();
            $user = User::find($user_auth->id);
            if ($user->solde > $request->montant) {
                // creeons un depot 
                Virement::create([
                    'pays' => $request->pays,
                    'iban' => $request->iban,
                    'bic' => $request->bic,
                    'banque' => $request->banque,
                    'montant' => $request->montant,
                    'intitule_compte' => $request->intitule_compte,
                    'user_id' => $user->id
                ]);

                $user->solde -= $request->montant;
               $user->save();
               

                return back()->with(
                    ['success' => 'Operation effectuée avec succès.']
                );
            } else {
                return back()->withErrors(
                    'Votre solde est insuffisant pour cette opération.',
                );
            }
        } else {
            return back()->withErrors(
                'Montant entré non valide.',
            );
        }
    }
}
