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
   
}
