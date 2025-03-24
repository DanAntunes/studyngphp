<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Argumentos Nomeados</h1>
  <?php

  function sendEmail($destinatarios = "", $cc = "", $assunto = "", $mensagem = "") {
    echo "Destinatários: " .$destinatarios."<br>";
    echo "CC: ".$cc."<br>";
    echo "Assunto: ".$assunto."<br>";
    echo "Mensagem: ".$mensagem."<br>";
  }

  sendEmail(
    assunto: "Argumentos Nomeados",
    mensagem: "Testando uma feature nova do php na aula da Udemy!",
    destinatarios: "DaniloAntunes@dan.com",
  );

  echo "<hr>";

  // Convencional -> Respeitando a ordem dos parâmetros.
  sendEmail(
    'DaniloAntunes@dan.com',
    "AlbertExpress@ecomerce.com",
    "Argumentos Nomeados",
    "Testando uma feature nova do php na aula da Udemy!"
  );



  ?>

</body>
</html>