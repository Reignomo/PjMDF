<div class="modal fade" id="modalAddAtividade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Adicionar nova atividade</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioAtividade" action="/grupoFamiliar/{{ $familiaSolicitada->id }}/addAtividade" method="POST">
          @csrf
            <div class="form-group">
                <label class="text-secondary" for="tituloAtividade">Titulo da atividade</label>
                <input type="text" class="form-control" id="tituloAtividade" required name="tituloAtividade">
            </div>
            <div class="form-group">
                <label class="text-secondary" for="descricaoAtividade">Titulo da atividade</label>
                <textarea type="text" class="form-control" id="descricaoAtividade" required name="descricaoAtividade"></textarea>
            </div>
            <div class="form-group">
               <select class="form-control" required name="idMembroAtividade">
                    <option value="" selected disabled>Escolha o responsável pela atividade</option>
                    @php $membros = $membrosHelper::all()->where('m_familia_id', $familiaSolicitada->id)->sortBydesc('id'); @endphp
                    @foreach($membros as $membro)
                      @if($membro->nome != "")
                        <option value="{{ $membro->id  }}">{{ $membro->nome }}</option>
                      @else
                        @php $user = $userHelper::find($membro->m_user_id) @endphp
                        <option value="{{ $membro->id  }}">{{ $user->name }}</option>
                      @endif
                    @endforeach
               </select>
            </div>
            <div class="form-group">
              <select class="form-control" required name="diaAtividade">
                <option value="" selected disabled>Escolha um dia da semana</option>
                <option value="segunda-feira">Segunda feira</option>
                <option value="terça-feira">Terça feira</option>
                <option value="quarta-feira">Quarta feira</option>
                <option value="quinta-feira">Quinta feira</option>
                <option value="sexta-feira">Sexta feira</option>
                <option value="sábado">Sábado</option>
                <option value="domingo">Domingo</option>
              </select>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button class="btn btn-primary" type="submit" form="formularioAtividade" value="Submit">Salvar</button>
      </div>
    </div>
  </div>
</div>