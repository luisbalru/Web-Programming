<?php

  if(!isset($_SESSION['conectado']))
    session_start();
	define("DB_DSN","mysql:host=localhost;dbname=db77145416_pw1718");
	define("DB_USUARIO","x77145416");
	define("DB_CONTRASENIA","77145416");
  define("TABLA_CLIENTES","Cliente");
  define("TABLA_PREGUNTAS","Preguntas");
  define("TABLA_RESPUESTAS","Respuestas");
?>
