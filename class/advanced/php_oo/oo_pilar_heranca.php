<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Pilar da Herança </h1>
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
  }

    $carro = new Carro ('ABC123', 'Vermelho');
    $moto = new Moto('123ABC', 'Preta');

    echo '<pre>';
    print_r($carro);
    echo '<br><br>';
    print_r($moto);
    echo '</pre>';
    echo '<hr>';
    //Objeto Carro
    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->acelerar();
    echo '<br>';
    $carro->freiar();
    echo '<hr>';
    // Objeto Moto
    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $moto->freiar()
  ?>

</body>
</html>