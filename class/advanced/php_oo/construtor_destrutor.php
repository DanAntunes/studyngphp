<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Construtor e Destrutor </h1>
  <?php 

  class Pessoa {

    public $nome = null;

    function __construct($nome){
      echo 'Objeto Iniciado';
      $this->nome = $nome;
    }

    function __destruct(){
      echo 'Objeto removido';
    }

    function __get($atributo) {
      return $this->$atributo;
    }

    function correr() {
      return $this->__get('nome') .  ' está correndo' ;
    }
  }

  $pessoa = new pessoa('Danilo');
  echo '<br> Nome: ' . $pessoa->__get('nome');
  echo '<br>' . $pessoa->correr();
  echo '<br>';
  //unset($pessoa); //proposital
  

  ?>

</body>
</html>