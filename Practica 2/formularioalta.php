<!doctype html>
<html>

  <head>
    <meta charset="UTF-8">
    <title>WFC Wellness Fitness Center</title>
    <link rel="stylesheet" type="text/css" href="index.css"/>
    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="formulario.css">
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

    <form action="alta_usuario.php" method="post" name="alta_usuario" autocomplete="OFF" onsubmit="return validate_alta_usuario();">

      <fieldset>
        <legend> Información personal: </legend>
          Nombre: <input type="text" name="nombre"> <br> <br>
          Apellidos: <input type="text" name="apellidos"> <br> <br>
          DNI (Será tu identificador en el login): <input type="text" name="dni"> <br> <br>
          Contraseña: <input type="password" name="passwd"> <br> <br>
          Fecha de naciemiento: <input type="date" name="edad" value="yyyy-mm-dd"> <br> <br>
          Sexo: <br>
            <input type="radio" name="sexo" value="M"> Masculino <br>
            <input type="radio" name="sexo" value="F"> Femenino <br>
          Direccion: <input type="text" name="address"><br> <br>
          Teléfono: <input type="tel" name="numero"><br> <br>
          Email: <input type="email" name="email"></br> <br>
          Talla de camiseta <input type="text" name="talla"></br> <br>
          Tarifa que se quiere escoger: <br>
            <select name="tarifas" required>
              <option value="fitness">Fitness</option>
              <option value="yfitness">Fitness joven</option>
              <option value="wellness">Wellness</option>
              <option value="ywellness">Wellness joven</option>
            </select>
          <br><br>
          ¿Cómo desea hacer los pagos? <br>
            <input type="radio" name="pago" value="tarjeta">Con tarjeta<br>
            <input type="radio" name="pago" value="efectivo">En efectivo<br>
          <br><br>
      </fieldset>

      <fieldset>
        <legend> Trayectoria deportiva</legend>
          ¿Te gusta el deporte?<br>
            <input type="checkbox" id="Si">
            <label for="Si">¡Muchísimo!</label>
            <input type="checkbox" id="algo">
            <label for="algo">Un poco</label>
            <input type="checkbox" id="no">
            <label for="no">Nada</label>

          <br><br>
          ¿Cuánto deporte haces?
            <input list="deportista">
            <datalist id="deportista">
              <option value="Menos de un día a la semana">
              <option value="Entre 1-2 días a la semana">
              <option value="Entre 3-5 días a la semana">
              <option value="Todos los días">
            </datalist>
          <br><br>

          ¿Qué deportes practicas?<br>
            <input type="checkbox" name="sport">Fútbol<br>
            <input type="checkbox" name="sport">Baloncesto<br>
            <input type="checkbox" name="sport">Tenis<br>
            <input type="checkbox" name="sport">Running<br>
            <input type="checkbox" name="sport">Natación<br>
            <input type="checkbox" name="sport">Otros<br>
            <input type="text" name="otros" placeholder="Si seleccionaste otros, cítalos"> <br>
      </fieldset>

      <label for="imagen">Foto:</label> <br>
      <input type="file" id="imagen" name="imagen" size="30"/>
      <br> <br>
        <input type="submit" id="enviar" value="Enviar"  onclick="alert('La información se registró correctamente')">
        <input type="reset" id="limpiar" value="Reset">

        <br>
    </form>

    <footer>
         <a href="como_se_hizo.pdf">Cómo se hizo</a>
         <p>Posted by:</p> <a href="mailto:wfc@correo.com">Luis Balderas Ruiz</a>
    </footer>

  </body>

</html>
