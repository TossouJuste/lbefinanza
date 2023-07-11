<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    
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

}
