<?php


  function login_conf(){
    if((isset($_SESSION['conectado'])))
    {
      echo "<section class="logeado">
              <form action="logout.php" method="post">
                Bienvenido $_SESSION['dni']
                <input type="submit" id="enviar" value="Desconectar"/>
              </form>
            </section>";
    }
    else{
      echo "<section class="log-in">
              <form action="login.php" method="post">

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario"/></br>


                <label for="passw">Contraseña:</label>
                <input type="password" id="passw" name="passwd"/></br>


              <input type="submit" id="enviar" value="Log in"/>
              <input type="reset" id="limpiar" value="Reset"/>
            </form>
          </section>";
    }

  }





?>
