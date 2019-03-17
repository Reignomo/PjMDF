@extends('layouts.app', ["current" => "Familias"])
<style>
.shadow-text{
    text-shadow: 2px 2px #D8D8D8;
}


</style>
@section('body')
    <h1 class="text-primary shadow-text text-center">Adicione um novo grupo familiar</h1>
        <div class="card col-6 centered">
            <div class="card-body">
                <div class="justify-content-center">
                    <div class="col-xs-12 col-md-12">
                        <form id="formCadastro" method="post" action="/cliente/cadastrar">
                            @csrf
                            <div class="form-group">
                                <label for="nmCliente" class="text-secondary">Nome</label>
                                <input type="text" name="nomeCliente" class="form-control" id="nmCliente" aria-describedby="nomehelp" placeholder="Digite o nome completo do cliente por favor">
                            </div>
                            <div class="form-group">
                                <label for="idadeCliente" class="text-secondary">Idade</label>
                                <input type="text" name="idadeCliente" class="form-control" id="idadeCliente" aria-describedby="idadeHelp" placeholder="Ex: 20">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="idDepartamento">
                                    <option value="" disabled selected>Escolha um departamento</option>
                                   
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricaoCliente" class="text-secondary">Descrição</label>
                                <textarea type="text" name="descricaoCliente" class="form-control" id="descricaoCliente" aria-describedby="descricaohelp" placeholder="Aqui você pode colocar um texto adicional sobre o cliente"></textarea>
                            </div>
                            <button class="btn btn-secundary" type="submit" form="formCadastro" value="Submit">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endSection

