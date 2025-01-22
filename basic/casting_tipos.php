<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
</head>
<body>
  <?php 

  //gettyoe() - retorna o tipo da variável
  /* O tipo "real" não é mais suportado pelo PHP e foi removido 
  do PHP 7.0.0. Utilize o tipo "float" em seu lugar. */


  $valor = true;
  //$valor2 = (float) $valor;//float e double.
  //$valor2 = (string) $valor;//string
  //$valor2 = (int) $valor;//int
  //$valor2 = (string) $valor;//string
  //$valor2 = (boolean) $valor;//bool, boolean

  $valor2 = (int) $valor;
  echo $valor. ' ' . gettype($valor);
  echo '<br>';
  echo $valor2. ' ' . gettype($valor2);

  ?>
</body>
</html>