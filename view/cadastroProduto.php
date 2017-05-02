<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="row">
    <div class="col-sm-12">
        <form class="form-horizontal" id="form_cadastro_produto">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group" id="campo_tipo_pessoa" style="">
                        <div class="col-sm-12">
                            <label>Nome do produto:</label>
                            <input  type="text"  class="form-control" id="produto" name="produto" placeholder="Nome do produto">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Tipo produto:</label>
                            <select name="tipo_alimento" id="tipo_pessoa" class="form-control">
                                <option value="1">Limpeza</option>
                                <option value="2">Bebida</option>
                                <option value="3">Alimentos</option>
                                <option value="4">Perfumaria</option>
                                <option value="5">Carne</option>
                                <option value="6">Feira</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Preço:</label>
                            <input type="text" id="preco_produto" name="preco_produto" class="form-control" placeholder="Preço do produto">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label>Quantidade em estoque:</label>
                            <input type="text" id="estoque" name="estoque" class="form-control" placeholder="Quantidade em estoque">
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <p class="text-center">
                        <button type="submit" class="btn btn-success">Cadastrar produto</button>
                    </p>
                </div>
            </div>            
        </form>
    </div>
</div>