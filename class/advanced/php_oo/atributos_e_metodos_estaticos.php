<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Atributos e métodos estáticos</h1>
  <?php 

  class Exemplo {
    public static $atributo1 = 'Eu sou um atributo estático';
    public $atributo2  = 'Eu sou um atributo normal';

    public static function metodo1(){
      echo 'Eu sou um método estático';
    }

    public function metodo2(){
      echo 'Eu sou um método normal';
    }
  }

  // $x = new Exemplo();
  echo Exemplo::$atributo1;
  echo '<br>';
  Exemplo::metodo1();

  ?>

</body>
</html>