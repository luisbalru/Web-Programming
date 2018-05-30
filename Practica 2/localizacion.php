<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="stylesheet" type="text/css" href="localizacion.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
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

    <section>
        <nav class="topnav">
              <a class="active" href="index2.php">Inicio</a>
              <a href="actividades.php">Actividades</a>
              <a href="actividades.php">Horario</a>
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
    </section>


    <section class="address">
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
      <p> Dirección: Calle Periodista Eduardo Molina Fajardo, Granada, España</p>
    </section>

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3178.123776265281!2d-3.6272722468852976!3d37.19728940594712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd71fc549ee4e0a1%3A0xe8af2a08b3693f26!2sPeriodista+Eduardo+Molina+Fajardo+1!5e0!3m2!1ses!2ses!4v1523386812388" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
         <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
    </footer>

  </body>

</html>
