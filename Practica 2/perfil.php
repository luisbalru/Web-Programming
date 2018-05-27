<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="slider-def.css">
    <script type="text/javascript" src="./validacion_at.js"></script>
  </head>

  <body>
    <?php
      session_start();
      session_regenerate_id();
    ?>
    <header>
        <section class="logo">
          <a href="index.php" class="logo">
              <img src="./imagenes/logo-web.png" alt="logo">
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
          <a href="formularioalta.php">Alta de usuario</a>
          <a href="foro.php">Foro</a>
    </nav>





  </body>
</html>
