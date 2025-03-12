<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Pilar do Polimorfismo </h1>
  <?php 

  class Veiculo {
    public $placa = null;
    public $cor = null;

    function acelerar(){
      echo 'Acelerar';
    }

    function freiar(){
      echo 'freiar';
    }

    function trocarMarcha(){
      echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
    }
  }

  class Carro extends Veiculo {
    public $teto_solar = true;

    function __construct($placa, $cor){
      $this->placa = $placa;
      $this->cor = $cor;
    }

    function abrirTetoSolar () {
      echo 'Abrir Teto Solar';
    }

    function alterarPosicaoVolante () {
      echo 'Alterar a posição do Volante';
    }
  }

  class Moto extends Veiculo {
    public $contraPesoGuidao = true;

    
    function __construct($placa, $cor){
      $this->placa = $placa;
      $this->cor = $cor;
    }

    function empinar () {
      echo 'Empinar';
    }

    function trocarMarcha()
    {
      echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
    }
  }

  class Caminhao extends Veiculo {}

    $carro = new Carro ('ABC123', 'Vermelho');
    $moto = new Moto('123ABC', 'Preta');
    $caminhao = new Caminhao();

    $carro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();
  ?>

</body>
</html>