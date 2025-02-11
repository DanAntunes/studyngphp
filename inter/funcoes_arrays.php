<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Funções nativas para manipular arrays</h1>
  <?php

    echo '<h2>is_array</h2>';
    $array = ['notebook', 'desktop', 'smartphone'];
    $retorno = is_array($array);

    if ($retorno) {
      echo 'Sim, é um array';
    } else {
      echo 'Não, não é um array';
    };
    echo '<hr>';
    
    echo '<h2>array_keys</h2>';
    $array2 = [1 => 'a', 7 => 'b', 18 => 'c'];
    echo '<pre>';
    print_r($array2);
    echo '</pre>';

    $chaves_array2 = array_keys($array2);
    echo '<pre>';
    print_r($chaves_array2);
    echo '</pre>';


  ?>  
</body>
</html>