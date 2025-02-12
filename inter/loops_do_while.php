<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Do While</h1>
  <?php
    $x = 10;

    do {
      echo 'Entrou no do while...<br>';
      //continue
      //break
    } while ($x < 9);//não executa pois a condição é falsa.

     echo '<br>';
     while ($x < 9) {
      echo 'Entrou no while...<br>';
     }

  ?>  
</body>
</html>