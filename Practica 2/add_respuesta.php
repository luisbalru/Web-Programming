<?php
  require_once('GestionPreguntas.class.inc');

  $respuesta = $_POST['mensaje'];
  $dni = $_SESSION['dni'];
  $idPr = $_GET['id'];
  $gestionpregunta = new GestionPreguntas();
  $gestionpregunta->escribirRespuesta($idPr,$dni,$respuesta);
  header("Location: foro.php");

?>
