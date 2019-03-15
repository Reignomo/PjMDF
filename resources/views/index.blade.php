@extends('layouts.app', ["current" => "home"])
@section('body')
<style>
    #banner{
        width: 100%;
        position: relative;
        padding-top:30px;
        height:475px;
    }
    #banner #bg{
        position: absolute;
        top:0px;
        left:0px;
        opacity : 0.5 ; 
        background-image:url('/img/banner.jpg');  
        width: 100%;
        height:475px;
        border-radius:1%;
    }
</style>
<div class="col-12" id="banner">
    <div id="bg" class="border">
    </div>
    <div class="row centered" id="banner-content">
        <div class="col-xs-12 col-md-8 text-center" style="padding-top:120px">
            <h2 class="text-primary text-shadow">Modern Family</h2>
            <p class="text-secondary"><b>Aqui você gerencia as atividade familiar com apenas alguns clicks</b></p>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="card border shadow p-3 mb-5 bg-white rounded">
                <div class="card-body">
                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class=" text-md-right">{{ __('E-mail') }}</label>
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <label for="password" class="text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group row">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Salvar sessão') }}
                                </label>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Esqueceu a senha ?') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-jumbotron border shadow p-3 mb-5 bg-white rounded bg-secondary" style="margin-top:120px;">
    <div class="row">
        <div class="col-xs-12 col-md-4 text-center" style="padding-top:20px;">
            <i class="fas fa-calendar-check text-primary" style="font-size:60px; margin-bottom:5px;"></i>
            <h4 class="text-primary">Gerencie as atividade</h4>
            <p class="text-secondary">Na Modern Family você pode gerenciar suas tarefas familhares fácil e rapido.</p>
        </div>

        <div class="col-xs-12 col-md-4 text-center" style="padding-top:20px;">
            <i class="fas fa-user-friends text-primary" style="font-size:60px; margin-bottom:5px;"></i>
            <h4 class="text-primary">Gerencie as atividade</h4>
            <p class="text-secondary">Na Modern Family você pode gerenciar suas tarefas familhares fácil e rapido.</p>
        </div>

        <div class="col-xs-12 col-md-4 text-center" style="padding-top:20px;">
            <i class="fas fa-home text-primary" style="font-size:60px; margin-bottom:5px;"></i>
            <h4 class="text-primary">Gerencie as atividade</h4>
            <p class="text-secondary">Na Modern Family você pode gerenciar suas tarefas familhares fácil e rapido.</p>
        </div>

    </div>
</div>
@endSection