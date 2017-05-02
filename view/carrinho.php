<?php
require_once 'header.php';

 ?>


<div class="container">
        <div id="toolbar"></div>
        <h3>Carrinho</h3>
        <div class="listaCarrinho">
          <h5> Mercadinho Dona Maria</h5>
          <div id="prod1">
              <div class="col-sm-12">
                  <div class="col-sm-5">

                      <p>Arroz Dona Helena</p>
                  </div>

                  <div class="col-sm-2">
                    <spam class="fa fa-trash-o" aria-hidden="true" style="cursor: pointer" id="remover" onclick="removerProduto(1)"/>
                  </div>

                  <div class="col-sm-3">
                    <input id="iNum" type="number" name="nNum" min="0" max="99999" value="1" onchange="mudarValor(this)"/>
                  </div>

                  <div class="col-sm-2">
                    R$ <input type="text" name="preco" id="preco1" value="3.39" size="3"/>
                    <input type="hidden" id="preco0" value="3.39">
                  </div>

              </div>

              <div class="col-sm-12">
                <div class="col-sm-6">
                  <p>1 Kg</p>
                </div>
              </div>

          </div>
          <div id="prod2">
            <div class="col-sm-12">
              <div class="col-sm-5">
                <p>Bandeja de Ovos</p>
              </div>
              <div class="col-sm-2">
                <spam class="fa fa-trash-o" id="remover" style="cursor: pointer" onclick="removerProduto(2)"/>
              </div>
              <div class="col-sm-3">
                <input id="iNum" type="number" name="nNum" min="0" max="99999" value="1" onchange="mudarValor(this)"/>
              </div>
              <div class="col-sm-2">
                R$ <input type="text" name="preco" id="preco2" value="9.59" size="3"/>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="col-sm-6">
                <p>12 unidades</p>
              </div>
            </div>
          </div>
        </div>
    </div>
    <div>
      <div class="totalCarrinho" id="totalCarrinho">
        <h4>Total: R$ <input type="text" value="0" id="valorTotal"/></h4>
      </div>
      <div class="cupomDesconto">
        <form>
          <label>Cupom de desconto</label>
          <input type="text" id="cupom" name="cupom">
        </form>
      </div>
      <div>
        <a href="loginOuCadastro.php"><button type="button" class="buttonConfirmarCompra">Finalizar Compra</button></a>
      </div>
    </div>

<?php

require_once 'footer.php';
 ?>
