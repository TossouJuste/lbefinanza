<?php

namespace App\Http\Controllers;

use App\Http\Requests\validateRegister;
use App\Models\User;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Notifications\ConfirmationNotification;


class AuthController extends Controller
{
    public function login_view(){
        return view('auth.pages.login');
    }
    
    public function register_view(){
        return view('auth.pages.register');
    }
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt(request()->only(['email', 'password']))) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        return back()->withErrors([
            'email' => 'Mot de passe ou email incorrect.',
        ])->onlyInput('email');
    }
    public function Inscription(validateRegister $request,User $inserte)
    { 
      $emails = $request->email;
      $token=Str::random(16);
      $user= User::create([
          'nom' => $request->nom,
          'prenom' => $request->prenom,
          'email'=> $request->email,
          'telephone'=> $request->telephone,
          'civilite' => $request->civilite,
          'pays' => $request->pays,
          'devise' => $request->devise,
          'confirmation_token'=>$token,
          'password' =>  Hash::make($request->password)
      ]);

$user->notify(new ConfirmationNotification($token) );
     
      return view('auth.pages.Envoi_mail',[
        'email'=> $emails
      ]);
      
    }
    public function confirmation($token){

    }
    public function Envoi_mail()
    {
        return view('auth.pages.Envoi_mail');
    }
    public function forget_password()
    
    {
        return view('auth.pages.password_forget');
    }
}
