<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="horario.css">
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
            acceder al foro!><a href="#">Foro</a></a>';
          }
          else{
            echo '<a href="foro.php">Foro</a>';
          }
        ?>
    </nav>

    <table border="1" id="horario" summary="Horario del gimnasio">

        <thead>
          <tr>
           <th colspan="6">HORARIO DE ACTIVIDADES</th>
          </tr>
        <tr>
           <th>Hora/Día</th>
           <th>Lunes</th>
           <th>Martes</th>
           <th>Miércoles</th>
           <th>Jueves</th>
           <th>Viernes</th>
        </tr>
      </thead>
      <tfoot>
        <tr><td colspan="7">BE BRAVE!</td></tr>
      </tfoot>
      <tbody>
        <tr>
           <td>9:00-10:00</td>
           <td>Cycling</td>
           <td>Cycling</td>
           <td>Cycling</td>
           <td>Cycling</td>
           <td>Cycling</td>

        </tr>
        <tr>
          <td>10:00-11:00</td>
          <td>Zumba</td>
          <td>AquaGym</td>
          <td>AquaGym</td>
          <td>Zumba</td>
          <td>Zumba</td>
        </tr>

        <tr>
          <td >11:00-12:00</td>
          <td>Core</td>
          <td>Core</td>
          <td>Zumba</td>
          <td>AquaGym</td>
          <td>AquaGym</td>
        </tr>

        <tr>
          <td>12:00-13:00</td>
          <td>Cycling</td>
          <td>Zumba</td>
          <td>AquaGym</td>
          <td>Core</td>
          <td>Cycling</td>
        </tr>

        <tr>
          <th colspan="6">RELAJACIÓN-MEDITACIÓN-RESPIRACIÓN</th>
        </tr>


        <tr>
          <td>16:00-17:00</td>
          <td>Pilates</td>
          <td>Body Balance</td>
          <td>Runnning</td>
          <td>Yoga</td>
          <td>Body Combat</td>
        </tr>

        <tr>
          <td>17:00-18:00</td>
          <td>Body Balance</td>
          <td>Pilates</td>
          <td>Yoga</td>
          <td>Body Combat</td>
          <td>Runnning</td>
        </tr>

        <tr>
          <td>18:00-19:00</td>
          <td>Body Combat</td>
          <td>Runnning</td>
          <td>Body Balance</td>
          <td>Pilates</td>
          <td>Yoga</td>
        </tr>

        <tr>
          <td>19:00-20:00</td>
          <td>Pilates</td>
          <td>Yoga</td>
          <td>Body Combat</td>
          <td>Body Balance</td>
          <td>Runnning</td>
        </tr>


      </tbody>
    </table>



    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
    </footer>

  </body>

</html>
