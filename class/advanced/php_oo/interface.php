<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Interfaces</h1>
  <?php 

  interface EquipamentoEletronicoInterface{
    public function ligar();
    public function desligar();
  }

 //-------------------------------------------

  class Geladeira implements EquipamentoEletronicoInterface {
    public function abrirPorta(){
      echo 'Abrindo a porta.';
    }

    public function ligar(){
      echo 'Ligar Geladeira';
    }

    public function desligar(){
      echo 'Desligar Geladeira';
    }
  }

  class TV implements EquipamentoEletronicoInterface {
    public  function trocarCanal(){
      echo 'Trocando de canal.';
    }

    public function ligar(){
      echo 'Ligar TV';
    }

    public function desligar(){
      echo 'Desligar TV';
    }
  }

  $x = new Geladeira();
  $x->abrirPorta();
  echo '<br>';
  $y = new TV();
  $y->trocarCanal();
//------------------------------------------------------------

  echo '<hr>';

  interface MamiferoInterface {
    public function respirar();
  }

  interface TerrestreInterface {
    public function andar();
  }

  interface AquaticoInterface {
    public function nadar();
  }

  class Humano implements MamiferoInterface, TerrestreInterface {

    public function andar(){
      echo 'Andar';
    }

    public function respirar(){
      echo 'Respirar';
    }

    public function conversar(){
      echo 'Conversar';
    }
  }

  class Baleia implements MamiferoInterface, AquaticoInterface {

    public function respirar(){
      echo 'Respirar';
    }

    public function nadar(){
      echo 'Nadar';
    }

    protected function esguichar(){
      echo 'Esguichando';
    }
  }

  $a = new Humano();
  $a->respirar();
  echo '<br>';
  $b = new Baleia();
  $b->nadar();

  //------------------------------------------------------------

  echo '<hr>';

  interface AnimalInterface {
    public function comer();
  }

  interface AveInterface extends AnimalInterface {
    public function voar();
  }

  class Papagaio implements AveInterface {
    public function voar(){
      echo 'Voando';
    }
    public function comer(){
      echo 'Comendo';
    }
  }
  
  $z = new Papagaio();
  $z->voar();




  ?>

</body>
</html>