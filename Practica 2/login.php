<?php
  require_once('GestionCliente.class.inc');

  $nick = $_POST['usuario'];
  $passwd = $_POST['passwd'];
  $passwd = password_hash(
              base64_encode(
                hash('sha256',$passwd,true)
              ),
              PASSWORD_DEFAULT
            );

  $gestion = new GestionCliente();
  $gestion->autenticarCliente($nick, $passwd);


?>
