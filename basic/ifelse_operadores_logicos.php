<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php 
    // OPERADORES CONDICIONAIS/COMPARAÇÃO
    // == igual
    // === idêntico
    // != ou <> diferente
    // !== não idêntico
    // < menor que
    // > maior que
    // <= menor ou igual
    // >= maior ou igual

    //OPERADORES LOGICOS

    //E: && ou AND -> retorna verdadeiro se todos os resultados forem verdadeiros 
      /* if ( 5 == 3 && 10 > 3) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }*/

    //OU: || ou OR -> retorna verdadeiro se pelo menos um dos resultados forem verdadeiros
      /*if ( 5 == 3 || 10 > 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }*/

    //XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra falsa 
      /*if ( 4 == 4 XOR 10 > 15) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }*/  
    
    //NÃO: ! -> inverte o resultado retornado pela expressão
      /*if ( !('a' == 'b')) {
            echo 'Verdadeiro';
        } else {
            echo 'Falso';
        }*/
    //() estabelecer precedência
    if ((22 == 22 && 3 == 3) || 5 != 5) {
      echo 'Verdadeiro';
    } else {
      echo 'Falso';
    }
    
  ?>
</body>
</html>