@extends('layouts.app', ["current" => "Familias"])
@section('body')
    <div class="col-xs-12 col-md-8 centered">
        @if(isset($error))
        <div class="alert alert-warning border" role="alert">
        Email informádo inválido, por favor tente novamente.
        </div>
        @endif
        <h2 class="text-primary">Familia {{ $familia->nome }}</h2>
        <div class="card border bg-white" style="margin-bottom:30px;">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label class="text-secondary" for="nomeFamilia">Novo nome da familia</label>
                        <input id="nomeFamilia" class="form-control" type="text" name="nomeFamilia">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                            <option value=""  selected disabled>Escolha um lifestyle</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-secondary" for="nomeFamilia">Descrição</label>
                        <textarea id="nomeFamilia" class="form-control" name="descricaoFamilia"></textarea>
                    </div>
                </form>
            </div>
        </div>
        <h2 class="text-primary">Membros da familia</h2>
        <div class="card" style="margin-bottom:5px;">
            <div class="card-body">
                <ul class="list-group">
                @foreach($membros as $membro)
                    <li class="list-group-item">@if($membro->nome != "") {{ $membro->nome }} @else @php $nomeMembro = $user->find($membro->m_user_id); @endphp {{ $nomeMembro->name }} @endif<a class="btn bg-danger float-right" href="/editar/grupoFamiliar/{{  $familia->id }}/excluir/{{  $membro->id }}}"><i class="fas fa-trash-alt text-white"></i></a></li>
                @endforeach
                </ul>
            </div>
        </div>
        <a class="btn btn-primary float-right text-white" data-toggle="modal" data-target="#modalMembro" ><i class="fas fa-edit"></i></a>
    </div>
    @component('../componentes/modalMembro', compact('familia'))
    @endcomponent
@endSection