<?php
  require_once('GestionCliente.class.inc');

  $nombre_img = $_FILES['imagen']['name'];
  $tipo = $_FILES['imagen']['type'];
  $size = $_FILES['imagen']['size'];

  // Si existe imagen y tiene el tamaño correcto
  if(($nombre_img == !NULL) && ($size <=200000))
  {
      //indicamos los formatos que permitimos subir a nuestro servidor
     if (($_FILES["imagen"]["type"] == "image/gif")
     || ($_FILES["imagen"]["type"] == "image/jpeg")
     || ($_FILES["imagen"]["type"] == "image/jpg")
     || ($_FILES["imagen"]["type"] == "image/png"))
     {
       $directorio = $_SERVER['DOCUMENT_ROOT'].'/imagenes_clientes/';
       // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
        move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
     }

     else{
       //si no cumple con el formato
       echo "No se puede subir una imagen con ese formato ";
     }
  }
  else
  {
    //si existe la variable pero se pasa del tamaño permitido
    if($nombre_img == !NULL) echo "La imagen es demasiado grande ";
  }

  $passwd = $_POST['passwd'];

  $passwd = password_hash(
              base64_encode(
                has('sha256',$passwd,true)
              ),
              PASSWORD_DEFAULT
            );

  $datos_cliente = array("nombre" => $_POST['nombre'], "apellidos" => $_POST['apellidos'], "dni" => $_POST['dni'], "passwd" => $passwd,
                          "fechaNacimiento" => $_POST['edad'], "sexo" => $_POST['sexo'],"direccion" => $_POST['address'],
                          "telefono" => $_POST['numero'], "email" => $_POST['email'], "talla" => $_POST['talla'],
                          "tarifa" => $_POST['tarifas'],"pago" => $_POST['pago'], "nombre_imagen" => $nombre_img,
                          "estadisticas_varias" => "En proceso");

  $gestion = new GestionCliente();
  $gestion->insertarCliente($datos_cliente);
  header("Location: index.php");
?>
