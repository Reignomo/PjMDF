@extends('layouts.app', ["current" => "home"])
@section('body')
<style>
    .img-card-family{
        width:220px;
        border-radius:5%;
    }
</style>
    <div class="bs-callout bs-callout-primary bg-white" style="margin-bottom:60px;">
        <div class="card-body">
            <div class="row centered">
                <div class="col-xs-12 col-md-3 centered">
                    <img alt="Responsive image" src="/img/familiaExemple.jpg" class="img-card-family img-thumbnail">
                </div>
                <div class="col-xs-12 col-md-5 centered text-center">
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

    <div class="card border">
        ss
    </div>
@endSection