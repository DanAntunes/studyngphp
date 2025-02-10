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
  echo '<hr>';

  $data_inicial = '2024-04-24';
  $data_final = '2025-01-22';

  //Timestamp
  //01/01/1970 -- 2024-04-24 (js -> milisegundos / php -> segundos)
  
  $time_inicial = strtotime($data_inicial);
  $time_final = strtotime($data_final);
  echo $data_inicial . ' - ' . $time_inicial . '<br>';
  echo '<br>';
  echo $data_final . ' - ' . $time_final . '<br>';

  $diferenca_times = $time_final - $time_inicial;
  echo '<br>';
  echo 'A diferença de segundos entre a data inicial e final é: ' . $diferenca_times . '<br>';
  $diferenca_timesAbs =  abs($time_inicial - $time_final);
  echo '<br>';
  echo '(Usando função Abs) A diferença de segundos entre a data inicial e final é: ' . $diferenca_timesAbs . '<br>';
  
  ?>  
</body>
</html>