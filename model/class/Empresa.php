<?php

require_once 'Persistencia.php';

class Empresa extends Usuario{
    
    private $latitude  = null;
    private $longitude = null;
    private $estoque   = null;
    
    
    public function __construct(){

              $this->persistencia = new Persistencia();  //ao criar um objeto é também criado uma conexão
    }
    
    public function setLatitude ($latitude){
      $this->latitude = $latitude;
    }

    public function getLatitude (){
      return $this->latitude;
    }
    
    public function setLongitude ($longitude){
      $this->longitude = $longitude;
    }

    public function getLongitude (){
      return $this->longitude;
    }
    
    public function setEstoque ($estoque){
      $this->estoque = $estoque;
    }

    public function getEstoque (){
      return $this->estoque;
    }
    
    
    public function exibirEstoque(){}
    
    public function cadastrarCupomDesconto(){}
    
    public function inserirTaxadeEntrega(){}
    
    public function listarPedidosAtendidos(){}
}
