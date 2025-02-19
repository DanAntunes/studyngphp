<?php
  //variavel que verifica se a autenticação foi realizada
  $usuario_autenticado = false;

  //usuarios do sistema
  $usuarios_app = array(
    array('email' => 'adm@teste.com.br', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),
  );
  // $_GET['email'];
  // $_GET['senha'];

 foreach($usuarios_app as $user) {
   if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
     $usuario_autenticado = true;
   }
  };

  $_POST['email'];
  $_POST['senha'];
?>