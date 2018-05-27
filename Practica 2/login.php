
<?php
  require_once('GestionCliente.class.inc');
  $nick = $_POST['usuario'];
  $passwd = $_POST['passwd'];
  $passwd = base64_encode($passwd);

  $gestion = new GestionCliente();
  $gestion->autenticarCliente($nick, $passwd);


?>
