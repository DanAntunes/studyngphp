<?php
  session_start();
  if (!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM') {
    header('Location: /phpstudy/app/app_help_desk/index.php?login=erro2');
  }
?>

