<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <link rel="stylesheet" type="text/css" href="precios.css"/>
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

    <section class="fila">
      <ul class="tecnicos">
        <li class="columna2 fila">
          <h3 class="columna11">Fitness</h3>
          <h4 class="columna8 desp2">30€/mes</h4>
          <p class="text">Fitness<br>Actividades dirigidas<br> +6€ inscripción <br>
          Lunes - Viernes <br> Nutricionista <br> Personal Trainer <br> 10:00-20:00</p>
        </li>

        <li class="columna2 fila">
          <h3 class="columna11">Fitness Joven</h3>
          <h4 class="columna8 desp2">25€/mes</h4>
          <p class="text">Fitness<br>Actividades dirigidas<br> +6€ inscripción <br>
          Lunes - Viernes <br> Menores de 30 años <br> Nutricionista <br> 10:00-14:00</p>
        </li>

        <li class="columna2 fila">
          <h3 class="columna11">Wellness</h3>
          <h4 class="columna8 desp2">45€/mes</h4>
          <p class="text">Fitness<br>Actividades dirigidas<br>Piscina/Spa <br> +15€ inscripción <br>
          Lunes - Domingo <br> Nutricionista <br> 10:00-20:00</p>
        </li>

        <li class="columna2 fila">
          <h3 class="columna11">Wellness Joven</h3>
          <h4 class="columna8 desp2">40€/mes</h4>
          <p class="text">Fitness<br>Actividades dirigidas<br>Piscina/Spa <br> +10€ inscripción <br>
          Lunes - Domingo <br> Menores de 30 años <br> 10:00-20:00</p>
        </li>
      </ul>
    </section>



    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
         <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
    </footer>

  </body>

</html>
