<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function accueil_dashboard(){
        return view('client_dashboard.pages.index');
    }
    public function my_account(){
        return view('client_dashboard.pages.account');
    }
    public function my_profil(){
        return view('client_dashboard.pages.profil');
    }
    public function my_transations(){
        return view('client_dashboard.pages.transations');
    }
    public function new_transfert(){
        return view('client_dashboard.pages.new_transfert');
    }
    public function new_virement(){
        return view('client_dashboard.pages.new_virement');
    }
    public function chat_view(){
        return view('client_dashboard.pages.chat');
    }
}
