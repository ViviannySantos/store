<?php
require_once 'header.php';
 ?>

 <div class="container">
            <div id="toolbar">
              <div class="row">
                <div class="col-sm-6">
                    <p class="text-left"><a href="javascript:window.history.go(-1)"><< Voltar</a></p>
                </div>
                <div class="col-sm-6">
                  <a href="carrinho.php">  <p class="text-right"><span class="badge" id="qtd_prod_carrinho">0</span><i class="fa fa-shopping-cart fa-2x"></i></p> </a>
                </div>
              </div>
          </div>
            <div class="row">
                <div class="col-sm-2">
                    <div class="form-group">
                        <label>Categorias:</label>
                    </div>
                </div>
                <div class="col-sm-4 col-sm-offset-2">
                    <form class="form-inline">
                        <div class="form-group">
                            <label for="exampleInputName2">Ordenado por: </label>
                            <select class="form-control arredonda_borda_amarela" id="select_ordenar" onchange="ordenar()">
                                <option value='decres_preco'>Menor preço</option>
                                <option value='cres_preco'>Maior preço</option>
                                <option value='decres_nome'>A-Z</option>
                                <option value='cres_nome'>Z-A</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="col-sm-4">
                    <form class="form-inline" action='#' onsubmit="update_result_busca()" >
                        <div class="input-group margin-bottom-sm">
                            <input type="text" class="form-control awesomplete botao_busca" id="busca_name" placeholder="Buscar produto">
                            <span class="input-group-addon botao_busca fundo_amarelo"><i class="fa fa-search" aria-hidden="true"></i></span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2" id='categorias_escolha'>
                    <div class="row">
                        <div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block">Alimentos</button></div>
                        <div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block">Feira</button></div>
                        <div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block">Carnes</button></div>
                        <div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block">Bebidas</button></div>
                        <div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block">Perfumaria</button></div>
                        <div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block">Limpeza</button></div>
                    </div>
                </div>
                <div class="col-sm-10">
                    <div class="row" id="alerta_produto">
                        <div class="col-sm-5">

                        </div>
                    </div>


                    <div class="row" id='result_busca'>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg" title="Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Arroz Agulhinha Tipo 1 BLUE VILLE Pacote</li>
                                    <li>1 kg</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 3,20</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/572/461572x200x200.jpg" title="Macarrão Francês Spaghetti 3 Minutos CASINO Pacote 500g" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Macarrão Francês Spaghetti 3 Minutos CASINO</li>
                                    <li>500g</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 6,65</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/148/475148x200x200.jpg" title="Macaroni Francês CASINO Pacote 500g " class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Macaroni Francês CASINO</li>
                                    <li>500g</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 7,79</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg" title="Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Arroz Agulhinha Tipo 1 BLUE VILLE Pacote</li>
                                    <li>1 kg</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 3,20</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg" title="Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Arroz Agulhinha Tipo 1 BLUE VILLE Pacote</li>
                                    <li>1 kg</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 3,20</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg" title="Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Arroz Agulhinha Tipo 1 BLUE VILLE Pacote</li>
                                    <li>1 kg</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 3,20</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg" title="Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Arroz Agulhinha Tipo 1 BLUE VILLE Pacote</li>
                                    <li>1 kg</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 3,20</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="div_fixa_imagem">
                                <img src="http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg" title="Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg" class="tamanho_imagem">
                                <i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho()"></i>
                            </div>
                            <div class="tamanho_texto">
                                <ul class="list-unstyled">
                                    <li>Arroz Agulhinha Tipo 1 BLUE VILLE Pacote</li>
                                    <li>1 kg</li>
                                    <li class="preco_produto"><span class="cor_verde">R$</span> 3,20</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 col-sm-offset-4">
                            <nav>
                                <ul class="pagination">
                                    <li>
                                        <a href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li>
                                        <a href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
<?php
require_once 'footer.php'

 ?>
