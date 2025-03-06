<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // string
    $nome = 'Danilo';
    // int
    $idade = 23;
    // float
    $peso = 79.5;
    // boolean
    $fumante_sn = false; // true = 1 ou false = vazio

    if($fumante_sn == true){
      $fumante = 'Sim';
    } else {
      $fumante = 'Não';
    }
  ?>

  <h1>Ficha Cadstral</h1>
  <br>
  <p>Nome: <?= $nome ?></p>
  <p>Idade: <?= $idade ?></p>
  <p>Peso: <?= $peso ?></p>
  <p>Fumante: <?= $fumante ?></p>
 
</body>
</html>