<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //method por la page d'acceil
    public function home()
    {
        echo "faho";
    }
    //methode por la page  bpnjour 
    public function bonjour($prenom)
    {
        echo "bonjour $prenom";
    }
}
