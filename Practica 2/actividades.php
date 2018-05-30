<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="actividades.css">
    <link rel="stylesheet" type="text/css" href="menu.css">

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

    <section class="menu-principal">

      <label for="menu-desplegable">
      <section class="boton">
        <span></span>
        <span></span>
        <span></span>
      </section>
      </label>
      <input type="checkbox" id="menu-desplegable"/>
      <nav class="topnav">
        <ul id="menu">
          <li><a class="active" href="index.php">Inicio</a></li>
          <li><a href="actividades.php">Actividades</a></li>
          <li><a href="horario.php">Horario</a></li>
          <li><a href="tecnicos.php">Técnicos</a></li>
          <li><a href="localizacion.php">Localización</a></li>
          <li><a href="precios.php">Precios y promociones</a></li>
          <?php
            if(!isset($_SESSION['conectado'])){
              echo '<li><a href="formularioalta.php">Alta de usuario</a></li>';
            }
          ?>
          <?php
            if(!isset($_SESSION['conectado'])){
              echo '<li><a href="#" data-toggle="tooltip" data-placement="top" title="Resgístrate para
              acceder al foro!><a href="#">Foro</a></a></li>';
            }
            else{
              echo '<li><a href="foro.php">Foro</a></li>';
            }
          ?>
        </ul>
      </nav>
  </section>
    <section class="cuerpo">
            <section class="split-left">
              <h2><span>ACTIVIDADES</span></h2>
              <article class="centered">
                <img src="./imagenes/zumba.jpg" width="100" height="50">
                <a href="actividad1.html"><h2>Zumba</h2></a>
                <p>¡Pásalo en grande mientras bailas!</p>
              </article>

              <article class="centered">
                <img src="./imagenes/cycling.jpg" width="100" height="50">
                <a href="actividad2.html"><h2>Spinning</h2></a>
                <p>Entrena duro</p>
              </article>

              <article class="centered">
                <img src="./imagenes/core.jpg" width="100" height="50">
                <a href="actividad1.html"><h2>Core</h2></a>
                <p>Entrena ese abdomen</p>
              </article>

              <article class="centered">
                <img src="./imagenes/pool.jpg" width="100" height="50">
                <a href="actividad1.html"><h2>AquaGym</h2></a>
                <p>Sumérgete</p>
              </article>

              <article class="centered">
                <img src="./imagenes/pilates.jpeg" width="100" height="50">
                <a href="actividad2.html"><h2>Pilates</h2></a>
                <p>Entrena duro</p>
              </article>
              <article class="centered">
                <img src="./imagenes/yoga.jpeg" width="100" height="50">
                <a href="actividad2.html"><h2>Yoga</h2></a>
                <p>Encuentra tu mundo interior</p>
              </article>
              <article class="centered">
                <img src="./imagenes/cycling.jpg" width="100" height="50">
                <a href="actividad2.html"><h2>Body Balance</h2></a>
                <p>Go!</p>
              </article>
              <article class="centered">
                <img src="./imagenes/combat.jpeg" width="100" height="50">
                <a href="actividad2.html"><h2>Body Combat</h2></a>
                <p>Come on, let's go!</p>
              </article>
            </section>

            <aside class="split-right">
              <h2>NOTICIAS</h2>
              <ul>
                <li>Nueva zona de aguas abierta</li>
                <li>Promoción de precios nuevo curso</li>
                <li>Conoce a nuestros nuevos directivos</li>
              </ul>
            </aside>

    </section>

    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
         <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
    </footer>

  </body>

</html>
