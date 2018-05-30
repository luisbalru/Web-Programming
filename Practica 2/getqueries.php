<?php
  require_once('GestionPreguntas.class.inc');

  $q = intval($_GET['q']);
  $gestionpregunta = new GestionPreguntas();
  $preguntas = $gestionpregunta->getPregunta($q);
  foreach($preguntas as $pregunta)
  {
    echo '<p>'.$pregunta.'</p> <br>';
  }

?>
