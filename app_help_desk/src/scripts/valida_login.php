<?php

  session_start();

  //variavel que verifica se a autenticação foi realizada
  $usuario_autenticado = false;
  $usuario_id = null;
  $user_profile_id = null ;
  $profiles = [1 => 'Administrativo' , 2 => 'Usuário' ];

  //usuarios do sistema
  $usuarios_app = array(
    array('id' => 1 , 'email' => 'adm@teste.com.br', 'senha' => '1234' , 'profile_id' => 1),
    array('id' => 2 , 'email' => 'user@teste.com.br', 'senha' => '1234' , 'profile_id' => 1),
    array('id' => 3 , 'email' => 'dan@teste.com.br', 'senha' => '1234' , 'profile_id' => 2),
    array('id' => 4 , 'email' => 'nilo@teste.com.br', 'senha' => '1234' , 'profile_id' => 2),
  );
  // $_GET['email'];
  // $_GET['senha'];

 foreach($usuarios_app as $user) {
   if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
     $usuario_autenticado = true;
     $usuario_id = $user['id'];
     $user_profile_id = $user[ 'profile_id'] ;
   }
  };

  if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['profile_id'] = $user_profile_id;
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