<?php

  require_once('GestionPreguntas.class.inc');

  //$dni = $_POST['id'];
  $gestionpregunta = new GestionPreguntas();
  $preguntas = $gestionpregunta->getPregunta('77145416N');
  if(is_array($preguntas)){
    $html = '<div>';
    foreach($preguntas as $pregunta)
    {
      $html .= '<p>'.$pregunta['topic'].'</p>';
    }
    $html .= '</div>';
    echo $html;
  }
?>
