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
        $fila = $st->fetchAll(PDO::FETCH_ASSOC);
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
      $sql = "SELECT * FROM ".TABLA_PREGUNTAS." WHERE usuario=:usua";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":usua",$usuario,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetchAll(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        if($fila)
          return $fila;
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Consulta fallida:".$e->getMessage());
      }
    }

    public static function obtenerTodasPreguntas()
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM Preguntas";
      try {
        $st = $conexion->prepare($sql);
        $st->execute();
        $fila = $st->fetchAll(PDO::FETCH_ASSOC);
        parent::desconectar($conexion);
        if($fila)
          return $fila;
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Consulta fallida:".$e->getMessage());
      }
    }

    public static fuction obtenerPreguntasUsuario($dni)
    {
      $conexion = parent::conectar();
      $sql = "SELECT * FROM Preguntas WHERE usuario=:user";
      try{
        $st = $conexion->prepare($sql);
        $st->bindValue(":user",$dni,PDO::PARAM_STR);
        $st->execute();
        $fila = $st->fetchAll(PDO::FETCH_ASSOC);
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
        $fila = $st->fetchAll(PDO::FETCH_ASSOC);
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
      $sql = "INSERT INTO ".TABLA_RESPUESTAS." VALUES (NULL, :id,:dni,:resp)";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":id",$id_pregunta);
        $st->bindValue(":dni",$usuario);
        $st->bindValue(":resp",$respuesta);
        $st->execute();
        parent::desconectar($conexion);
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Error al escribir la respuesta:".$e->getMessage());
      }
    }

    public static function escribirPregunta($query,$dni)
    {
      $conexion = parent::conectar();
      $sql = "INSERT INTO ".TABLA_PREGUNTAS." VALUES (NULL, :preg,:usua)";
      try {
        $st = $conexion->prepare($sql);
        $st->bindValue(":preg",$query);
        $st->bindValue(":usua",$dni);
        $st->execute();
        parent::desconectar($conexion);
      } catch (PDOException $e) {
          parent::desconectar($conexion);
          die("Error al añadir la pregunta:".$e->getMessage());
      }
    }
  }

?>
