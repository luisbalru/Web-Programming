<?php
  require_once('datosObject.class.inc');

  class GestionCliente extends DataObject
  {

    public static function obtenerCliente($dni)
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM".TABLA_CLIENTES." WHERE dni=:dni";
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
      $sql = "SELECT Clave FROM".TABLA_CLIENTES." WHERE DNI =:dni";
      try{
        $st = $conexion->prepare($sql);
        $st->bindValue(":dni",$login,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        if($fila){
          if(hash_equals($passwd,$fila))
          {
            session_start();
            session_register("autentificado");
            $autentificado = "SI";
            header("Location: index.php");
          }
          else{
            echo "Contraseña incorrecta";
            header("Location: index.php?errorusuario=si");
          }
        }
        else{
          echo "No existe usuario o contraseña";
          header("Location: index.php");
        }
      }
      catch(PDOException $e){
        parent::desconectar($conexion);
        die("Consulta fallida:".$e->getMessage());
      }
    }

  }


?>
