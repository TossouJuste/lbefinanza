<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateRegister;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_view(){
        return view('auth.pages.login');
    }
    
    public function register_view(){
        return view('auth.pages.register');
    }
    public function Inscription(validateRegister $request)
    {
      
    }
}
