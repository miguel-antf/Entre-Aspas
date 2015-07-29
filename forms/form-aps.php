<script src="js/data/send-aps.js"></script>


<!-- Formulário -->

<h4>Artigos de Publicações em Série (Revistas, Jornais, etc.)</h4><br>
<form role="form" class="form-horizontal" id="form" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="autor">Autor</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="pnome" placeholder="Primeiros nomes do Autor">
        </div>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="unome" placeholder="Apelido do Autor">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="título do artigo">Título do Artigo</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="tituloa" placeholder="Título do Artigo">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="titulo da publicação em série">Título da publicação em série *</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="titulop" placeholder="Ex: National Geographic">
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-sm-2" for="local de publicação">Local de publicação *</label>
        <div class="col-sm-8">
            <input type="text" min="0" class="form-control" id="local" placeholder="Ex: Lisboa">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="issn">ISSN *</label>
        <div class="col-sm-8">
            <input type="number" min="0" class="form-control" id="issn" placeholder="Ex: 0035-0782">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="volume">Volume *</label>
        <div class="col-sm-8">
            <input type="number" min="0" class="form-control" id="volume" placeholder="Ex: 36">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="número">Número *</label>
        <div class="col-sm-8">
            <input type="number" min="0" class="form-control" id="numero" placeholder="Ex: 7">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="ano de publicação">Ano de publicação *</label>
        <div class="col-sm-8">
            <input type="number" min="0" class="form-control" id="anop" placeholder="Ex: 2004">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="localização na publicação">Localizão na publicação *</label>
        <div class="col-sm-8">
            <input type="number" min="0" class="form-control" id="localizacao" placeholder="Ex: p. 102-104">
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

