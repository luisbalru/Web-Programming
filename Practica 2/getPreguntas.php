<?php
require_once('GestionPreguntas.class.inc');
require_once('GestionCliente.class.inc');

  function getPreguntas(){
    $gestionpregunta = new GestionPreguntas();
    $gestioncliente = new GestionCliente();
    $preguntas = $gestionpregunta->obtenerTodasPreguntas();

    foreach ($preguntas as $pregunta) {
      $dni = $pregunta['usuario'];
      $inform_usuario = $gestioncliente->obtenerCliente($dni);
      $nombre = $inform_usuario['Nombre'];
      $foto = $inform_usuario['NombreImagen'];
      $query = $pregunta['id'];
      $queries = $gestionpregunta->obtenerTodasPreguntas($dni);
      $todaspreguntas="";
      foreach($queries as $q){
        $todaspreguntas = $todaspreguntas.$q['topic']."\n";
      }
      $respuestas = array();
      $respuestas = $gestionpregunta->obtenerRespuestas($query);

      echo '<section class=container><br>';
      echo '<section class="respuesta">
              <form action="add_respuesta.php?id='.$query.'" method="post">
                <h2>PREGUNTA</h2>
                  <span data-toggle="tooltip" data-placement="top" title="'.$todaspreguntas.'"><img src="'.$foto.'" width="50px" height="50px"></span>
                  <h4>'.$nombre.': '.$pregunta['topic'].'</h4>';

      echo "<script>
            $(document).ready(function() {
            Tipped.create('.ajax-queries', {
              ajax: {
                url: 'getqueries.php',
                type: 'post'
              },
              skin: 'light',
              size: 'large',
              radius: false,
              position: 'topleft'
            });
          });
          </script>";
      if(!empty($respuestas)){
        echo '<h3>RESPUESTAS</h3>';
        foreach($respuestas as $respuesta){
          $dni_respuesta = $respuesta['usuario'];
          $responder = $gestioncliente->obtenerCliente($dni_respuesta);


          echo  '<img src='.$responder['NombreImagen'].' width="30px" height="30px"</a>
                  <p>'.$responder['Nombre'].' : '.$respuesta['topic'].'</p>';



          echo '
          <br/>
          <br/>
          <br/>
          <br/>';
        }
        echo'<textarea name="mensaje" placeholder="Escriba una nueva respuesta"></textarea>
            <input type="submit" value="ENVIAR">
            </form>
            </section>';
      }
      else{
        echo'<textarea name="mensaje" placeholder="Escriba una nueva respuesta"></textarea>
            <input type="submit" value="ENVIAR">
            </form>
            </section>';
        echo '
        <br/>
        <br/>
        <br/>
        <br/>';
      }
    }
  }

?>
