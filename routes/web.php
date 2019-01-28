<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

if(getenv('APP_ENV') === 'production') {
    \Illuminate\Support\Facades\URL::forceScheme('https');
}

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//Route::get('/home', 'HomeController@index')->name('home');


/*Route::get('{n}', function ($n){
    echo 'JE SUIS SUR LA PAGE '.$n ;
});*/


//Lnaguage change
Route::post('/language', 'LangueController@index')->name('language');

Route::group(['middleware' => 'auth'], function () {
   //home
    Route::get('/', 'HomeController@index')->name('Home');


    Route::get('/etudiants/list', 'EtudiantController@list')->name('listEtudiant');
    Route::post('/etudiants/save', 'EtudiantController@save')->name('saveEtudiant');
    Route::get('/etudiants/add', 'EtudiantController@add')->name('addEtudiant');
    Route::get('/etudiants/show/{id}', 'EtudiantController@show')->name('showEtudiant')->where('id','[0-9]+');
    Route::get('/etudiants/edit/{id}', 'EtudiantController@edit')->name('editEtudiant')->where('id','[0-9]+');
    Route::post('/etudiants/update/{id}', 'EtudiantController@update')->name('updateEtudiant')->where('id','[0-9]+');
    Route::get('/etudiants/delete/{id}', 'EtudiantController@delete')->name('deleteEtudiant')->where('id','[0-9]+');

    Route::get('/niveau/list', 'NiveauController@list')->name('listNiveau');
    Route::post('/niveau/save', 'NiveauController@save')->name('saveNiveau');
    Route::get('/niveau/add', 'NiveauController@add')->name('addNiveau');
    Route::get('/niveau/show/{id}', 'NiveauController@show')->name('showNiveau')->where('id','[0-9]+');
    Route::get('/niveau/edit/{id}', 'NiveauController@edit')->name('editNiveau')->where('id','[0-9]+');
    Route::post('/niveau/update/{id}', 'NiveauController@update')->name('updateNiveau')->where('id','[0-9]+');
    Route::get('/niveau/delete/{id}', 'NiveauController@delete')->name('deleteNiveau')->where('id','[0-9]+');

    Route::get('/user/list', 'UserController@list')->name('listuser');
    Route::post('/user/save', 'UserController@save')->name('saveuser');
    Route::get('/user/add', 'UserController@add')->name('adduser');
    Route::get('/user/show/{id}', 'UserController@show')->name('showuser')->where('id','[0-9]+');
    Route::get('/user/edit/{id}', 'UserController@edit')->name('edituser')->where('id','[0-9]+');
    Route::post('/user/update/{id}', 'UserController@update')->name('updateuser')->where('id','[0-9]+');
    Route::get('/user/delete/{id}', 'UserController@delete')->name('deleteuser')->where('id','[0-9]+');
});


