
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Tratamento de Erros /h1>
  <?php
try {
  echo '<h3> *** Try *** </h3>';

  if (!file_exists('require_arquivo_a.php')) {
    throw new Exception('O arquivo em questao deveria estar disponivel as ' . date('d/m/y H:i:s') . ' horas mas nao estava. Vamos seguir mesmo assim');
  };

} catch (Error $e) {
  echo '<h3> *** Catch Error *** </h3>';
  echo '<p style="color: red">' . $e . '</p>'; 
} catch (Exception $e) {
  echo '<h3> *** Catch Exception *** </h3>';
  echo '<p style="color: red">' . $e . '</p>'; 
} finally {
  echo '<h3> *** Finally *** </h3>';
}
?>
</body>
</html>