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

  

  ?>

</body>
</html>