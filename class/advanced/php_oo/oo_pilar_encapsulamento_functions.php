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

  class Filho extends Pai {
    public function __construct(){
        //Exibir os métodos do objeto
        echo '<pre>';
        print_R(get_class_methods($this));
        echo '</pre>';
    }

    private function executarMania(){
      echo 'Cantar';
    }

    public function x(){
      $this->executarMania();
    }

    protected function responder(){
      echo 'Olá';
    }
  }

  $filho = new Filho();
  echo '<pre>';
  print_r($filho);
  echo '</pre>';

  $filho->executarAcao();
  echo '<br>';
  $filho->x();


  ?>

</body>
</html>