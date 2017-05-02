<?php
require_once 'header.php';
?>

    <div class="container">
            <div id="toolbar"></div>
            <div class="row">
                <div class="col-sm-12">

                </div>
            </div>
            <form class="form-horizontal" id="formCadastroTaxa">
                <div class="page-header">
                    <h3>Cadastro de taxa de entrega</h3>
                </div>
                <div class="form-group" id="cadastroTaxa">
                    <label class="col-sm-2 control-label">Taxa de entrega fixa:</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control" id="taxa" placeholder="Taxa"/>
                    </div>
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
      </div>
