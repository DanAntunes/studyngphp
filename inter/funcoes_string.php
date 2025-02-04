<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h2>Funções String</h2>
  <?php
    $texto = "Curso completo de PHP";

    // string to lower
    echo $texto . "<br>";
    echo strtolower($texto) . "<br>";

    echo "<hr>";
    // string to upper
    echo $texto . "<br>";
    echo strtoupper($texto) . "<br>";

    echo "<hr>";
    // upper case first
    echo $texto . "<br>";
    echo ucfirst($texto) . "<br>";

    echo "<hr>";
    // string length
    echo $texto . "<br>";
    echo strlen($texto) . "<br>";

    echo "<hr>";
    // string replace
    echo $texto . "<br>";
    echo str_replace('PHP', 'JavaScript', $texto) . "<br>";
  ?>
</body>
</html>