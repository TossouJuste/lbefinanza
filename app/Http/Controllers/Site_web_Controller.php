<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\formulaire;
use App\Models\pretpersonel;
use App\Models\carte;
use App\Models\contact;
use App\Models\donation;
use App\Models\investissement;

class Site_web_Controller extends Controller
{
    public function P_principal()
    {
        return view('Siteweb_SeedBank.Page_principal');
    }
    public function P_about()
    {
        return view('Siteweb_SeedBank.About');
    }
    public function P_carte()
    {
        return view('Siteweb_SeedBank.carte');
    }
    public function P_contact()
    {
        return view('Siteweb_SeedBank.Contact');
    }
    public function P_loan()
    {
        return view('Siteweb_SeedBank.Pret');
    }
    public function P_donation()
    {
        return view('Siteweb_SeedBank.Donation');
    }
    public function P_insurance()
    {
        return view('Siteweb_SeedBank.Assurance');
    }
    public function P_investmentPlanning()
    {
        return view('Siteweb_SeedBank.Planification-investissement');
    }
    public function car_loan()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_automobile');
    }
    public function form_car_loan()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_automobile');
    }
    public function commercial_loan()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_commercial');
    }
    public function form_commercial_loan()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_commercial');
    }
    public function debt_consolidation_loan()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_de_consolidation_de_dettes');
    }
    public function form_debt_consolidation_loan()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_de_consolidation_de_dettes');
    }
    public function loan_entrepreneur()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_entrepreneur');
    }
    public function form_loan_entrepreneur()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_entrepreneur');
    }
    public function loan_entreprise()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_entreprise');
    }
    public function form_loan_entreprise()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_entreprise');
    }
    public function loan_student()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_etudiant');
    }
    public function form_loan_student()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_etudiant');
    }
    public function loan_mortgage()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_hypothecaire');
    }
    public function form_loan_mortgage()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_hypothecaire');
    }
    public function loan_sick()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_maladie');
    }
    public function form_loan_sick()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_maladie');
    }
    public function loan_personal()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Pret_personnel');
    }
    public function form_loan_personal()
    {
        return view('Siteweb_SeedBank.formulaire.Pret_personnel');
    }
    public function loan_mariage()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Credit_mariage');
    }
    public function form_loan_mariage()
    {
        return view('Siteweb_SeedBank.formulaire.Credit_mariage');
    }
    public function loan_birth()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Credit_naissance');
    }
    public function form_loan_birth()
    {
        return view('Siteweb_SeedBank.formulaire.Credit_naissance');
    }
    public function loan_travel()
    {
        return view('Siteweb_SeedBank.Page_formulaire.Credit_special_voyage');
    }
    public function form_loan_travel()
    {
        return view('Siteweb_SeedBank.formulaire.Credit_special_voyage');
    }






    //formulaire-post

    public function post_car_loan(formulaire $request,pretpersonel $model)
    { 
         $maVariable = $request->input('maVariable');
       pretpersonel::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email'=> $request->email,
        'telephone'=> $request->telephone,
        'pays' => $request->pays,
        'codePostal'=>$request->codePostal,
        'montant' => $request->montant,
        'statut' => $request->statut,
        'adresse' => $request->adresse,
        'raison' => $request->raison,
        'piece'  => $request->piece,
        'ville' => $request->ville,
        'duree'=> $request->duree,
        'propriete' =>$request->propriete,
        'chiffreAffaires'=>$request->chiffreAffaires,
        'description'=>$request->description, 
        'secteur'=>$request->secteur,
        'montantDette'=>$request->montantDette,
        'creanciers'=>$request->creanciers,
        'mensualiteActuelle' =>$request->mensualiteActuelle,
        'marque' =>$request->marque,
        'modele' =>$request->modele,
        'annee' =>$request->annee,
        'dureeVoyage' =>$request->dureeVoyage,
        'dateDepart'=>$request->dateDepart,
        'destination'=>$request->destination,
        'dateNaissance'=>$request->dateNaissance,
        'lieuNaissance'=>$request->lieuNaissance,
        'nom_conjointe'=>$request->nom_conjointe,
        'prenom_conjointe'=>$request->prenom_conjointe,
        'typepret'=>$request->typepret,

       ]);
       return view('Siteweb_SeedBank.redirect',[
        'email'=>  $request->email,
        'nom'=>  $request->nom,
        'mavariable'=>$maVariable ,
      ]);

      
    }

    public function demande_cartes()
    {
        return view('Siteweb_SeedBank.formulaire.demandecarte');
    }
    public function demande_carte(formulaire $request,carte $table)
    {
        carte::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'pays' => $request->pays,
            'codePostal'=>$request->codePostal,
            'ville' => $request->ville,
            'adresse' => $request->adresse,
            'datereception' =>$request->datereception,
            'typecarte' =>$request->typecarte,
        ]);
        return view('Siteweb_SeedBank.redirect_carte',[
            'email'=>  $request->email,
            'nom'=>  $request->nom,
           
          ]);
    }

   

    public function demande_donation(formulaire $request,donation $table)
    {
        donation::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'pays' => $request->pays,
            'codePostal'=>$request->codePostal,
            'ville' => $request->ville,
            'adresse' => $request->adresse,
            'type_don' => $request->type_don,
           
        ]);
        return view('Siteweb_SeedBank.redirect_donation',[
            'email'=>  $request->email,
            'nom'=>  $request->nom,
           
          ]);
    }

    public function demande_gestion_portefeuilles()
    {
        return view('Siteweb_SeedBank.formulaire.demande_gestion_portefeuilles');
    }
    public function demande_gestion_portefeuille(formulaire $request,investissement $table)
    {
        investissement::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'pays' => $request->pays,
            'codePostal'=>$request->codePostal,
            'ville' => $request->ville,
            'adresse' => $request->adresse,
            'valeur_portefeuil' =>$request->valeur_portefeuil,
            'type_portefeuil' =>$request->type_portefeuil,
        ]);
        return view('Siteweb_SeedBank.redirect_gestion_portefeuilles',[
            'email'=>  $request->email,
            'nom'=>  $request->nom,
           
          ]);
    }

    public function contact(Request $request,contact $table)
    {
        contact::create([
            'nom' => $request->nom,
            
            'email'=> $request->email,
          
            'subject' => $request->subject,
            'message' => $request->message,
           
        ]);
        return view('Siteweb_SeedBank.redirect_contact',[
            'email'=>  $request->email,
            'nom'=>  $request->nom,
           
          ]);
    }
    public function Term()
    {
        return view('Siteweb_SeedBank.politique');
    }
    
    


   
   
}
