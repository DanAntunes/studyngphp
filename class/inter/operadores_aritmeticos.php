<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Operadores Aritméticos</h1>
  <?php
    $num1 = 13;
    $num2 = 4;

    echo "A soma entre $num1 e $num2 é: " . ($num1 + $num2) . "<br>";
    echo "A subtração entre $num1 e $num2 é: " . ($num1 - $num2) . "<br>";
    echo "A multiplicação entre $num1 e $num2 é: " . ($num1 * $num2) . "<br>";
    echo "A divisão entre $num1 e $num2 é: " . ($num1 / $num2) . "<br>";
    echo "O módulo entre $num1 e $num2 é: " . ($num1 % $num2) . "<br>";
    echo "A média entre $num1 e $num2 é: " . ($num1 + $num2) / 2 . "<br>";
  ?>
</body>
</html>