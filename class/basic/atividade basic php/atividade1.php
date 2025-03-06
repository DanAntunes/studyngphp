<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
  <link rel="stylesheet" href="../../../phpstudy/basic/css/php.css">
</head>
  <body>
    <!-- Crie uma aplicação capaz de identifcar se uma determinada pessoa pode ou não
     doar sangue. Utilize as variáveis %idade e %peso no processo. Neste primeiro momento 
     faça a atribuição de valores as variáveis de forma estática, ou seja, no processo de
     atribuição. -->

     <!-- Se a idade informada estiver entre(e inclusive) 16 a 69 amps e o peso for igual
      ou superior a 50kg, então o sistema deve imprimir a mensagem "Atende aos requisitos",
      caso contrário o sistema deve imprimir a mensagem "Não atende aos requisitos". -->

      <?php
        $idade = 25;
        $peso = 55;

        if($idade >= 16 && $idade <= 69 && $peso >= 50){
          $sim = "Atende aos requisitos";
        }else{
          $nao = "Não atende aos requisitos";
        } 

        $resultado = $sim ?? $nao;
      ?>

      <h1 class="titulo">Resultado da análise</h1>
      <p> 
        <?php
          echo $resultado;
        ?>
      </p>
  </body>
</html>