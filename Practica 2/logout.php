<?php
  unset($_SESSION['conectado']);
  unset($_SESSION['dni']);
  session_unset();
  session_destroy();
  header("Location: index.php");
?>
