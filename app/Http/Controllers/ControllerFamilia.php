<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Familia;
use App\Membros;
use App\User;
use App\Atividade;
use Carbon\Carbon;
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
            setlocale(LC_TIME, 'portuguese'); 
            date_default_timezone_set('America/Sao_Paulo');
            $now = new Carbon();
            $now->day;
            $dia = utf8_encode($now->formatLocalized('%A'));
            $familias = new Familia();
            $membrosHelper = new Membros();
            $userHelper = new User();
            $membros = Membros::all()->where('m_user_id', Auth::user()->id)->sortByDesc('id');
            if(count($membros) >= 1){
                $membro = Membros::all()->where('m_user_id', Auth::user()->id)->sortByDesc('id')->first();
                $familiaSolicitada = $familias::all()->where('id', $membro->m_familia_id)->first();
                $atividades = Atividade::all()->where('a_familia_id', $familiaSolicitada->id)->where('dia',$dia);
                $qtMembros = count(Membros::all()->where('m_familia_id', $familiaSolicitada->id));
                return view('grupoFamiliar', compact('familias','familiaSolicitada','qtMembros'), compact('membros','membrosHelper','userHelper','atividades','dia'));
            }
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
            $membros = new Membros();
            if(count($familias) < $familia->qtMax){
                $tempPath = $request->file('imagemFamilia')->store('familias','public');
                $familia->nome = $request->input('nomeFamilia');
                $familia->lifestyle = $request->input('LifestyleFamilia');
                $familia->descricao = $request->input('descricaoFamilia');
                $familia->imagem =  $tempPath;
                $familia->f_user_creator_id = Auth::user()->id;
                $familia->save();
                $idFamilia = Familia::all()->sortByDesc('id')->first();
                $membros->m_user_id = Auth::user()->id;
                $membros->m_familia_id = $idFamilia->id;
                $membros->save();
               
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
    public function update(Request $request, $idFamilia)
    {
        Familia::where('id', $idFamilia)->update(["nome" => $request->input('nomeFamilia'), "lifestyle" => $request->input('LifestyleFamilia'), "descricao" => $request->input('descricaoFamilia')]);
        return redirect('/editar/grupoFamiliar/'.$idFamilia.'');
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
