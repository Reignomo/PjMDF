@extends('layouts.app', ["current" => "Familias"])
@section('body')
<style>
    .img-card-family{
        background-size: cover;
        width:440px;
        height:220px;
        border-radius:1%;
        
    }
        @media (max-width: 600px) { 
        .img-card-family {
        background-position: center center;
        }
        #info-familia{
            margin-top:20px;
            margin-bottom:20px;
            text-align: center;
        }
    }
    .img-card-atividades{
        border-radius:50%;
        width:50px;
        height:50px;
    }
</style>
    <div class="bd-example">
        @foreach($familias as $familia)
        <a @if ($familia->id == $familiaSolicitada->id) class="btn btn-primary" @else class="btn btn-outline-primary" @endif href="/grupoFamiliar/{{ $familia->id }}">{{ $familia->nome }}</a><!-- tornar ativo o botão da familia que está aparecendo na tela -->
        @endforeach
    </div>
    <div class="bs-callout bs-callout-primary bg-white" style="margin-bottom:60px;margin-top:5px;">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-5">
                    <div class="img-card-family img-thumbnail card-body border" style="background-image:url('/storage/{{ $familiaSolicitada->imagem }}');"></div>
                </div>
                <div class="col-xs-12 col-md-4" id="info-familia">
                    <h3 class="card-title text-primary">{{ $familiaSolicitada->nome }}</h3>
                    <div class="text-secondary">
                        <p><b>Quantidade de membros:</b> 25</p>
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

    <div class="bd-example">
        <a class="btn btn-primary" href="#!">Segunda</a> <!-- tornar ativo o botão do dia da semana atual -->
        <a class="btn btn-outline-primary" href="#!">Terça</a>
        <a class="btn btn-outline-primary" href="#!">Quarta</a>
        <a class="btn btn-outline-primary" href="#!">Quinta</a>
        <a class="btn btn-outline-primary" href="#!">Sexta</a>
        <a class="btn btn-outline-primary" href="#!">Sábado</a>
        <a class="btn btn-outline-primary" href="#!">Domingo</a>
    </div>
    <div class="container" style="margin-top:5px; margin-bottom:5px;padding-top:0px;padding-left:0px;">
        <div class="card-body text-center">
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
            <div class="row border rounded align-middle bg-white" style="min-height:50px">
                <div class="col-3 d-flex  align-items-center">
                    Sair com o Zeus
                </div>
                <div class="col-5 d-flex  align-items-center">
                    Tem que sair com ele duas vezes por dia.
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-xs-2 col-md-3">
                            <img class="img-card-atividades" src="/img/wil.jpg">
                        </div>
                        <div class="col-xs-2 col-md-9 text-left">
                            <p class="text-primary d-flex align-items-center" style="margin-bottom:0px;">Evandro ignacio</p>
                            <span class="badge badge-success">Grão mestre</span>
                            <p class="text-secondary d-flex  align-items-center">Atividades realizadas:2211</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="btn btn-primary float-right" href="!#"><i class="fas fa-plus"></i></a>
@endSection