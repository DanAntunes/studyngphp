<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Nullsafe</h1>
  <?php

  // $obejeto = null;

  // $objeto?->total();

  class Funcionario {
    public function __construct(
      private string $nome = "",
      private float $salario = 0
    ){}

    public function info() {
      return "Nome: $this->nome - Salário: $this->salario";
    }
  }

  class FolhaPagamento {
    private $funcionarios = null;
    public function __construct(){
      $this->funcionarios = [
        new Funcionario('Antunes', 12000),
        new Funcionario('Danilo', 9000),
        new Funcionario('Dan', 15000),
        new Funcionario('Nilo', 2000)
      ];
    }
    public function getTotalFuncionarios(){
      return count($this->funcionarios);
    }

    public function getFuncionario(){
      return $this->funcionarios[9]; //null
    }
  }
  $folhaPagamento = new FolhaPagamento();
  // $folhaPagamento = null;
  echo $folhaPagamento?->getTotalFuncionarios();
  echo '<br>';
  print_r($folhaPagamento?->getFuncionario()?->info());

  ?>

</body>
</html>