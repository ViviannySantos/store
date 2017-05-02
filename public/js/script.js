function removerProduto(numero){
  console.log(numero);
  var id = "prod"+numero;
    console.log(id);
  $("#"+id).empty();
}
