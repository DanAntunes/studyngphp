<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
  // Variáveis Constantes - são globais e não podem ser alteradas durante a execução do script
  // define('nome_da_constante', 'valor_da_constante');
  define('BD_URL', 'address_bd_dev');
  define('BD_USUARIO', 'user_bd_dev');
  define('BD_SENHA', 'password_bd_dev');

  echo BD_URL . '<br>';
  echo BD_USUARIO . '<br>';
  echo BD_SENHA . '<br>';

  ?>
 
</body>
</html>