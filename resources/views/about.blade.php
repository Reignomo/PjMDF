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
        <small class="text-secondary">Esse sistema foi desenvolvido para fins de estudo.</small>
        <p style="margin-top:20px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="row centered">
            <div class="col-6 content-text text-center">
                <h4>Tecnologias utilizadas</h4>
                <ul >
                    PHP 7.2<br>
                    Laravel 5.6<br>
                    Bootstrap 4<br>
                    Composer<br>
                </ul>
            </div> 
            <div class="col-6 content-text text-center">
            <h4>Repositório</h4>
                Github - Projeto Modern family <a href=""  style="font-size:25px;"><i class="fab fa-github-square"></i></a>
            </div>
        </div>
        <div class="row centered">
            <div class="col-6 content-text text-center">
                <h4>Outros projetos</h4>
                Github - Evandro Ignácio <a href=""  style="font-size:25px;"><i class="fab fa-github-square"></i></a><br>
                Bitbucket - Evandro Ignácio <a href=""  style="font-size:25px;"><i class="fab fa-bitbucket"></i></a>
            </div>
            <div class="col-6 content-text text-center">
                <h4>Contato</h4>
                <i class="fa fa-phone text-primary"></i> (13)997125069<br>
                <i class="fas fa-envelope-square text-primary"></i> eignacio403@gmail.com
            </div>
        </div> 
    </div>
@endSection