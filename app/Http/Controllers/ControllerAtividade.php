<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Atividade;
use Illuminate\Support\Facades\Auth;

class ControllerAtividade extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idFamilia)
    {
        if(Auth::check()){
            $atividade = new Atividade();
            $atividade->title = $request->input('tituloAtividade');
            $atividade->dia = $request->input('diaAtividade');
            $atividade->descricao = $request->input('descricaoAtividade');
            $atividade->a_familia_id = $idFamilia;
            $atividade->a_membro_id = $request->input('idMembroAtividade');
            $atividade->save();
            return redirect('/grupoFamiliar/'.$idFamilia.'/dia/'.$request->input('diaAtividade').'');
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
    public function destroy($idAtividade, $idFamilia)
    {
        if(Auth::check()){
           Atividade::where('id', $idAtividade)->delete();
           return redirect('grupoFamiliar/'.$idFamilia.'');
        }
        return redirect('/'); 
    }
}
