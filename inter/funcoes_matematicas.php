<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h2>Funções Matématicas</h2>
  <?php

   $numC = 7.3;
   echo ceil($numC) . '<br>'; // arredonda para cima
   echo "<hr>";
   $numF = 7.8;
   echo floor($numF) . '<br>'; // arredonda para baixo
   echo "<hr>";
   $numR = 7.2;
    echo round($numR) . '<br>'; // arredonda com base na fração

  ?>
</body>
</html>