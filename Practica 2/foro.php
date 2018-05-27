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
        <a class="active" href="index2.php">Inicio</a>
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

    <section class="split-left">


            <a href="pregunta1.php"><p>¿Cuál es la mejor forma de entrenar el biceps?</p></a>

            <a href="pregunta1.php"><p>¿Qué dieta es la mejor para hipertrofiar?</p></a>

            <a href="pregunta1.php"><p>¿Más peso o más repeticiones?</p></a>

            <a href="pregunta1.php"><p>¿Qué actividad es mejor para perder peso?</p></a>

    </section>

    <section class="split-right"
      <form method="post" name="quest" autocomplete="off">
        <section class="fila">
          <ul class="tecnicos">
            <li class="columna11 fila">
              <section class="columna9 desp1">
                <h1>¿Qué nos quieres decir?</h1>
              </section>
              <p>Obtendrás respuesta enseguida...</p>
              <textarea name="pregunta" rows="3" cols="35">Escribe tu pregunta...
              </textarea>
              <input type="reset" onclick="alert('El tema se almacenó correctamente')" value="Registrar"/>
            </li>
          </ul>
        </section>
      </form>
    </section>

    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
         <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
    </footer>

  </body>

</html>
