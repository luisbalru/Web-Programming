<?php
  require_once('GestionPreguntas.class.inc');

  $query = $_POST['pregunta'];
  $dni = $_SESSION['dni'];
  $gestionpregunta = new GestionPreguntas();
  $gestionpregunta->escribirPregunta($query,$dni);
  header("Location: foro.php");

?>







?>
