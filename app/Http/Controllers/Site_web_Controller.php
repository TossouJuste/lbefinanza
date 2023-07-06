<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
   
   
}
