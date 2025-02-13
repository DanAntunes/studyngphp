<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1> While | Do While | For</h1>
  <?php

  $registros = [
    ['titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1'],
    ['titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2'],
    ['titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3'],
    ['titulo' => 'Título notícia 4', 'conteudo' => 'Conteúdo notícia 4'],
    ['titulo' => 'Título notícia 5', 'conteudo' => 'Conteúdo notícia 5'],
  ];

  //conunt -> conta a quantidade de elementos de um array

  echo 'O array possui: ' . count($registros) . ' registros<br>';
  echo '<br>';
  
  $idx = 0;
  while ( $idx < count($registros) ) {
    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    $idx++;
  }
  $idx = 0;
  do {
    echo '<h2> Usando o do while </h2>';
    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo '<br>';
    $idx++;
  } while ( $idx < count($registros) );

  for ($idx = 0; $idx < count($registros); $idx++) {
    echo '<h2> Usando o for </h2>';
    echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
    echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
    echo '<hr>';
  }

  ?>  
</body>
</html>