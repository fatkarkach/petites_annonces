<?php

namespace App\Http\Controllers;

use App\Models\Annonces;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    { 
        //on récupère tous les annonces 
        $annonces=Annonces::all();

        // return view('home',[
        //     'annonces'=>$annonces
        // ]);
        return view('home',compact('annonces'));
    }
}
