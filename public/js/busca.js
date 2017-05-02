//#TODO Adicionar categoria em item
//      Adicionar função para buscar por categoria


function Item(image_link,product_name, product_price, categoria){

	this.image_link = image_link;
	this.product_name = product_name;
	this.product_price = product_price;
	this.categoria = categoria;
	
	//Melhor conter?
	this.contem_nome = function(nome_buscado){
		if(this.product_name.toLowerCase().indexOf(nome_buscado.toLowerCase()) === -1){
			return false;
		}else
		{
			return true;
		}
	};
	//Ou melhor buscar no inicio da frase?
	this.procura_nome = function(nome_buscado){
		if(this.product_name.toLowerCase().indexOf(nome_buscado.toLowerCase()) == 0){
			return true;
		}else
		{
			return false;
		}
	};
	
	this.procura_categoria = function(categoria_buscada){
		if(this.categoria.toLowerCase().indexOf(categoria_buscada.toLowerCase()) != -1 )
		{
			return true;
		}else
		{
			return false;
		}
	};
	

}

function ItemList(){
	//Armazena os itens
	this.item_list = [];
	
	this.add_list = function(Item){
		this.item_list.push(Item);
	};
	
	this.pega_nomes_todos = function(){
		var list_item_name = [];
		for(var item in this.item_list)
		{
			list_item_name.push(this.item_list[item].product_name);
		}
		return list_item_name;
	};
	
	this.busca_nomes = function(nome){
		var list_itens_result = []
		for(var item in this.item_list)
		{
			if(this.item_list[item].contem_nome(nome) == true )//&& nome != '')
			{
				list_itens_result.push(this.item_list[item]);
			}
		}
		return list_itens_result;
		
	};
	
	this.busca_categorias = function(categoria){
		var list_itens_result = []
		for(var item in this.item_list)
		{
			if(this.item_list[item].procura_categoria(categoria) == true )
			{
				list_itens_result.push(this.item_list[item]);
			}
		}
		return list_itens_result;
	};
	
	this.calcular_total = function(){
		total = 0.0;
		
		for(var x in this.item_list)
		{
			total += this.item_list[x].product_price;
			
		}
		
		return total;
	};
}

function Inicializar_item_list()	
{

	var item_list = new ItemList();


	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/144/494144x200x200.jpg','Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 1kg', 2.49, 'AlimentosFeira'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/335/497335x200x200.jpg','Arroz Agulhinha Longo Fino Tipo 1 TIO JOÃO Pacote 2kg', 8.90, 'AlimentosFeira'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/856/494856x200x200.jpg','Arroz Agulhinha Tipo 1 BLUE VILLE Pacote 5kg', 11.65, 'AlimentosFeira'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/148/475148x200x200.jpg','Macaroni Francês CASINO Pacote 500g ', 7.79, 'AlimentosFeira'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/572/461572x200x200.jpg','Macarrão Francês Spaghetti 3 Minutos CASINO Pacote 500g', 6.25, 'Feira'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/794/467794x200x200.jpg','Gelatina em Pó Sabor Tutti-Frutti Dr. OERTKER Caixa 30g', 1.25, 'Bebidas'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/772/398772x200x200.jpg','Mistura para Bolo Sabor Laranja FLEISCHMANN 450g', 4.45, 'Bebidas'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/555/491555x200x200.jpg','Bolinho de Doce de Leite Kidlat PARMALAT 152g ', 3.99, 'Limpeza'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/438/485438x200x200.jpg','Biscoito BAUDUCCO Recheadinho Goiaba Pacote 140g ', 3.35, 'Limpeza'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/495/455495x200x200.jpg','Amendoim Japonês YOKI 150g', 4.99, 'Perfumaria'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/695/410695x200x200.jpg','Milho para Pipoca YOKI 500g ', 1.98, 'Perfumaria'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/757/278757x200x200.jpg','Espetinho de Carne Bovina Temperada Resfriada LA SERRA', 16.99, 'Carnes'));
	item_list.add_list(new Item('http://www.deliveryextra.com.br/img/uploads/1/757/278757x200x200.jpg','Espetinho de Carne Bovina Temperada Resfriada LA SERRA', 16.99, 'Carnes'));
	//item_list.add_list(new Item('html','Arroz', 'valor', 'desc'));
	//item_list.add_list(new Item('html','Arroz', 'valor', 'desc'));



return item_list;
}

/*

	Os produtos serão armazenados em uma lista de produtos: ItemList, 
	o desconto e a taxa serão passados como argumento na pagina, e
	a parte de imprimir na tela, será implementada na página.
	
	Estou so aguardando a pagina para implementar o resto.


*/


