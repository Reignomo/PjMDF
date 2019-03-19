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
        <form id="formularioAtividade" action="/grupoFamiliar/addAtividade" method="POST">
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
               <select class="form-control" required>
                    <option value="" selected disabled>Escolha o responsável pela atividade</option>
                    <option value="1">Pastel</option>
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