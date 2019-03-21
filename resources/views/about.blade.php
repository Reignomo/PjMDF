@extends('layouts.app', ["current" => "about"])
@section('body')
<style>
    .content-text{
        margin-top:30px;
        margin-bottom:30px;
    }
</style>
    <div class="col-xs-12 col-md-8 centered" id="content">
        <h1 class="text-primary">Modern family</h1>
        <p class="text-secondary">Projeto para estudos (Back-end)</p>
        <p style="margin-top:20px;">Esse projeto trata-se de um sistema de gerencimento de atividades familiares, ele foi desenvolvido para fins de estudo, e nele o usúario pode realizar operações como, cadatro, criação de grupos familiares e gerenciamento de atividades. No processo de criação foram utilizadas
        diferentes ferramentas, com foco no framework Laravel 5.6 .</p>
        <p>Para ter mais informações sobre o prejeto, ou entrar em contato, utilize os canais de comunicação listado abaixo.</p>
        <div class="row centered">
            <div class="col-xs-12 col-md-5 card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="content-text text-center">
                        <h4>Tecnologias utilizadas</h4>
                        PHP 7.2<br>
                        Laravel 5.6<br>
                        Bootstrap 4<br>
                        Composer<br>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div> 
            <div class="col-xs-12 col-md-5 card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="content-text text-center">
                    <h4>Repositório</h4>
                        <a href="" style="font-size:60px;"><i class="fab fa-github-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row centered">
            <div class="col-xs-12 col-md-5 card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="text-center">
                        <h4 class="">Outros projetos</h4>
                        <a href=""  style="font-size:60px;"><i class="fab fa-github-square"></i></a><br>
                        <a href=""  style="font-size:60px;"><i class="fab fa-bitbucket"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-2">
            </div>
            <div class="col-xs-12 col-md-5 card shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                    <div class="content-text text-center">
                        <h4>Contato</h4>
                        <i class="fa fa-phone text-primary"></i> (13)997125069<br>
                        <i class="fas fa-envelope-square text-primary"></i> eignacio403@gmail.com
                    </div>
                </div>
            </div>
        </div> 
    </div>
@endSection