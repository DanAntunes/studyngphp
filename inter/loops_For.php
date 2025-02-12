<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>For</h1>
  <?php
  // Sintaxe While
  // while (condicao) {
  //   # code...
  // }
   
  // Sintaxe do while
  // do {
  //   # code...
  // } while (condicao);

  // Sintaxe For
  for ($x = 1; $x <= 10; $x++) {

    //continue
    echo "O valor de x é: $x <br>";
  }
  echo "<hr>";
  // Sintaxe For com break
  for ($x = 1; true ; $x++) {

    if ($x >= 20) {
      break;
    }
    //continue
    echo "O valor de x é: $x <br>";
  }
  echo "<hr>";
  // Sintaxe For com break e decremento
  for ($x = 10; $x > 0 ; $x--) {
      //break
      //continue
      echo "O valor de x é: $x <br>";
    }
  ?>  
</body>
</html>