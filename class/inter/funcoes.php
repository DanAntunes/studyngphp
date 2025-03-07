<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Funções</h1>
  <?php

    // void = função sem retorno.
    function exibirBoasVindas() {
      echo 'Bem-vindo ao curso de PHP!';
    }

    exibirBoasVindas();

    //return(com retorno)
    function calcularAreaTerreno($largura, $comprimento) {
      $area = $largura * $comprimento;
      return $area;
    }
    echo '<br>';
    echo '<br>' . calcularAreaTerreno(30, 50);
  ?>
</body>
</html>