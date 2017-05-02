<?php
require_once 'header.php';
?>
        <div class="container">

            <!-- <div id="headerPesquisa"></div> -->
            
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
                            <div class="alert alert-success" role="alert">
                                <p>Produto adicionado com sucesso <i class="fa fa-check " aria-hidden="true"></i></p>
                            </div>
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
    </body>



    <script >

        //Preparando objetos
        var item_list = Inicializar_item_list();

        //Modificada em tempo de execução
        var posicao_maxima = 0;

        //Must set 0
        var list_size = 0;
        var posicao_atual = 0;

        //Quantidade de produtos na tela
        var quantidade_produtos_display = 8;

        //Por padrao, mostra todos os itens
        var categoria_escolhida = 'todas';

        //Colocando os valores na lista para auto completar
        var input = document.getElementById("busca_name");

        //Ao carregar a pagina, atualizar as categorias
        atualiza_categoria('todas');

        //Ao carregar a pagina, ja mostrar os resultados
        update_result_busca();

        //Auto completar, baseado nos resultados?
        new Awesomplete(input, {
            // Autocomplete com todos os dados
            //list: item_list.pega_nomes_todos()

            //Autocomplete com os dados da pesquisa
            list: item_list_result
        });

        //Ao clicar em buscar, chama essa function
        function update_result_busca()
        {
            //alert('Atualizado');

            //posicao_atual = 0 em novas buscas, irá para a primeira pagina
            posicao_atual = 0;

            //Nome que foi digitado no input
            nome_buscado = document.getElementById('busca_name').value;

            //Se escolher categoria, entao mostrar os itens na categoria selecionada
            if (categoria_escolhida == 'todas')
            {
                item_list_result = item_list.busca_nomes(nome_buscado);
            } else {
                item_list_result = item_list.busca_categorias(categoria_escolhida);
            }

            ordenar();

        }

        function ordenar()
        {

            //var tipo_ordenacao = document.getElementById('select_ordenar').value;
            var escolha_ordenar = document.getElementById('select_ordenar').value;


            //por padrao, fica na ordem crescente
            var return_1 = -1;
            var return_2 = 1;

            //Se for decrescente, mudar a ordem
            if (escolha_ordenar.indexOf('decres_') == 0)
            {
                return_1 = 1;
                return_2 = -1;
            }


            //document.getElementById('result_busca').innerHTML = 'nada';
            //alert('ordenando');

            var resultado_busca = '';

            item_list_result.sort(function (item1, item2) {

                //Por padrao ordena pro preço
                var item_1 = item1.product_price;
                var item_2 = item2.product_price;

                //Se escolher por nome, modifica o valor a ser comparado
                if (escolha_ordenar.indexOf('nome') !== -1)
                {
                    item_1 = item1.product_name;
                    item_2 = item2.product_name;
                }

                if (item_1 == item_2)
                {	//Se forem iguais retorna 0
                    return 0;
                }

                if (item_1 > item_2)
                {
                    //Dependendo da escolha, ordenar crescente == -1 && decrescente == 1
                    return return_1;
                } else
                {
                    if (item_1 < item_2)
                    {
                        //Dependendo da escolha, ordenar crescente == 1 && decrescente == -1
                        return return_2;
                    }
                }
            });

            list_size = 0;

            //Armazena o html da busca
            resultado_busca = "";


            posicao_maxima = Math.ceil(list_size / quantidade_produtos_display);
            if (item_list_result != '')
            {
                for (var x in item_list_result)
                {//Preparando html
                    //Contando o tamanho da lista
                    list_size++;
                    if (posicao_atual <= x && x < posicao_atual + quantidade_produtos_display)
                    {//Mostra o item
                        resultado_busca += '<div class="col-sm-3">';
                        resultado_busca += '<div class="div_fixa_imagem">';
                        resultado_busca += '<img src="' + item_list_result[x].image_link + '" title="' + item_list_result[x].product_name + '" class="tamanho_imagem">';
                        resultado_busca += '<i class="fa fa-plus-circle fa-3x botao_adiciona_produto" aria-hidden="true" onclick="adicionarParaCarrinho(\'' + x + '\')"></i>';
                        resultado_busca += '</div>';
                        resultado_busca += '<div class="tamanho_texto">';
                        resultado_busca += '<ul class="list-unstyled">';
                        resultado_busca += '<li>' + item_list_result[x].product_name + '</li>';
                        resultado_busca += '<li class="preco_produto"><span class="cor_verde">R$</span>' + item_list_result[x].product_price + '</li>';
                        resultado_busca += '</ul>';
                        resultado_busca += '</div>';
                        resultado_busca += '</div>';
                    }
                }
            } else
            {
                resultado_busca = '<h2>Produto não encontrado.</h2>';
            }
            $('#result_busca').html(resultado_busca);

            //Se tiver algum valor na lista, colocar os numeros da pagina em baixo
            //rodape
            var pagina = '';
            if (list_size != 0)
            {
                var count = 1;
                if (posicao_atual != 0)//Nao aparecer se estiver na primeira pagina
                {//Opção de voltar
                    //resultado_busca += "<span onclick='change_page(1)'><< </span>";//Ir para a pagina inicial
                    //resultado_busca += "<span onclick='change_page(-1)'> < </span>";//voltar uma pagina

                    pagina += '<li><a href="#" aria-label="Previous">';
                    pagina += '<span aria-hidden="true" onclick="change_page(-1)">&laquo;</span>';
                    pagina += '</a></li>';
                }
                //Adiciona os numeros
                for (count = 1; count <= (Math.ceil(list_size / quantidade_produtos_display)); count++)
                {
                    if (posicao_atual != (count - 1) * quantidade_produtos_display)
                    {//indice normais aparecem aqui
                        //resultado_busca += "<span onclick='change_page(" + count +" )'>" + count + "</span>";
                        pagina += '<li onclick="change_page(' + count + ')"><a href="#" >' + count + '</a></li>';
                    } else
                    {//indice da pagina atual aparece aqui
                        //resultado_busca += "<span onclick='change_page(" + count +" )'><b>" + count + "</b></span>";
                        pagina += '<li onclick="change_page(' + count + ')" class="active"><a href="#">' + count + '</a></li>';
                    }
                }

                if (posicao_atual < (count - 2) * quantidade_produtos_display)//Nao aparecer se estiver na ultima pagina
                {//Opção de avançar
                    //resultado_busca += "<span onclick='change_page(0)'> > </span>";//Pagina seguinte
                    //resultado_busca += "<span onclick='change_page("+ Math.ceil(list_size/quantidade_produtos_display) +")'> >> </span>";//Ultima pagina
                    pagina += '<li onclick="change_page(0)" ><a href="#" aria-label="Next">';
                    pagina += '<span aria-hidden="true">&raquo;</span>';
                    pagina += '</a></li>';
                }
            }

            //document.getElementById('result_busca').innerHTML = resultado_busca;
            $('.pagination').html(pagina);
        }

        function change_page(page_number)
        {
            //Calcula o id
            if (page_number == -1)
            {//Pagina anterior
                posicao_atual -= quantidade_produtos_display;
            } else
            {
                if (page_number == 0)
                {//Proxima pagina
                    posicao_atual += quantidade_produtos_display;
                } else
                {//Pagina selecionada
                    page_number = page_number * quantidade_produtos_display - quantidade_produtos_display;
                    posicao_atual = page_number;
                }
            }
            ordenar();
        }

        function atualiza_categoria(cat_buscar)
        {

            if (cat_buscar.toLowerCase() == categoria_escolhida.toLowerCase())
            {
                categoria_escolhida = 'todas';
            } else {
                categoria_escolhida = cat_buscar;
            }

            //Iniciando variaveis
            categoria_html = '';
            categorias_list = [];
            categorias_list.push('Alimentos');
            categorias_list.push('Feira');
            categorias_list.push('Carnes');
            categorias_list.push('Bebidas');
            categorias_list.push('Perfumaria');
            categorias_list.push('Limpeza');

            //Inicio da lista
            categoria_html += '<div class="row">';
            //Percorrendo a lista para formatar o html
            for (var x in categorias_list)
            {
                //Inicio do item da lista
                categoria_html += '<div class="col-sm-12 espaco"><button type="button" class="botao_categorias btn  btn-block" onclick="atualiza_categoria(\'' + categorias_list[x] + '\')">';

                //Link para essa funcao
                //categoria_html += '<span onclick="atualiza_categoria(\'' + categorias_list[x] + '\')">';

                //Item da lista
                if (categoria_escolhida.toLowerCase() == categorias_list[x].toLowerCase())
                {
                    //Item atual da lista
                    categoria_html += '<i>';
                    categoria_html += categorias_list[x];
                    categoria_html += '</i>';
                } else {//Itens que nao estao selecionados
                    categoria_html += categorias_list[x];
                }
                //categoria_html += '</span>';
                //Fim do item da lista
                categoria_html += '</button></div>';
            }
            //Fim da lista
            categoria_html += '</div>';

            //Gravando no html a mudanca
            //document.getElementById('Categorias_escolha').innerHTML = categoria_html;
            $('#categorias_escolha').html(categoria_html);

            //Chama a busca para atualizar os resultados
            update_result_busca();
        }


    </script>

    <script type="text/javascript">
        //$("#headerPesquisa").load('headerPesquisa.php');
        $("#alerta_produto").hide();
		adicionarParaCarrinho(-1);
		function adicionarParaCarrinho(id_item) {

			//alert(item_list_result[id_item].product_name);
			var quantidade_no_carrinho = 0;
			//Buscando do store
			var lista_atual_carrinho = JSON.parse(localStorage.getItem('lista_produtos'));

			//Armazena a lista do carrinho
			var lista_add_carrinho = new ItemList();

			//Se tiver algo no carrinho, busca
			if(lista_atual_carrinho)
			{
				lista_add_carrinho.item_list = lista_atual_carrinho.item_list;
			}

			//Adiciona o novo item ao carrinho
			if(id_item != -1)
			{
				lista_add_carrinho.add_list(item_list_result[id_item]);
			}//se o id == -1, so atualiza o carrinho

			for(var x in lista_add_carrinho.item_list)
			{
				quantidade_no_carrinho += 1;
			}



			//Armazenando ao store
			if(id_item != -1)
			{
				item_list_json = JSON.stringify(lista_add_carrinho);
				localStorage.setItem('lista_produtos',item_list_json);
				$("#alerta_produto").show().fadeOut(3000);
			}

			$(document).ready(function(){
				$('#qtd_prod_carrinho').show();
				qtd = parseInt(quantidade_no_carrinho);
				$('#qtd_prod_carrinho').html(qtd);
			});



		}
    </script>

</html>
