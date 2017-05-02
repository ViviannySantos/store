<?php

require_once 'Persistencia.php';

class Produto{
    
    private $nome  = null;
    private $preco = null;
    private $tipo  = null;
    
    protected $persistencia = null;
    
    public function __construct(){

              $this->persistencia = new Persistencia();  //ao criar um objeto é também criado uma conexão
    }
    
    
    public function setNome ($nome){
      $this->nome = $nome;
    }

    public function getNome (){
      return $this->nome;
    }
    
    public function setPreco ($preco){
      $this->preco = $preco;
    }

    public function getPreco (){
      return $this->preco;
    }
    
    public function setTipo ($tipo){
      $this->tipo = $tipo;
    }

    public function getTipo (){
      return $this->tipo;
    }
    
    
    public function adicionarProduto() {}
    
    public function alterarProduto(){}
    
    public function removerProduto(){}
    
    
}

