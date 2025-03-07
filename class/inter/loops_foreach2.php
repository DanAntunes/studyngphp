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

  $players = [
    ['nickname' => 'The Goat', 'name' => 'Messi', 'gols marcados' => 869],
    ['nickname' => 'A Joia', 'name' => 'Lamine Yamal', 'gols marcados' => 21],
    ['nickname' => 'O Mágico', 'name' => 'Iniesta', 'gols marcados' => 107],
    ['nickname' => 'O Maestro', 'name' => 'Xavi', 'gols marcados' => 121],
    ['nickname' => 'El Pistoleiro', 'name' => 'Suárez', 'gols marcados' => 565],
  ]; 
 // O token '=>' é o operador de associação de array, que associa um valor a uma chave.
  foreach($players as $player) {
    echo "Apelido: {$player['nickname']}<br> Jogador: {$player['name']}<br> Gols: {$player['gols marcados']} <br><br>";
  } 
  ?>  
</body>
</html>