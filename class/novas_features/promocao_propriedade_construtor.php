<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>Promoção de propriedade de construtor</h1>
  <?php
    // class Produto {
    //   public string $nome = "";
    //   public float $valor = 0;

    //   public function __construct($nome, $valor)
    //   {
    //     $this->nome = $nome;
    //     $this->valor = $valor;
    //   }
    // }

    class Produto {
      public function __construct(
        public string $nome = "",
        public float $valor = 0
      ){}
    }

    $produto = new Produto('Smartphone', 1500);

    echo "Produto: ".$produto->nome;
    echo "<br>";
    echo "Valor: ".$produto->valor;
  ?>

</body>
</html>