<?php
require_once 'header.php';

if($_SESSION['id'] == null ){

  require_once 'loginOuCadastro2.php';

}else{
    echo "<script>location.href='http://localhost/BudegaDeEsquina/view/detalheCompra.php';</script>";
}


require_once 'footer.php';

 ?>
