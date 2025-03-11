<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Getters e Setters Metodos internamente </h1>
  <?php 

  // modelo
  class Funcionario {

    //atributos
    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getters setters (overloading / sobrecarga)
    function __set($atributo, $valor) {
      $this->$atributo = $valor;
    }

    function __get($atributo) {
      return $this->$atributo;
    }


    //getters and setters
    // function setNome($nome){
    //   $this->nome = $nome;
    // }

    // function setTelefone($telefone){
    //   $this->telefone = $telefone;
    // }

    // function setNumFilhos($numFilhos){
    //   $this->numFilhos = $numFilhos;
    // }

    // function getNome(){
    //   return $this->nome;
    // }

    // function getTelefone(){
    //   return $this->telefone;
    // }

    // function getNumFilhos(){
    //   return $this->numFilhos;
    // }

    //métodos
    function resumirCadFunc() {
      return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s). Numero para contato: " . $this->__get('telefone');
    }

    function modificarNumFilhos($numFilhos){
      //afetar um atributo do objeto
      $this->numFilhos = $numFilhos;
    }

  }

  $y = new Funcionario();
  $y->__set('nome', 'Danilo');
  $y->__set('numFilhos', 2);
  $y->__set('telefone', '71 985092511');
  echo $y->resumirCadFunc();
  
  // echo '<br>';
  // $x = new Funcionario();
  // $x->setNome('Soren');
  // $x->setNumFilhos (0);
  // $x->setTelefone('40028922');
  // echo $x->resumirCadFunc();



  ?>

</body>
</html>