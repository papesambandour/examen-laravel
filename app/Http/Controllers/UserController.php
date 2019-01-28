<?php

namespace App\Http\Controllers;

use App\Etudiant;
use App\Http\Requests\EtudiantRequest;
use App\Niveau;
use App\User;
use Collective\Html\FormFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function list()
    {
        $users = User::orderBy('name','ASC')->paginate(8);
        $add = Input::get('add');
        $edit = Input::get('edit');
        $delete = Input::get('delete');
        return view('user/list',compact(['users','add','edit','delete']));
    }
    public function save(Request $request){
        $credetials = $request->all();
        if(count(User::where('email',$credetials['email'])->get()) > 0)
        {
            return back()->with(['status'=>trans('etudiant.msm_succes_saved')]);
        }


         User::create([
            'name' => $credetials['name'],
            'email' => $credetials['email'],
            'password' => Hash::make('passer'),
        ]);
     return   redirect('/user/list?add=1');
        //return back()->with(['status'=>trans('etudiant.msm_succes_saved')]);

    }
    public function add(){

        return view('user.add');

    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('user/show',compact('user'));

    }
    public function edit($id){
        $user = User::findOrFail($id);
        return view('user/edit',compact(['user']));

    }
    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return   redirect('/user/list?delete=1');

    }
    public function update($id,Request $request){
      //  $validaor = EtudiantRequest::va

        $user = User::findOrFail($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();
        return   redirect('/user/list?edit=1');
       // return back()->with(['status'=>trans('etudiant.msm_succes_updated')]);

    }
}
