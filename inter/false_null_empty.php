<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>False | Null | Empty</h1>
  <?php
   //false (True ou False) - tipo variavel boolean
   //null e empty - valores especiais
   $funcioario1 = null;
   $funcionario2 = '';

  //valores null
  if (is_null($funcioario1)) {
    echo 'Sim, a variável é null';
  } else {
    echo 'Não, a variável não é null';
  }
  echo '<br>';
  if (is_null($funcionario2)) {
    echo 'Sim, a variável é null';
  } else {
    echo 'Não, a variável não é null';
  }

  echo '<br>';
  echo '<hr>';

  //valores empty
  if (empty($funcioario1)) {
    echo 'Sim, a variável é empty';
  } else {
    echo 'Não, a variável não é empty';
  }
  echo '<br>';
  if (empty($funcionario2)) {
    echo 'Sim, a variável é empty';
  } else {
    echo 'Não, a variável não é empty';
  }
  ?>  
</body>
</html>