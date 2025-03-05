<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php

    $nome = 'Danilo';
    $cor = 'preto';
    $idade = 23;
    $atividade_preferida = 'jogar videogame';

    //operador . para concatenar
    echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também
    que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida . '.';

    echo '<br><br>';
    // concatenação com aspas duplas
    echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também  que você possui $idade
    anos e que gosta de $atividade_preferida.";
  ?>
 
</body>
</html>