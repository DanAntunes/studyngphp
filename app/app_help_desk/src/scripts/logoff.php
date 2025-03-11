<?php

  
  //remover inidices de array de sessão
  //unset()

  //destruir a variável de sessão
  //session_destroy()

  session_start();

  session_destroy();
  header('Location: /phpstudy/app/app_help_desk/index.php');

?>