<?php

namespace App\Http\Controllers;

use App\Models\Depot;
use App\Models\User;
use App\Models\Virement;
use App\Models\Portefeuille;
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
            'nombre'=>$virement->code_pourcentage
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
    public function portefeuille_dashboard(Portefeuille $port)
    {  
       

        return view('client_dashboard.pages.portefeuille',);
    }
    public function valider_virement(Request $request)
    {
        $cred=$request->validate([
        'virement_id'=>['required']
        ]);
        $virement = Virement::where('id',$request->virement_id)->where('user_id',auth()->user()->id)->firstOrFail();
        $virement->valide = 1;
        $virement->save();
        return back()->with(['success' => 'Transfert effectué avec success ']);
    }
    public function virement_code(Request $request){
        $credentials=$request->validate(
            [
                'code'=>['required'],
                'virement_id'=>['required','exists:virements,id']
            ]
            );
            $virement=Virement::find($request->virement_id);
            if($virement->pourcentage<53){
                if($virement->code1==$request->code){
                    $virement->pourcentage=53;
                    $virement->save();
                    return back()->with(['success'=>'Code verifié']);
        
                }else{
                    return back()->withErrors(['error'=>'Code erroné! Veuillez entrer un code valide pour continuer le transfert ou contactez nous via le chat pour avoir votre code de validation ']);
        
                }
            } else  if($virement->pourcentage<75){
                if($virement->code2==$request->code){
                    $virement->pourcentage=75;
                    $virement->save();
                    return back()->with(['success'=>'Code verifié']);
        
                }else{
                    return back()->withErrors(['error'=>'Code erroné! Veuillez entrer un code valide pour continuer le transfert ou contactez nous via le chat pour avoir votre code de validation ']);
        
                }
            }
            else  if($virement->pourcentage<100){
                if($virement->code3==$request->code){
                    $virement->pourcentage=100;
                    $virement->save();
                    return back()->with(['success'=>'Code verifié']);
        
                }else{
                    return back()->withErrors(['error'=>'Code erroné! Veuillez entrer un code valide pour continuer le transfert ou contactez nous via le chat pour avoir votre code de validation ']);
        
                }
            }
           else{
                return back()->withErrors(['error'=>'Code erroné! Veuillez entrer un code valide pour continuer le transfert ']);
    
            }
    
       }
   public function  code_verification(Request $request){
      $credentials=$request->validate(
            [
                'code'=>['required'],
                'virement_id'=>['required','exists:virements,id']
            ]
            );
            $virement=Virement::find($request->virement_id);
            if($virement->code==$request->code){
                $virement->code=null;
                $virement->pourcentage=$virement->code_pourcentage;
                $virement->save();

              return response()->json([ 'pourcentage'=> $virement->pourcentage]);
    
            }else{
              return response()->json([ 'error'=>'Code erroné! Veuillez entrer un code valide pour continuer le transfert']);
            }
    
   }

   public function virement_pourcentage_api($virement_id,$user_id){

        $virement=Virement::where('id',$virement_id)->where('user_id',$user_id)->where('valide',0)->first();
        return response()->json([ 'pourcentage'=> $virement->pourcentage]);

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

public function portefeuille_retrait(Request $request){
    $credientials=$request->validate([
        'numero_compte'=>['required','exists:users,numero_compte'],
        'montant'=>['required','int']
    ]);

    $portefeuille_a=auth()->user()->portefeuilles()->first();
    $user=User::find(auth()->user()->id);
    $portefeuille=Portefeuille::find($portefeuille_a->id);

    if($request->montant < $portefeuille->val_solde){
        
    if( $portefeuille->benef>500){
           $portefeuille->val_solde-=$request->montant;
           $portefeuille->benef-=$request->montant;
           if($portefeuille->benef<0){
            $portefeuille->solde_p+=$portefeuille->benef;
            $portefeuille->benef=0;
           }
           $portefeuille->save();
           $user->solde+=$request->montant;
           $user->save();
           return back()->with(
            ['success' => 'Operation effectuée avec succès.']
        );
    }else{
        return back()->withErrors(
            'Votre solde doit etre superieur à 500 .',
        );
    }
    }else{
        return back()->withErrors(
            'Votre solde est insuffisant pour cette opération.',
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
        $code1=random_int(600254,845654621);
        $code2=random_int(600254,845654621);
        $code3=random_int(600254,845654621);

        if ($request->montant > 0) {
            $user_auth = auth()->user();
            $user = User::find($user_auth->id);
            if ($user->solde > $request->montant) {
                // creeons un depot 
                Virement::create([
                    'pays' => $request->pays,
                    'iban' => $request->iban,
                    'bic' => $request->bic,
                    'code1' => $code1,
                    'code2' => $code2,
                    'code3' => $code3,
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
