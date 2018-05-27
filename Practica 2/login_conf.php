<?php


  function login_conf(){

    if(isset($_SESSION['conectado']) && $_SESSION['conectado'] == 1)
    {
      echo '<section class="logeado">
              <form action="logout.php" method="post">
                Bienvenido ';
                echo $_SESSION['dni'];
                echo '<br> <a href="perfil.php">
                        Mi perfil
                      </a> <br>';
                echo '<input type="submit" id="enviar" value="Desconectar"/>
              </form>
            </section>';
    }
    else{
      echo '<section class="log-in">
              <form action="login.php" method="post" name="login" onsubmit="return validar_login();">

                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario"/></br>


                <label for="passw">Contraseña:</label>
                <input type="password" id="passw" name="passwd"/></br>';


                  if(isset($_GET["errorAut"]) && $_GET["errorAut"] == 'Si')
                  {
                    echo "<div style='color:red'>Usuario o contraseña invalido </div>";
                  }


            echo'<input type="submit" id="enviar" value="Log in"/>
              <input type="reset" id="limpiar" value="Reset"/>
            </form>
          </section>';
    }

  }





?>
