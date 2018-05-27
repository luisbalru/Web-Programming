<?php
  require_once('GestionCliente.class.inc');

  $dir = $_POST['dir'];
  $tel = $_POST['tel'];
  $email = $_POST['email'];
  $talla = $_POST['talla'];

  $gestion = new GestionCliente();
  $gestion -> modificarDatos($_SESSION['dni'],$dir,$tel,$email, $talla);
  header("Location: perfil.php");
?>
