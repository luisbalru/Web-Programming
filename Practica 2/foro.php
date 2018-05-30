<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="tecnicos.css">
    <link rel="stylesheet" type="text/css" href="foro.css">

  </head>

  <body>
    <?php
      session_start();
      session_regenerate_id();
    ?>
    <header>
        <section class="logo">
          <a href="index.php" class="logo">
            <figure>
              <img src="./imagenes/logo-web.png" alt="logo">
            </figure>
          </a>
        </section>
        <section class="title">
          <a class="titulo" href="index.php"><h1>WFC Wellness Fitness Center</h1></a>
        </section>

        <?php
          require_once('login_conf.php');
          login_conf();
        ?>

        <section class="icon">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </section>
    </header>

    <nav class="topnav">
        <a class="active" href="index.php">Inicio</a>
        <a href="actividades.php">Actividades</a>
        <a href="horario.php">Horario</a>
        <a href="tecnicos.php">Técnicos</a>
        <a href="localizacion.php">Localización</a>
        <a href="precios.php">Precios y promociones</a>
        <?php
          if(!isset($_SESSION['conectado'])){
            echo '<a href="formularioalta.php">Alta de usuario</a>';
          }
        ?>
        <?php
          if(!isset($_SESSION['conectado'])){
            echo '<a href="#" data-toggle="tooltip" data-placement="top" title="Resgístrate para
            acceder al foro!>Foro</a>';
          }
          else{
            echo '<a href="foro.php">Foro</a>';
          }
        ?>
    </nav>

    <section class="foo">
      <span class="letter" data-letter="Q">Q</span>
      <span class="letter" data-letter="U">U</span>
      <span class="letter" data-letter="E">E</span>
      <span class="letter" data-letter="R">R</span>
      <span class="letter" data-letter="I">I</span>
      <span class="letter" data-letter="E">E</span>
      <span class="letter" data-letter="S">S</span>
    </section>

    <script>
      function showQueries(str){
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        }
        else{
          xmlhttp = new XMLHttpRequest();

          xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("txtHint").innerHTML = this.responseText;
              }
          };
          xmlhttp.open("GET","getqueries.php?q="+str,true);
          xmlhttp.send();
        }
      }
    </script>




      <?php
      //include('getPreguntas.php');
        $dsn = "mysql:host=localhost;dbname=db77145416_pw1718";
        $db_username = "x77145416";
        $db_password = "77145416";
        //Conectando...
        try{
          $conexion = new PDO($dsn, $db_username, $db_password);
          $conexion->setAttribute(PDO::ATTR_PERSISTENT,true);
          $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          $sql ="SELECT * FROM Preguntas";
          $result=$conexion->prepare($sql);
          $result->execute();
          $rows = $result->fetchAll(PDO::FETCH_ASSOC);

          foreach ($rows as $row) {
            //Para cada pregunta vamos a obtener el nombre y la foto de la persona que la ha realizado
            $dni = $row['usuario'];
            $datos_asker = $conexion->prepare("SELECT * FROM Usuario WHERE dni='$dni'");
            $datos_asker->execute();
            $salida = $datos_asker->fetchAll(PDO::FETCH_ASSOC);

            foreach ($salida as $aux) {
              $nombre= $aux['Nombre'];
              $foto = $aux['NombreImagen'];
            }
            //Hallamos las respuesta a la pregunta
            $pregunta=$row['id'];
            $sqlr ="SELECT * FROM Respuestas WHERE id_pregunta='$pregunta'";
            $r=$conexion->prepare($sqlr);
            $r->execute();
            $rowsr = $r->fetchAll(PDO::FETCH_ASSOC);


            echo '<section class="respuesta">
                    <form action="add_respuesta.php?id='.$pregunta.'" method="post">
                      <h2>PREGUNTA</h2>
                        <a href="#" data-toggle="tooltip" data-placement="top" title="'.getQueries($dni).'"><img src='.$foto.' width="50px" height="50px"></a>
                        <h4>'.$nombre.': '.$row['pregunta'].'</h4>';
            foreach ($rowsr as $rowr) {
              //Consultar nombre y foto del usuario que ha respondido la pregunta
              $dnirespuesta=$rowr['usuario'];
              $resultado=$conexion->prepare("SELECT * FROM Usuario WHERE dni='$dnirespuesta'");
              $resultado->execute();
              $filas = $resultado->fetchAll(PDO::FETCH_ASSOC);

              foreach ($filas as $fila) {
              //Imprimir foto, nombre y respuesta
                echo '<img src='.$fila['NombreImagen'].' width="30px" height="30px"></a>
                      <p>'.$fila['Nombre'].' : '.$rowr['topic'].'</p>';
              }
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
        catch ( PDOException $e ) {
          echo "Error al conectar a la base de datos";
          die( "Conexión fallida: ".$e-­>getMessage());
        }

        $conexion="";
      ?>



    <script>
      $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
        });
    </script>

    <section class="pregunta">
      <form action="add_pregunta.php" method="POST">
        <h2>Tema nuevo</h2>
        <textarea name="pregunta" placeholder="Escriba una nueva pregunta"></textarea>
        <input type="submit" value="ENVIAR" id="boton">
      </form>
    </section>
    <br>

    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
         <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
    </footer>

  </body>

</html>
