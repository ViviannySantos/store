<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Budega de Esquina</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../public/ferramentas/bootstrap-3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../public/ferramentas/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../public/css/aplicacao.css">
        <script type="text/javascript" src="../public/js/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="../public/js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="../public/js/jquery.mask.js"></script>
        <script type="text/javascript" src="../public/js/jquery.mask.min.js"></script>
        <script type="text/javascript" src="../public/js/script.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- pra quê seria isso? -->
    </head>
    <body>

      <div id="div_toolbar">
          <div class="page-header">
              <div class="row">
                  <div class="col-sm-12">
                      <div class="row">
                          <div class="col-sm-10">
                              <div class="row">
                                  <div class="col-sm-12">
                                      <a href="http://localhost/BudegaDeEsquina/view/index.php">
																				<img class="fotoLogo" src="../public/img/logo.jpg" alt="Logo do site" height="25%" width="20%">
																			</a>
                                  </div>
                              </div>
                          </div>

                          <?php

                              if(!isset($_SESSION['id'])){
                                require_once 'buttonLogin.php';
                              }else{
                                require_once 'user.php';
                              }

                          ?>

                      </div>
                  </div>
              </div>
          </div>
      </div>



          <!-- <div class="row">
              <div class="col-sm-6">
                  <p class="text-left"><a href="">< Voltar</a></p>
              </div>
              <div class="col-sm-6">
                  <p class="text-right"><span class="badge" id="qtd_prod_carrinho">0</span><i class="fa fa-shopping-cart fa-2x"></i></p>
              </div>
          </div> -->
