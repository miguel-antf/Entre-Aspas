<script src="js/data/send-tese.js"></script>


<!-- Formulário --> 

<h4>Teses, dissertações e outras provas académicas</h4><br>
<form role="form" class="form-horizontal" id="form" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="autor">Autor *</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="pnome" placeholder="Primeiros nomes do autor">
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="unome" placeholder="Apelido do autor">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="título do artigo">Título *</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="titulo" placeholder="Título da tese">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="local de publicação">Local de publicação *</label>
        <div class="col-sm-8">
            <input type="text" min="0" class="form-control" id="local" placeholder="Ex: Lisboa">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="editora">Editor *</label>
        <div class="col-sm-8">
            <input type="text" min="0" class="form-control" id="editor" name="editor" required placeholder="Ex: Caminho">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="ano">Ano Publicação *</label>
        <div class="col-sm-8">
            <input type="number" min="0" class="form-control" id="ano" name="ano" required placeholder="Ex: 2003">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="nota suplementar">Nota suplementar (Tese de.) *</label>
        <div class="col-sm-8">
            <input type="text" min="0" class="form-control" id="nota" placeholder="Ex: Dissertação de Mestrado">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" id="btn" class="btn btn-default" data-toggle="modal" data-target="#myModal">Criar Referência</button>
        </div>
    </div>
</form>


<!-- Modal -->

<div class="modal fade bs-example-modal-lg" id="myModal" class="modal-dialog modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Ctrl+C</h4>
      </div>
      <div class="modal-body">
        <div id="bingo"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn btn-default btn-simple" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn btn-info btn-simple">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
