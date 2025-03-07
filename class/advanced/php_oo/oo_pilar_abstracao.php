<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Pilar da Abstração</h1>
  <?php 

  // modelo
  class Funcionario {

    //atributos
    public $nome = 'Danilo';
    public $telefone = '71 985092511';
    public $numFilhos = 0;

    //métodos
    function resumirCadFunc() {
      return "$this->nome possui $this->numFilhos filhos";
    }

    function modificarNumFilhos($numFilhos){
      //afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
    }

  }

  $y = new Funcionario();
  echo $y->resumirCadFunc();
  echo '<br/>';
  $y->modificarNumFilhos(3);
  echo $y->resumirCadFunc();
  echo '<hr/>';

  $x = new Funcionario();
  echo $x->resumirCadFunc();
  echo '<br/>';
  $x->modificarNumFilhos(1);
  echo $x->resumirCadFunc();

  ?>

</body>
</html>