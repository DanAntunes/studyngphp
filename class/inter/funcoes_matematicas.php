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
   $numR = 7.5; // 0. e .4 => arredonda para baixo, 0.5 e .9 => arredonda para cima
   echo round($numR) . '<br>'; // arredonda com base na fração
   echo "<hr>";
   echo rand(0, 100) . '<br>'; // gera um número aleatório
   echo "<br>" . getrandmax(); // retorna o maior número que a função rand pode gerar
   echo "<hr>";
   echo sqrt(16); // raiz quadrada
  ?>
</body>
</html>