<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
   public function index()
   {
       $nbetudiant = Etudiant::count();
       $nbprof = 0;
       $nbInscription = 0;
       $data = \Illuminate\Support\Facades\Request::session()->all();
       return view('home.index',compact(['nbetudiant','nbprof','nbInscription']));
   }
}
