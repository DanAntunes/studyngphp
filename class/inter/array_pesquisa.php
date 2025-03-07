<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Array Métodos de Pesquisa</h1>
  <?php
  // in_array() - retorna true ou false para a existência de um determinado elemento no array
  // array_search() - retorna o índice do elemento pesquisado caso ele exista, caso contrário retorna null
  $lista_jogos = ['God of War', 'GTA V', 'Minecraft', 'The Witcher 3', 'GTA San Andreas'];

  echo '<pre>';
  print_r($lista_jogos);
  echo '</pre>';

  echo in_array('GTA V', $lista_jogos) ? 
    'O jogo GTA V está na lista de jogos' : 
    'O jogo GTA V não está na lista de jogos';
  
  echo '<br>';
  echo  array_search('Minecraft', $lista_jogos) 
 
  // in_array em caso de array multidimensional : in_array('GTA V', $entrenimento['jogos']);
  ?>  
</body>
</html>