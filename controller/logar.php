<?php

//mantendo sessão
session_start();

//incluindo a classe usuario
require_once '../model/class/Usuario.php';

//recebendo as variáveis do formulário
$login = $_POST['login'];
$senha = $_POST['senha'];

//criando um objeto da classe usuario
$objUser = new Usuario();
//chamando o método logar() do da classe Usuario
$retorno = $objUser->logar($login, $senha);

if ($retorno == 0) {  //caso nao exista o login informado, o usuario permanece na página de login
    echo "<script>location.href='http://localhost/BudegaDeEsquina/view/login.php';</script>";
} else {

    // caso o login exista, a sessão é iniciada e o usuario vai para a página principal
    $_SESSION['id'] = $retorno;
    echo "<script>location.href='http://localhost/BudegaDeEsquina/view/index.php';</script>";
}
?>
