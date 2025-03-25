<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Comparações mais sensatas entre strings e números</h1>
  <?php

  echo '0 == "0": ' . (0 == "0");// true | true
  echo "<br>";
  echo '0 == "0.0": ' . (0 == "0.0"); // true | true
  echo "<br>";
  echo '0 == "teste": ' . (0 == "teste"); // true | false
  echo "<br>";
  echo '0 == "": ' . (0 == ""); // true | false
  echo "<br>";
  echo '50 == "   50": ' . (0 == "   50"); // true | true
  echo "<br>";
  echo '50 == "50teste": ' . (0 == "50teste"); //true | false
  echo "<br>";

  ?>

</body>
</html>