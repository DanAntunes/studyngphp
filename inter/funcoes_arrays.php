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
    $array = 'string';
    $retorno = is_array($array);

    if ($retorno) {
      echo 'Sim, é um array';
    } else {
      echo 'Não, não é um array';
    };
  ?>  
</body>
</html>