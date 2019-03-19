<div class="modal fade" id="modalMembro" tabindex="-1" role="dialog" aria-labelledby="modalMembro" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary">Adicionar novo membro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formularioMembro" action="/editar/grupoFamiliar/{{ $familia->id }}" method="post">
          @csrf
            <div class="form-group">
                <label class="text-secondary" for="emailMembro">Email do membro</label>
                <input type="text" class="form-control" id="emailMembro" required name="emailMembro">
            </div>
            <h5 class="text-primary" style="margin-top:10px;">Criar membro</h5>
            <div class="form-group">
                <label class="text-secondary" for="nomeMembroNaoCadastrado">Nome membro</label>
                <input type="text" class="form-control" id="nomeMembroNaoCadastrado" disabled required name="nomeMembroNaoCadastrado">
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="checkdMembroCadastrado">
                <label class="form-check-label" for="checkdMembroCadastrado">Novo membro</label>
            </div>
            <small class="text-secondary">Membros fictícios não tem acesso ao sistema, eles existem apenas em seu grupo familiar</small>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button class="btn btn-primary" type="submit" form="formularioMembro" value="Submit">Salvar</button>
      </div>
    </div>
  </div>
</div>
<script>
$("#checkdMembroCadastrado").click(function(){
    if($("#checkdMembroCadastrado").is(":checked") == true)
    {
        $("#nomeMembroNaoCadastrado").prop("disabled", false);
        $("#emailMembro").prop("disabled", true);
    }
    else{
        $("#nomeMembroNaoCadastrado").prop("disabled", true);
        $("#emailMembro").prop("disabled", false);
    }
});
</script>