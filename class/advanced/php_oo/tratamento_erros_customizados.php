
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Tratamento de Erros Customizados </h1>
  <?php

  class MinhaExceptionCustomizadas extends Exception {
     private $erro = '';
     
     public function __construct($erro){
      $this->erro = $erro;
     }

     public function exibirMensagemErroCustomizada() {
      echo '<div style="border: solid 1px #000; padding: 15px; background-color: red; color: white;">';
        echo $this->erro;
      echo '</div>';
     }
  }

  try { 
   
    throw new MinhaExceptionCustomizadas('Esse é um erro de teste');

    //Error (php)
    //Exception (programadores)
    //Customizadas (programadores)

  } catch ( MinhaExceptionCustomizadas $e){
     $e->exibirMensagemErroCustomizada();
  }
  ?>
</body>
</html>