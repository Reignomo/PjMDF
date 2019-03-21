@extends('layouts.app', ["current" => "Familias"])
@section('body')
<style>
    .img-card-family{
        background-size: cover;
        width:440px;
        height:220px;
        border-radius:1%;
        
    }
    #icon-excluir{
        padding-top:15px;
    }
        @media (max-width: 600px) { 
        .img-card-family {
        background-position: center center;
        }
        #info-familia{
            margin-top:20px;
            margin-bottom:20px;
            text-align:center;
        }
        #container-atividades{
            font-size:14px;
        }
        #ativadesRealizadas{
            display: none !important;
        }
        #row-atividade{
            padding-bottom:5px;
        }
        #icon-excluir{
            padding:0px;
            margin:0px;
        }
    }
    .img-card-atividades{
        border-radius:50%;
        width:50px;
        height:50px;
    }
</style>
    <div class="bd-example">
        @foreach($membros as $membro)
        @php $familia = $familias::all()->where('id', $membro->m_familia_id)->first(); @endphp
        <a @if ($familia->id == $familiaSolicitada->id) class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familia->id }}">{{ $familia->nome }}</a><!-- tornar ativo o botão da familia que está aparecendo na tela -->
        @endforeach
    </div>
    <div class="bs-callout bs-callout-primary bg-white" style="margin-bottom:5px;margin-top:5px;">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <div class="img-card-family img-thumbnail card-body border" style="background-image:url('/storage/{{ $familiaSolicitada->imagem }}');"></div>
                </div>
                <div class="col-xs-12 col-md-4" id="info-familia">
                    <h3 class="card-title text-primary">{{ $familiaSolicitada->nome }}</h3>
                    <div class="text-secondary">
                        <p><b>Quantidade de membros:</b> {{ $qtMembros }} </p>
                        <p><b>Life Style: </b>{{ $familiaSolicitada->lifestyle }}</p>
                        <p><b>Descrição: </b> {{ $familiaSolicitada->descricao }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-3 text-center">
                    <span class="badge badge-primary full">Skills</span>
                    <span class="badge badge-secondary full">PHP 7 <i class="fab fa-php"></i></span>
                    <span class="badge badge-secondary full">Laravel 5.6 <i class="fab fa-laravel"></i></span>
                    <span class="badge badge-secondary full">Bitcoin <i class="fab fa-bitcoin"></i></span>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary float-right text-white" href="/editar/grupoFamiliar/{{ $familiaSolicitada->id }}" ><i class="fas fa-edit"></i></a>
    <div class="bd-example" style="margin-top:60px;">
        <a @if ($dia =="segunda-feira") class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'segunda-feira' }}">Segunda</a> <!-- tornar ativo o botão do dia da semana atual -->
        <a @if ($dia == 'terça-feira') class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'terça-feira' }}">Terça</a>
        <a @if ($dia == 'quarta-feira') class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'quarta-feira' }}">Quarta</a>
        <a @if ($dia == 'quinta-feira') class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'quinta-feira' }}">Quinta</a>
        <a @if ($dia == 'sexta-feira') class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'sexta-feira' }}">Sexta</a>
        <a @if ($dia == 'sábado') class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'sábado' }}">Sábado</a>
        <a @if ($dia == 'domingo') class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familiaSolicitada->id }}/dia/{{ 'domingo' }}">Domingo</a>
    </div>
    <div id="container-atividades" style="margin-top:5px; margin-bottom:5px;padding-top:0px; padding-left:10px;padding-right:10px;">
        <div class="card-body text-center" style="padding:0px">
            <div class="row border rounded bg-primary text-white">
                <div class="col-3">
                    Atividades
                </div>
                <div class="col-5">
                    Descrição
                </div>
                <div class="col-4">
                    Responsável
                </div>
            </div>
            @foreach($atividades as $atividade)
            <div class="row border rounded align-middle bg-white" id="row-atividade" style="min-height:50px;margin-bottom:5px;">
                <div class="col-3" style="margin-top:15px">
                    {{ $atividade->title }}
                </div>
                <div class="col-5 text-center" style="margin-top:15px">
                    {{ $atividade->descricao }}
                </div>
                <div class="col-4">
                    <div class="row"> 
                        <div class="col-xs-2 col-md-3">
                            <img class="img-card-atividades" src="/img/user-img.png">
                        </div>
                        @php $usuarioMembro = $membrosHelper::find($atividade->a_membro_id); @endphp
                        <div class="col-xs-2 col-md-7 text-left" id="col-info-responsavel">
                            <p class="text-primary" style="margin-bottom:0px;">@if($usuarioMembro->nome != null) {{ $usuarioMembro->nome }} @else  {{ $userHelper::find($usuarioMembro->m_user_id)->name }} @endif </p>
                            <span class="badge badge-success">Grão mestre</span>
                            <p class="text-secondary d-flex align-items-center" id="ativadesRealizadas">Atividades realizadas:2211</p>
                        </div>
                        <div class="col-xs-2 col-md-2" id="icon-excluir">
                            <a href="/grupoFamiliar/{{ $familia->id }}/excluirAtividade/{{ $atividade->id }}" id="btnExcluir" class="btn bg-danger centered"><i class="fas fa-trash-alt text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @if(count($atividades)< 1)
            <div class="row border rounded" style="margin-bottom:5px;">
                <div class="col-12">
                    <p class="text-secondary text-center" style="margin-top:10px;">Não há atividades alocadas para esse dia</p>
                </div>
            </div>
            @endif
        </div>
        <a class="btn btn-primary float-right text-white" data-toggle="modal" data-target="#modalAddAtividade"><i class="fas fa-plus"></i></a>
    </div>
    @component('../componentes/modalAtividade', compact('familiaSolicitada','membrosHelper','userHelper'));
    @endcomponent
@endSection