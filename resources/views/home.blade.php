@extends('layouts.app', ["current" => "home"])
@section('body')
<style>
    .card-familia{
        background-size: cover;
        height:200px;
        opacity:0.6;
    }
    .card-familia:hover{
        opacity:1.0;
        transition:0.4s;
        text-decoration:none; 
    }
    .vertical-center {
        display: flex;
        align-items: center; //centraliza horizontalmente
        justify-content: center; //cetraliza verticalmente
    }
    #img-familias{
        background-position: center center;
    }
</style>
    <div class="card border" style="margin-bottom:60px">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <h2 class="card-title text-primary">Agora você tem mais tempo..</h2>
                    <p class="text-secondary">Outro tipo conhecido de estrutura familiar são as famílias reais. Denomina-se família real a relação estendida dos membros de um soberano, geralmente de um estado monárquico. Os membros das famílias reais recebem destaque e privilégio perante o círculo social de sua nação, sendo muitas vezes tidos como personalidades políticas destes. Uma das mais famosas famílias reais do mundo é a Família real britânica.</p>
                </div>
                <div class="col-xs-12 col-md-6">
                    <img src="/img/grupoFamiliar.jpg" class="img-card-family img-thumbnail" style="width:500px;">
                </div>
            </div>
        </div>
    </div>
    <h2 class="text-primary">Grupos familiares</h2>
    <div class="jumbotron">
         <div class="card-deck">
         @foreach($membros as $membro)
         @php $familia = $familias::all()-> where('m_user_id', $membro->m_user_id); @endphp
            <a href="/grupoFamiliar/{{ $familia->id }}"class="card border-secondary mb-3 card-familia full centered" id="img-familias" style="max-width: 18rem; background-image: url('/storage/{{ $familia->imagem }}');">
                <div class="card-body vertical-center centered text-secondary">
                    <p id="title" class="text-uppercase text-white"><b>{{ $familia->nome }}</b></p>
                </div>
            </a>
           
            @endforeach
            @if(count($membros) < 3)
            <div class="card border-secondary mb-3 card-familia  full centered" style="max-width: 18rem;">
                <div class="card-body text-secondary vertical-center centered">
                    <a href="/addGrupoFamiliar"class="centered card-text text-secondary"><i class="fas fa-plus" style="font-size:60px;"></i></a>
                </div>
            </div>
            @endif
           
         </div>
    </div>
@endSection