<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Correspondência de Expressão</h1>
  <?php
   $buscar = 5;

   switch ($buscar) { //Comparação por igualdade/equalidade (==)
    case '1':
      $retornoSwitch = 'Encontrou o texto 1';
      break;
    case 2:
      $retornoSwitch = 'Encontrou o número 2';
      break;
    default:
      $retornoSwitch = 'Não encontrou';
   }

   echo "Resultado Swtich: ".$retornoSwitch;
   echo '<hr>';

   $retornoMatch = match ($buscar) {// A comparação é feita por identidade!
    '1' => 'Encontrou o texto 1' ,
    1 => 'Encontrou o número 1',
    5, '9', 12, 'X' => 'Encontrou o valor 5 ou 12, ou os textos 8 ou X.',
    default => 'Não encontrou'
   };

   echo "Resultado Match: ".$retornoMatch;
?>

</body>
</html>