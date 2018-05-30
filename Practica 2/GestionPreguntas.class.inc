<?php
  require_once('datosObject.class.inc');

  class GestionPreguntas extends DataObject
  {
    public static function obtenerPregunta($id)
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM ".TABLA_PREGUNTAS." WHERE id=:id_pregunta";
      try{
        $st = $conexion->prepare($sql);
        $st->bindValue(":id_pregunta",$id,PDO::PARAM_STR);
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

    public static function getPregunta($usuario)
    {
      $conexion = parent::conectar();
      $sql = "SELECT topic FROM ".TABLA_PREGUNTAS." WHERE usuario=:usua";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":usua",$usuario,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar();
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Consulta fallida:".$e->getMessage());
      }
    }

    public static function obtenerTodasPreguntas()
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM ".TABLA_PREGUNTAS;
      try {
        $st = $conexion->prepare($sql);
        $st->execute();
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        if($fila)
          return $fila;
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Consulta fallida:".$e->getMessage());
      }
    }

    public static function obtenerRespuestas($id_query)
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM ".TABLA_RESPUESTAS." WHERE id_pregunta =:id";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":id",$id_query,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        if($fila)
          return $fila;
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Consulta fallida:".$e->getMessage());
      }
    }

    public static function escribirRespuesta($id_pregunta,$usuario,$respuesta)
    {
      $conexion = parent::conectar();
      $sql = "INSERT INTO ".TABLA_RESPUESTAS." (id_pregunta,usuario,topic) VALUES
              (:id,:dni,resp)";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":id",$id_pregunta,PDO::PARAM_STR);
        $st->bindValue(":dni",$usuario,PDO::PARAM_STR);
        $st->bindValue(":resp",$respuesta,PDO::PARAM_STR);
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar();
        if($fila)
          return $fila;
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Error al escribir la respuesta:".$e->getMessage());
      }
    }

    public static function escribirPregunta($query,$dni)
    {
      $conexion = parent::conectar();
      $sql = "INSERT INTO ".TABLA_PREGUNTAS." (topic,usuario) VALUES (:preg,:usua)";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":preg",$query,PDO::PARAM_STR);
        $st->bindValue(":usua",$dni,PDO::PARAM_STR);
        $fila = $st->fetch(PDO::FETCH_ASSOC);
        parent::desconectar();
        if($fila)
          return $fila;
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Error al añadir la pregunta:".$e->getMessage());
      }
    }
  }

?>
