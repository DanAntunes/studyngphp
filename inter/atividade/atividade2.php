<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Atividade 2</h1>
  <p>
    Crie um script capaz de produiz, através de um laõ de repetição, um array com 6 elementos
    numéricoas aleatórios entre 1 e 60, simulando o funcionamento do sorteio da mega sena.
    <?php
    $numbers = [];

    while (count($numbers) < 6) {
      $num = rand(1, 60);
      if (!in_array($num, $numbers)) {
        $numbers[] = $num;
      }
    }

    echo "Números sorteados: " . implode(", ", $numbers);
    ?>
  </p>
</body>
</html>