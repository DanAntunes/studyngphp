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
    $parametro = 2;

    switch ($parametro) {
      case 1:
        echo 'Entrou no case 1';
        break;
      case 2:
        echo 'Entrou no case 2';
        break;
      case 3:
        echo 'Entrou no case 3';
        break;
      default:
        echo 'Entrou no default';
        break;
    }
  ?>
</body>
</html>