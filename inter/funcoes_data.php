<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../phpstudy/basic/css/php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Funções Data</h1>
  <?php
  // Recupera a data atual / DATA CORRENTE
  echo date('d/m/Y H:i'); //Dia/Mês/Ano Hora:Minuto

  echo '<br>';
  echo  date_default_timezone_get(); //Recupera o fuso horário padrão
  echo '<hr>';
  date_default_timezone_set('America/Sao_Paulo'); //Define o fuso horário padrão
  echo date_default_timezone_get();
  echo '<br>';
  echo date('d/m/Y H:i'); //Dia/Mês/Ano Hora:Minuto
  
  
  ?>  
</body>
</html>