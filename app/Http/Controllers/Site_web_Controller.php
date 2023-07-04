<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Site_web_Controller extends Controller
{
    public function P_principal()
    {
        return view('Siteweb_SeedBank.Page_principal');
    }
}
