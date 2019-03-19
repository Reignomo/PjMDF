<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Membros;
use App\User;

class ControllerMembros extends Controller
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
        $membro = new Membros();
        if($request->input('emailMembro') != ""){
            $user = new User();
            $user = User::all()->where('email', $request->input('emailMembro'))->first();
            if($user != null){
                $membro->nome="";
                $membro->m_user_id =  $user->id;
                $membro->m_familia_id = $idFamilia;
                $membro->save();
                return redirect('/editar/grupoFamiliar/'.$idFamilia.'');
            }
            return redirect('/editar/grupoFamiliar/'.$idFamilia.'/error');
        }
        $membro->nome= $request->input('nomeMembroNaoCadastrado');
        $membro->m_familia_id = $idFamilia;
        $membro->save();
        return redirect('/editar/grupoFamiliar/'.$idFamilia.'');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idFamilia, $idMembro)
    {
        Membros::where('id', $idMembro)->delete();
       return redirect('/editar/grupoFamiliar/'.$idFamilia.'');
    }
}
