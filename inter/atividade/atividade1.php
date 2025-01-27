<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Atividade</h1>
  <!-- 
  Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parâmetro.
  -->
  <?php
    function calcularImpostoRenda($salario) {
      $impostoRenda = 0;

      if ($salario <= 1903.98) {
        $impostoRenda = 0;
      } else if ($salario >=1903.98 && $salario <= 2826.65) {
        $impostoRenda = ( $salario * 7.5) / 100;
      } else if ($salario >= 2826.65 && $salario <= 3751.05) {
        $impostoRenda = ($salario * 15) / 100;
      } else if ($salario >= 3751.05 && $salario <= 4664.08) {
        $impostoRenda = ($salario * 22.5) / 100;
      } else {
        $impostoRenda = ($salario * 27.5) / 100;
      }
      return $impostoRenda;
    }

    $salario = 10000;
    $impostoRenda = calcularImpostoRenda($salario);
    echo "O imposto de renda a ser pago é de R$ $impostoRenda";

  ?>
</body>
</html>