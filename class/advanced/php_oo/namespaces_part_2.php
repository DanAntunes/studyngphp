<?php 
  require "../lib/lib1/lib1.php";
  require "../lib/lib2/lib2.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Namespaces Parte 2 Libs</h1>
<?php

  use A\Cliente as C1;
  use B\Cliente as C2;

  $c = new C1();
  print_r($c);
  echo $c-> __get('nome');

  echo '<hr>';
  $c = new C2();
  print_r($c);
  echo $c-> __get('nome');
?>
</body>
</html>