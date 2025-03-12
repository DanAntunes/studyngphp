<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Pilar do Encapsulamento Functions Pri/Pro/Pub</h1>
  <?php 

  class Pai {
    private $nome = 'Danilo';
    protected $sobrenome = 'Antunes' ;
    public $humor = 'Triste';

    public function __get($attr){
      return $this->$attr;
    }

    public function __set($attr, $value){
      $this->$attr = $value;
    }

    private function executarMania(){
      echo 'Assobiar';
    }

    protected function responder(){
      echo 'oi';
    }
    //É usado como interface por ser publico
    public function executarAcao(){
      $x = rand(1,10);

      if($x >= 1 && $x <= 8 ){
        $this->responder();
      } else {
        $this->executarMania();
      }
    }
  }

  $pai = new Pai();
  echo $pai->sobrenome;
  $pai->sobrenome = 'Tavares';
  echo '<br>';
  echo $pai->sobrenome;
  echo '<hr>';
  echo '<h3> Função </h3>';
  echo $pai->executarAcao();

  ?>

</body>
</html>