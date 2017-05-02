<?php
session_start();
require_once '../model/class/Usuario.php';



$cpf = $_POST['ncpf'];
$nome = $_POST['nNomeUsuario'];
$telefone = $_POST['ntel'];
$estado = $_POST['estado'];
$cidade = $_POST['nCidade'];
$cep = $_POST['nCep'];
$logradouro = $_POST['nLogradouro'];
$numero = $_POST['nNum'];
$complemento = $_POST['nComplemento'];
$bairro = $_POST['nBairro'];
$email = $_POST['nEmail'];
$senha = $_POST['nSenha1'];
$tipo_usuario = $_POST['categoriausuario'];
//
// echo $cpf."<br/>".$nome."<br/>".$telefone."<br/>".$estado."<br/>".$cidade."<br/>".$cep."<br/>".$logradouro."<br/>".$numero."<br/>".$complemento."<br/>".
// $bairro."<br/>".$email."<br/>".$senha."<br/>".$tipo_usuario;

$objUsuario = new Usuario();

$objUsuario->setCpfCnpj($cpf);
$objUsuario->setNome($nome);
$objUsuario->setTelefone($telefone);
$objUsuario->setEstado($estado);
$objUsuario->setCidade($cidade);
$objUsuario->setCep($cep);
$objUsuario->setLogradouro($logradouro);
$objUsuario->setNumero($numero);
$objUsuario->setComplemento($complemento);
$objUsuario->setBairro($bairro);
$objUsuario->setEmail($email);
$objUsuario->setSenha($senha);
$objUsuario->setTipo($tipo_usuario);

$retorno = $objUsuario->cadastrarUsuario();

  if($retorno == null){
    echo "<script>alert('ERRO AO CADASTRAR!');
    location.href='http://localhost/BudegaDeEsquina/view/cadastroUsuario.php';</script>";
  }else{
      echo "<script>alert('CADASTRO REALIZADO COM SUCESSO!');
      location.href='http://localhost/BudegaDeEsquina/view/login.php';</script>";
  }




 ?>
