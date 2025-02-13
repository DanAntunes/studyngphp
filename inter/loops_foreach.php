<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1> ForEach </h1>
  <?php 

  $jogos = array('GTA', 'The Last of Us', 'Uncharted', 'Call of Duty');

  echo '<pre>';
  print_r($jogos);
  echo '</pre>';

  foreach($jogos as $jogo) {
    echo "$jogo ";

    if ($jogo == 'The Last of Us') {
      echo ' (*Jogo eleito o melhor de 2020!)';
    }

    echo '<br>';
  }

  ?>  
</body>
</html>