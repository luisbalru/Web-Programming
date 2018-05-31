<?php

  require_once('GestionPreguntas.class.inc');

  $dni = $_POST['id'];
  $gestionpregunta = new GestionPreguntas();
  $preguntas = $gestionpregunta->getPregunta($dni);
  if(is_array($preguntas)){
    foreach($preguntas as $pregunta)
    {
      echo '<p>'.$pregunta['topic'].'</p> <br>';
    }
  }
?>
