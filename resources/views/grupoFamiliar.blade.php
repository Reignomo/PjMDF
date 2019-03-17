@extends('layouts.app', ["current" => "Familias"])
@section('body')
<style>
    .card-familia{
        height:200px;
    }
    .vertical-center {
    display: flex;
    align-items: center; //centraliza horizontalmente
    justify-content: center; //cetraliza verticalmente
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

    <div class="jumbotron">
         <div class="card-deck">
         @foreach($familias as $familia)
            <div class="card border-secondary mb-3 card-familia  full" style="max-width: 18rem;">
                <div class="card-body vertical-center">
                    <a href=""class="centered card-text text-secondary">{{ $familia->nome }}</a>
                </div>
            </div>
            @endforeach
            @if(count($familias) < 3)
            <div class="card border-secondary mb-3 card-familia  full" style="max-width: 18rem;">
                <div class="card-body text-secondary vertical-center">
                    <a href=""class="centered card-text text-secondary"><i class="fas fa-plus" style="font-size:60px;"></i></a>
                </div>
            </div>
            @endif
           
         </div>
    </div>
@endSection