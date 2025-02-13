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
   '' => 'Messi', 
   '' => 'Lamine Yamal', 
   '' => 'Iniesta', 
   '' => 'Xavi', 
   '' => 'Suárez'];
 // O token '=>' é o operador de associação de array, que associa um valor a uma chave.
  foreach($players as $i => $player) {
    echo "Índice: $i<br> Jogador: $player<br><br>";
  }
  ?>  
</body>
</html>