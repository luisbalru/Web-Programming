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
                                              '".$array['dni']."','".$array['fechaNacimiento']."','".$array['sexo']."','"
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

  }


?>
