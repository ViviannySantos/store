<?php
  require_once 'header.php';


  switch ($_SESSION['tipo_usuario']) {
    case '1': // caso seja do tipo cliente
      require_once 'menu_usuario.php';
      break;

    case '2': // caso seja do tipo empresa matriz
      require_once 'menu_empresa.php';
      break;

    case '3': // caso seja do tipo empresa filial
      require_once 'menu_filial.php';
      break;

    default:

      break;
  }

  require_once 'footer.php';
 ?>
