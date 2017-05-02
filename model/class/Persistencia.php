<?php

require_once 'Connect.php';

class Persistencia{

  private $tabela    = null;
  private $campos    = null;
  private $ordem     = 1;
  private $condicao  = 1;
  private $group     = 1;
  private $atualizar = null;
  private $inserir   = null;
  private $returning = null;

  protected $connect = null;



  public function setTabela ($tabela){
    $this->tabela = $tabela;
  }

  public function getTabela (){
    return $this->tabela;
  }

  public function setCampos ($campos){
    $this->campos = $campos;
  }

  public function getCampos (){
    return $this->campos;
  }

  public function setOrdem ($ordem){
    $this->ordem = $ordem;
  }

  public function getOrdem (){
    return $this->ordem;
  }

  public function setCondicao ($condicao){
    $this->condicao = $condicao;
  }

  public function getCondicao (){
    return $this->condicao;
  }

  public function setGroup ($group){
    $this->group = $group;
  }

  public function getGroup (){
    return $this->group;
  }

  public function getAtualizar(){
    return $this->atualizar;
  }

  public function setAtualizar($campos){
    $this->atualizar = $campos;
  }

  public function getInserir(){
    return $this->inserir;
  }

  public function setInserir($campos){
    $this->inserir = $campos;
  }
  
  public function getReturning(){
    return $this->returning;
  }

  public function setReturning($returning){
    $this->returning = $returning;
  }


  public function __construct(){

      $this->connect = new Connect();

  }



  public function selecionarTudo(){
    $query = "SELECT * FROM ".$this->tabela;

    $exec = pg_query($query);

    if(pg_num_rows($exec) > 0){

      return pg_fetch_array($exec);
    }

  }

  public function selecionarTudoComCondicao(){
    $query = "SELECT * FROM ".$this->tabela." WHERE ".$this->condicao;

    $exec = pg_query($query);

    if(pg_num_rows($exec) > 0){

      return pg_fetch_array($exec);
    }
  }

    public function selecionar(){
      $query = "SELECT ".$this->campos." FROM ".$this->tabela;

      $exec = pg_query($query);

      if(pg_num_rows($exec) > 0){

        return pg_fetch_array($exec);
    }
    
    }

    public function selecionarComCondicao(){
      $query = "SELECT ".$this->campos." FROM ".$this->tabela." WHERE ".$this->condicao;

      $exec = pg_query($query);

      if(pg_num_rows($exec) > 0){

        return pg_fetch_array($exec);
      }else{
          return null;
      }
    }
    
    
    public function inserir(){
        
        $query = "INSERT INTO $this->tabela VALUES ($this->campos)";        
        $exec = pg_query($query);
        
        if($exec){
           //echo "OKAY";
           return $exec;
        }else{
            echo "OH OW";
            die();
        }
    }

    public function inserirComReturning(){
        
        $query = "INSERT INTO ".$this->tabela." VALUES (".$this->campos.") RETURNING ".$this->returning;
        
        $exec = pg_query($query);
        
        if(pg_num_rows($exec) > 0){

            return pg_fetch_array($exec);
        }else{
            return null;
        }
             
    }

}


 ?>
