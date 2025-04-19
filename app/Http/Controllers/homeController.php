<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class homeController extends Controller
{
public function index(Request $request){
    $user = [
        ['id' =>'1', 'nom' => 'Ajmarik', 'metier' => 'Expert technique'],
        ['id' =>'1', 'nom' => 'Ajmarik', 'metier' => 'Expert technique'],
        ['id' =>'1', 'nom' => 'Ajmarik', 'metier' => 'Expert technique'],
    ];
    return view("home", compact("user"));
}
}
