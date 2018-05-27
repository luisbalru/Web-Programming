<?php
  require_once('GestionCliente.class.inc');

  $passwd = $_POST['passwd'];

  $passwd = base64_encode($passwd);

  $gestion = new GestionCliente();
  $gestion->modificarPass($_SESSION['dni'],$passwd);
  header("Location: perfil.php");
?>
