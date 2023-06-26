<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function accueil_dashboard(){
        return view('client_dashboard.pages.index');
    }
}
