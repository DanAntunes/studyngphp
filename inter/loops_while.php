<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>While</h1>
  <?php
    $num = 1;
    //operadores comparação / lógicos
    echo '--- Inicio do Loop --' . '<br>';
    while($num <= 10) {
      echo $num . '<br>';
      $num++;
    }
    echo '--- Final do Loop --';
  ?>  
</body>
</html>