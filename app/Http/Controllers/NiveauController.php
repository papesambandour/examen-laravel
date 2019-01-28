<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Http\Requests\EtudiantRequest;
use App\Niveau;
use Collective\Html\FormFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class NiveauController extends Controller
{
    public function list()
    {
        $niveaux = Niveau::orderBy('libelle','ASC')->paginate(8);
        $add = Input::get('add');
        $edit = Input::get('edit');
        $delete = Input::get('delete');
        return view('niveau/list',compact(['niveaux','add','edit','delete']));
    }
    public function save(Request $request){

        $niveau = Niveau::create($request->all());
     return   redirect('/niveau/list?add=1');
        //return back()->with(['status'=>trans('etudiant.msm_succes_saved')]);

    }
    public function add(){

        return view('niveau.add');

    }
    public function show($id){
        $niveau = Niveau::findOrFail($id);
        return view('niveau/show',compact('niveau'));

    }
    public function edit($id){
        $niveau = Niveau::findOrFail($id);
        return view('niveau/edit',compact(['niveau']));

    }
    public function delete($id){
        $niveau = Niveau::findOrFail($id);
        $niveau->delete();
        return   redirect('/niveau/list?delete=1');

    }
    public function update($id,Request $request){
      //  $validaor = EtudiantRequest::va

        $niveau = Niveau::findOrFail($id);
        $niveau->libelle = $request->input('libelle');
        $niveau->save();
        return   redirect('/niveau/list?edit=1');
       // return back()->with(['status'=>trans('etudiant.msm_succes_updated')]);

    }
}
