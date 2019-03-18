<?php
use App\Familia;
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

Route::get('/', function () {
    if(Auth::check()){
        $familias = Familia::all()->where('f_user_creator_id', Auth::user()->id)->sortByDesc('id');
        return view('home', compact('familias'));
    }
    return view('index');
});

Route::get('/addGrupoFamiliar/{limitMax}', function ($limitMax) {
    if(Auth::check()){
        return view('addGrupoFamiliar', compact('limitMax'));
    }
    return view('index');
});

Route::get('/grupoFamiliar/{id}', function ($id){
    if(Auth::check()){
        $familias = Familia::all()->where('f_user_creator_id', Auth::user()->id)->sortByDesc('id');
        $familiaSolicitada = Familia::find($id);
        return view('grupoFamiliar', compact('familiaSolicitada','familias'));
    }
    return view('index');
});

Route::get('/grupoFamiliar','ControllerFamilia@index');
Route::get('/addGrupoFamiliar','ControllerFamilia@create');
Route::post('/addGrupoFamiliar/insert','ControllerFamilia@store');
Auth::routes();


