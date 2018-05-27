<?php
  require_once('datosObject.class.inc');

  class GestionCliente extends DataObject
  {

    public static function obtenerCliente($dni)
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM ".TABLA_CLIENTES." WHERE dni=:dni";
      try{
        $st = $conexion->prepare($sql);
        $st->bindValue(":dni",$dni,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        if($fila)
          return $fila;
      }
      catch(PDOException $e){
        parent::desconectar($conexion);
        die("Consulta fallida:".$e->getMessage());
      }
    }

    public static function insertarCliente($array)
    {
      $conexion = parent::conectar();
      $sql = "INSERT INTO ".TABLA_CLIENTES." VALUES('".$array['nombre']."','".$array['apellidos']."',
                                              '".$array['dni']."','".$array['passwd']."','".$array['fechaNacimiento']."','".$array['sexo']."','"
                                              .$array['direccion']."','".$array['telefono']."','".$array['email']."','".
                                              $array['talla']."','".$array['tarifa']."','".$array['pago']."','".$array['nombre_imagen']."','".
                                              $array['estadisticas_varias']."');";
      print($sql);
      try{
        $st = $conexion->prepare($sql);
        $st->execute();
      }
      catch(PDOException $e){
        parent::desconectar($conexion);
        die("Inserción fallida".$e->getMessage());
      }
      parent::desconectar($conexion);
    }

    public static function autenticarCliente($login, $passwd)
    {
      $conexion = parent::conectar();
      $sql = "SELECT Clave FROM ".TABLA_CLIENTES." WHERE DNI =:dni";
      try{
        $st = $conexion->prepare($sql);
        $st->bindValue(":dni",$login,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        $passwd = base64_decode($passwd);
        $valor = base64_decode($fila['Clave']);
        if($fila){
          if(strcmp($passwd,$valor)==0)
          {
            $_SESSION['conectado'] = true;
            $_SESSION['dni'] = $login;
            header("Location: index.php?Sesion:".$_SESSION['conectado']);
          }
          else{
            echo "Contraseña incorrecta";
            header("Location: index.php?errorAut=Si");
          }
        }
        else{
          echo "No existe usuario o contraseña";
          header("Location: index.php?noexiste");
        }
      }
      catch(PDOException $e){
        parent::desconectar($conexion);
        die("Consulta fallida:".$e->getMessage());
      }
    }

  }


?>
