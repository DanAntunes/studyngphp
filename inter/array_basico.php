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
  //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');
  $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];//outra forma de criar um array
  $lista_frutas[] = 'Abacate'; //adiciona um novo elemento ao array

  echo '<pre>';
    var_dump($lista_frutas);  //mostra o tipo e o tamanho do array
  echo '</pre>';
    echo '<hr>';
  echo '<pre>';
    print_r($lista_frutas);  //mostra o conteúdo do array
  echo '</pre>';

  echo '<hr>';
  echo $lista_frutas[2]; //mostra o conteúdo do array na posição 2
  echo '<hr>';
  //associativos
  $lista_frutas2 = array( 
    'a' => 'Banana', 
    'b' => 'Maçã', 
    'x' =>'Morango', 
    'z' => 'Uva', 
    '2' => 'Abacaxi');
  echo '<pre>';
   var_dump($lista_frutas2);
  echo '</pre>';
  ?>  
</body>
</html>