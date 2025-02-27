<?php

  session_start();

  //variavel que verifica se a autenticação foi realizada
  $usuario_autenticado = false;

  //usuarios do sistema
  $usuarios_app = array(
    array('id' => 1 , 'email' => 'adm@teste.com.br', 'senha' => '1234'),
    array('id' => 2 , 'email' => 'user@teste.com.br', 'senha' => '1234'),
    array('id' => 3 , 'email' => 'dan@teste.com.br', 'senha' => '1234'),
    array('id' => 4 , 'email' => 'nilo@teste.com.br', 'senha' => '1234'),
  );
  // $_GET['email'];
  // $_GET['senha'];

 foreach($usuarios_app as $user) {
   if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
     $usuario_autenticado = true;
   }
  };

  if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    header('Location: /phpstudy/app_help_desk/home.php');
    exit;
  } else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: /phpstudy/app_help_desk/index.php?login=erro');
    exit;
  }

  //$_POST['email'];
  //$_POST['senha'];
?>