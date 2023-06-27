<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateRegister;
use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Client;

class AuthController extends Controller
{
    public function login_view(){
        return view('auth.pages.login');
    }
    
    public function register_view(){
        return view('auth.pages.register');
    }
    public function Inscription(validateRegister $request,Client $insert,User $inserte)
    {  $pass = bcrypt('$request->password');
        Client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email'=> $request->email,
            'telephone'=> $request->telephone,
            'civilite' => $request->civilite,
            'pays' => $request->pays,
            'devise' => $request->devise,
            'password' => $pass,
        ]);

        User::create([
            'name' => $request->nom,
            'email'=> $request->email,
            'password' => $pass 
            
        ]);
        
    }
}
