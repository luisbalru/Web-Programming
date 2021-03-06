<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="tecnicos.css">
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
              <img src="././imagenes/logo-web.png" alt="logo">
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
            acceder al foro!><a href="#">Foro</a></a>';
          }
          else{
            echo '<a href="foro.php">Foro</a>';
          }
        ?>
    </nav>


    <section class="fila">
    <ul class="tecnicos">
      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t1.jpg" alt="Tecnico1">
        </section>
        <h3 class="columna11">Manolo Pérez</h3>
        <h4 class="columna8 desp2">Cycling/Spinning</h4>
      </li>

      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t2.jpg" alt="Tecnico1">
        </section>
        <h3 class="columna11">Celia Pérez</h3>
        <h4 class="columna8 desp2">Zumba</h4>
      </li>

      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t3.jpeg" width="200px" alt="Tecnico1">
        </section>
        <h3 class="columna11">Juan Sánchez</h3>
        <h4 class="columna8 desp2">Body Combat</h4>
      </li>

      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t4.jpeg" alt="Tecnico1">
        </section>
        <h3 class="columna11">Ana Estrada</h3>
        <h4 class="columna8 desp2">AquaGym</h4>
      </li>

      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t5.jpeg" alt="Tecnico1">
        </section>
        <h3 class="columna11">Marcos Sanz</h3>
        <h4 class="columna8 desp2">Core</h4>
      </li>

      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t6.jpeg" alt="Tecnico1">
        </section>
        <h3 class="columna11">Carla Suarez</h3>
        <h4 class="columna8 desp2">Body Balance</h4>
      </li>

      <li class="columna3 fila">
        <section class="columna9 desp1">
          <img src="./imagenes/t7.jpeg" alt="Tecnico1">
        </section>
        <h3 class="columna11">Juana Sanz</h3>
        <h4 class="columna8 desp2">Pilates/Yoga</h4>
      </li>


    </ul>
	 </section>

   <footer>
        <a href="como_se_hizo.pdf">Cómo se hizo</a>
        <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
   </footer>

  </body>

</html>
