<?php
  require_once('GestionCliente.class.inc');

  $datos_cliente = array("nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "dni" => $_POST['dni'],
                          "fechaNacimiento" => $_POST['edad'], "sexo" => $_POST['sexo'],"direccion" => $_POST['address'],
                          "telefono" => $_POST['numero'], "email" => $_POST['email'], "talla" => $_POST['talla'],
                          "tarifa" => $_POST['tarifas'],"pago" => $_POST['pago'], "estadisticas_varias" => "En proceso");

  $gestion = new GestionCliente();
  $gestion->insertarCliente($datos_cliente);
?>
