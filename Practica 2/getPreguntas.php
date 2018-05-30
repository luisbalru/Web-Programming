<?php
  require_once('GestionPreguntas.class.inc');

  $gestionpregunta = new GestionPreguntas();
  $gestioncliente = new GestionCliente();
  $preguntas = $gestionpregunta->obtenerTodasPreguntas();

  foreach ($preguntas as $pregunta) {
    $dni = $pregunta['usuario'];
    $inform_usuario = $gestioncliente->obtenerCliente($dni);
    $nombre = $inform_usuario['Nombre'];
    $foto = $inform_usuario['NombreImagen'];
    $query = $pregunta['id'];
    $respuestas = $gestionpregunta->obtenerRespuestas($query);

    echo '<section class="respuesta">
            <form action="add_respuesta.php?id="'.$query.'" method="post">
              <h2>PREGUNTA</h2>
                <a href="#" data-toggle="tooltip" data-placement="top" title="'.getQueries($dni).'"><img src='.$foto.' width="50px" height="50px"></a>
                <h4>'.$nombre.': '.$pregunta['query'].'</h4>';
    foreach($respuestas as $respuesta){
      $dni_respuesta = $respuesta['usuario'];
      $datos_answer = $gestioncliente->obtenerCliente($dni_respuesta);
      foreach($datos_answer as $responder)
      {
        echo '<img src='.$responder['NombreImagen'].' width="30px" height="30px"</a>
              <p>'.$responder['Nombre'].' : '.$respuesta['topic'].'</p>';
      }

      echo'<textarea name="mensaje" placeholder="Escriba una nueva respuesta"></textarea>
          <input type="submit" value="ENVIAR" id="bot">
          </form>
          </section>';
      echo '
      <br/>
      <br/>
      <br/>
      <br/>';
    }
  }

?>
