<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Pilar do Encapsulamento</h1>
  <?php 

  class Pai {
    private $nome = 'Danilo';
    protected $sobrenome = 'Antunes' ;
    public $humor = 'Triste';

    public function getNome(){
      return $this->nome;
    }

    public function setNome($value){
      if(strlen($value) >= 3){
        $this->nome = $value;
      }
    }

    public function getSobrenome(){
      return $this->sobrenome;
    }

    public function setSobrenome($value){
      if(strlen($value) >= 3){
        $this->sobrenome = $value;
      }
    }
    // o php tem a inteligencia para utilizar o metodo magico
    // get e set para recuperar o valor de atributos privados/protected.
    public function __get($attr){
      return $this->$attr;
    }

    public function __set($attr, $value){
      $this->$attr = $value;
    }
  }

  $pai = new Pai();
  echo $pai->getNome();
  $pai->setNome('Dan');
  echo '<br>';
  echo $pai->getNome();
  echo '<hr>';
  echo $pai->getSobrenome();
  $pai->setSobrenome('Snider');
  echo '<br>';
  echo $pai->getSobrenome();
  echo '<br>';
  $pai-> sobrenome = 'Soren';
  echo '<hr>';
  echo $pai->sobrenome;

  ?>

</body>
</html>