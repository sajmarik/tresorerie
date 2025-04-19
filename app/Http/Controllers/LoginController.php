<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }

    public function login(Request $request)
    {
     $login = $request->login;
     $password = $request->password;
     $credentials = ['email' => $request->email, 'password' => $request->password];

     
if (Auth::attempt($credentials)) {
// se connecter   
   $request->session()->regenerate();
   return to_route('homepage')->with('success','Vous etes bien connecté.');
} else {
// incorrect
   return back()->withErrors([
    'email'=> 'Email ou mot de passe incorrect.',
   ]) ->onlyInput('email');
      }

    
    }
    
    public function logout()
    {

        Session::flush();
        Auth::logout();
        return to_route('login')->with('success','Vous etes bien deconnecté.');


    }

}
