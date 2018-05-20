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
  </head>

  <body>
    <header>
        <section class="logo">
          <a href="index.php" class="logo">
              <img src="./imagenes/logo-web.png" alt="logo">
          </a>
        </section>
        <section class="title">
          <a class="titulo" href="index.php"><h1>WFC Wellness Fitness Center</h1></a>
        </section>
        <section class="log-in">
            <form action="login.php" method="post">

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario"/></br>


                <label for="passw">Contraseña:</label>
                <input type="password" id="passw" name="passwd"/></br>


              <input type="submit" id="enviar" value="Log in"/>
              <input type="reset" id="limpiar" value="Reset"/>
            </form>
        </section>

        <section class="icon">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
        </section>
    </header>

    <nav class="topnav">
          <a class="active" href="index.php">Inicio</a>
          <a href="actividades.html">Actividades</a>
          <a href="horario.html">Horario</a>
          <a href="tecnicos.html">Técnicos</a>
          <a href="localizacion.html">Localización</a>
          <a href="precios.html">Precios y promociones</a>
          <a href="formularioalta.html">Alta de usuario</a>
          <a href="foro.html">Foro</a>
    </nav>

    <section id="slider">
      <section class="slides">

        <!-- Primera -->
        <section class="slider">
          <section class="legend"></section>
          <section class="content">
            <section class="content-txt">
              <h1>No pain, no gain</h1>
                <h2>Únete a nosotros y supera todos tus barreras</h2>
            </section>
          </section>
          <section class="images">
            <img src="./imagenes/foto2.jpeg" width="1400" height="900">
          </section>
        </section>

        <!-- Segunda -->
        <section class="slider">
          <section class="legend"></section>
          <section class="content">
            <section class="content-txt">
              <h1>Just do it</h1>
                <h2>
                  El dolor es temporal,
                  el orgullo es para siempre
                </h2>
            </section>
          </section>
          <section class="images">
            <img src="./imagenes/foto6.jpg" width="1400" height="500">
          </section>
        </section>

      <!-- Tercera -->
      <section class="slider">
        <section class="legend"></section>
        <section class="content">
          <section class="content-txt">
            <h1>Yes, you can!</h1>
              <h2>
                The only limit is the one you set yourself
              </h2>
          </section>
        </section>
        <section class="images">
          <img src="./imagenes/foto4.jpeg" width="1400" height="500">
        </section>
      </section>

      <!-- Cuarta -->
      <section class="slider">
        <section class="legend"></section>
        <section class="content">
          <section class="content-txt">
            <h1>You'll never walk alone</h1>
              <h2>Lo que hacemos en la vida tiene su eco en la eternidad</h2>
          </section>
        </section>
        <section class="images">
          <img src="./imagenes/foto5.jpg" width="1400" height="790">
        </section>
      </section>
    </section>
  </section>

    <section class="switch">
      <ul>
          <li>
            <section class="on"></section>
          </li>
          <li></li>
          <li></li>
          <li></li>
      </ul>
    </section>
   <footer>
        <a href="como_se_hizo.pdf">Cómo se hizo</a>
        <p>Posted by:</p>  <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
   </footer>
</body>

</html>
