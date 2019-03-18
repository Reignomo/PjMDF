@extends('layouts.app', ["current" => "Familias"])
<style>
.shadow-text{
    text-shadow: 2px 2px #D8D8D8;
}
body
{
  background-color:#f5f5f5;
}
.imagePreview {
    height:220px;
    background-position: center center;
    background:url('/img/addImage.jpg');
    background-color:#fff;
    background-size: cover;
    background-repeat:no-repeat;
    display: inline-block;
    box-shadow:0px -3px 6px 2px rgba(0,0,0,0.2);
}
@media (max-width: 600px) { 
    .imagePreview {
     background-position: center center;
  }
}
.btn-primary
{
  display:block;
  border-radius:0px;
  box-shadow:0px 4px 6px 2px rgba(0,0,0,0.2);
  margin-top:-5px;
}
.imgUp
{
  margin-bottom:15px;
}
.del
{
  position:absolute;
  top:0px;
  right:15px;
  width:30px;
  height:30px;
  text-align:center;
  line-height:30px;
  background-color:rgba(255,255,255,0.6);
  cursor:pointer;
}
.imgAdd
{
  width:30px;
  height:30px;
  border-radius:50%;
  background-color:#4bd7ef;
  color:#fff;
  box-shadow:0px 0px 2px 1px rgba(0,0,0,0.2);
  text-align:center;
  line-height:30px;
  margin-top:0px;
  cursor:pointer;
  font-size:15px;
}

</style>
@section('body')
<div class=" col-xs-12 col-md-6 centered">
    @if(isset($limitMax))
    <div class="alert alert-warning border" role="alert">
    Você atingiu o número máximo de grupos familiares, <a href="/" class="alert-link">clique aqui</a> para excluir uma familia existente.
    </div>
    @endif
    </div>
    <h1 class="text-primary shadow-text text-center">Adicione um novo grupo familiar</h1>
        <div class="card col-xs-12 col-md-6 centered">
            <div class="card-body">
                <div class="justify-content-center">
                    <div class="col-xs-12 col-md-12">
                        <form id="formCadastro" method="post" action="/addGrupoFamiliar/insert" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="nomeFamilia" class="text-secondary">Nome da familia</label>
                                <input type="text" maxlength="30" name="nomeFamilia" class="form-control" id="nomeFamilia" aria-describedby="nomehelp" placeholder="Digite o nome da familia">
                            </div>
                           
                            <div class="form-group">
                                <select class="form-control" name="LifestyleFamilia">
                                    <option value="" disabled selected>Escolha um lifestyle</option>
                                    <option value="Fitness">Fitness</option>
                                    <option value="Saúdavel">Saúdavel</option>
                                    <option value="Hippie">Hippie</option>
                                    <option value="Religiósa">Religiósa</option>
                                    <option value="Ativistas">Ativistas</option>
                                    <option value="Conservadora">Conservadora</option>
                                    <option value="Outros">Outros</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="descricaoFamilia" class="text-secondary">Descrição</label>
                                <textarea type="text" maxlength="60" name="descricaoFamilia" class="form-control" id="descricaoFamilia" aria-describedby="descricaohelp" placeholder="Descreva sua familia"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="imgUp">
                                    <div class="imagePreview rounded centered row"></div>
                                    <label class="btn btn-secondary form-control" style="margin-top:5px;" href="#!">Upload<input type="file" class="uploadFile img" name="imagemFamilia" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
                                </div>
                            </div>    
                            <small id="fileHelp" class="form-text text-secondary" style="margin-bottom:5px;">É recomendado que você utilize o tamanho de imagem 440X240 ou dimensões proporcionais.</small>
                            <button class="btn btn-primary" type="submit" form="formCadastro" value="Submit">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script>
$(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>
@endSection

