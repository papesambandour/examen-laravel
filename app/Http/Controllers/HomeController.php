<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Niveau;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
   public function index()
   {
       $nbetudiant = Etudiant::count();
       $nbNiveaux= Niveau::count();
       return view('home.index',compact(['nbetudiant','nbNiveaux']));
   }

   public function about()
   {
       return view('home.about');
   }

   public function getchart()
   {
       $nbetudiant = Etudiant::join('niveaux','niveaux.id','=','etudiants.niveau_id')->groupBy('niveaux.libelle')->select('niveaux.libelle',DB::raw('count(etudiants.id) as nb'))->orderBy('niveaux.libelle','ASC')->get();
       $labelle=[];
       $data=[];

       foreach ($nbetudiant as $e)
       {
           $labelle[] = $e['libelle'];
           $data[] = $e['nb'];
       }

       echo  json_encode(['labelle'=>$labelle,'data'=>$data]);
   }
}
