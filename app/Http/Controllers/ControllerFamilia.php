<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use Illuminate\Support\Facades\Auth;

class ControllerFamilia extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return view('grupoFamiliar');
        }
        return redirect('/'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('addGrupoFamiliar');
        }
        return redirect('/');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            $familias = Familia::all();
            $familia = new Familia();
            if(count($familias) < $familia->qtMax){
                $familia->nome = $request->input('nomeFamilia');
                $familia->lifestyle = $request->input('idLifestyle');
                $familia->descricao = $request->input('descricaoFamilia');
                $familia->f_user_creator_id = Auth::user()->id;
                $familia->save();
                redirect('/grupoFamiliar');
            }
            else{
                $limitMax = true;
                return redirect('/addGrupoFamiliar/{limitMax}');
            }
         
        }
        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
