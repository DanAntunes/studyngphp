<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Array Básico</h1>
  <?php

  //sequenciasis (numéricos)
  $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');
  
  echo '<pre>';
    var_dump($lista_frutas);  //mostra o tipo e o tamanho do array
  echo '</pre>';
    echo '<hr>';
  echo '<pre>';
    print_r($lista_frutas);  //mostra o conteúdo do array
  echo '</pre>';
  //associativos


  ?>  
</body>
</html>