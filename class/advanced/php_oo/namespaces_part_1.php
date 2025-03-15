<?php 
  
  namespace A;
    class Cliente implements \B\CadastroInterface {
        public $nome = 'Danilo';

        public function __construct(){
          echo '<pre>';
          print_r(get_class_methods($this));
          echo '</pre>';
        }

        public function __get($attr) {
            return $this->$attr;
        }

        public function salvar(){
          echo 'Salvar';
        }

        public function remover() {
          echo 'Remover';
        }
    }

    interface  CadastroInterface {
      public function salvar();
    }


namespace B;
    class Cliente implements \A\CadastroInterface {
        public $nome = 'Dan';

        public function __construct(){
          echo '<pre>';
          print_r(get_class_methods($this));
          echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function remover() {
          echo 'Remover';
        }

        public function salvar(){
          echo 'Salvar';
        }
    }

    interface  CadastroInterface {
      public function remover();
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>POO | Namespaces</h1>
<?php
  $c = new \B\Cliente();
  print_r($c);
  echo $c-> __get('nome');
?>


</body>
</html>