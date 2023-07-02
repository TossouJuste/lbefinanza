<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function accueil_dashboard(){
        return view('admin_dashbord.components.app');
    }
}
