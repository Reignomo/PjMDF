@extends('layouts.app', ["current" => "home"])
@section('body')
<style>
    .img-card-family{
        width:220px;
        border-radius:5%;
    }
</style>
    <div class="bd-example">
        <a class="btn btn-primary" href="#!">Familia 1</a> <!-- tornar ativo o botão da familia que está aparecendo na tela -->
        <a class="btn btn-outline-primary" href="#!">Familia 2</a>
    </div>
    <div class="bs-callout bs-callout-primary bg-white" style="margin-bottom:60px;margin-top:5px;">
        <div class="card-body">
            <div class="row centered">
                <div class="col-xs-12 col-md-3 centered">
                    <img alt="Responsive image" src="/img/familiaExemple.jpg" class="img-card-family img-thumbnail">
                </div>
                <div class="col-xs-12 col-md-5 centered">
                    <h3 class="card-title text-primary">Nome da familia</h3>
                    <div class="text-secondary">
                        <p><b>Quantidade de membros:</b> 25</p>
                        <p><b>Life Style:</b> Saudável</p>
                        <p><b>Descrição:</b> Familia pastel.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4 centered text-center">
                    <span class="badge badge-primary full">Skills</span>
                    <span class="badge badge-secondary full">PHP 7 <i class="fab fa-php"></i></span>
                    <span class="badge badge-secondary full">Laravel 5.6 <i class="fab fa-laravel"></i></span>
                    <span class="badge badge-secondary full">Bitcoin <i class="fab fa-bitcoin"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="bd-example">
        <a class="btn btn-primary" href="!#">Segunda</a> <!-- tornar ativo o botão do dia da semana atual -->
        <a class="btn btn-outline-primary" href="#!">Terça</a>
        <a class="btn btn-outline-primary" href="#!">Quarta</a>
        <a class="btn btn-outline-primary" href="#!">Quinta</a>
        <a class="btn btn-outline-primary" href="#!">Sexta</a>
        <a class="btn btn-outline-primary" href="#!">Sábado</a>
        <a class="btn btn-outline-primary" href="#!">Domingo</a>
    </div>
    <div class="card border" style="margin-top:5px; margin-bottom:5px;">
        ss
    </div>
    <a class="btn btn-primary float-right" href="!#"><i class="fas fa-plus"></i></a>
@endSection