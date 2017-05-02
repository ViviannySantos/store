<?php

require_once 'Persistencia.php';

class Pedido{
    
    private $cliente  = null;
    private $vendedor = null;
    private $subtotal = null;
    private $desconto = null;
    private $total    = null;
    
    protected $persistencia = null;
    
    public function __construct(){

              $this->persistencia = new Persistencia();  //ao criar um objeto é também criado uma conexão
    }
    
    
    
    public function setCliente ($cliente){
      $this->cliente = $cliente;
    }

    public function getCliente (){
      return $this->cliente;
    }
    
    public function setVendedor ($vendedor){
      $this->vendedor = $vendedor;
    }

    public function getVendedor (){
      return $this->vendedor;
    }
    
    public function setSubtotal ($subtotal){
      $this->subtotal = $subtotal;
    }

    public function getSubtotal (){
      return $this->subtotal;
    }
    
    public function setDesconto ($desconto){
      $this->desconto = $desconto;
    }

    public function getDesconto (){
      return $this->desconto;
    }
    
    public function setTotal ($total){
      $this->total = $total;
    }

    public function getTotal (){
      return $this->total;
    }
    
    public function criarPedido(){}
    
    public function exibirPedido(){}
    
    public function exibirPedidos(){}
    
    
    
}


