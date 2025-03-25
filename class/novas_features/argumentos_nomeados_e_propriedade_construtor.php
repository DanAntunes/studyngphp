<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../php.css">
  <title>Curso PHP</title>
</head>
<body>
  <h1>"Argumentos" com "Propriedade de Construtror"</h1>
  <?php

    class Produto {
      public function __construct(
        public string $nome = "",
        public float $valor = 0
      ){}
    }

    $produto = new Produto(valor: 1500, nome: 'Smartphone');

    echo "Produto: ".$produto->nome;
    echo "<br>";
    echo "Valor: ".$produto->valor;
  ?>

</body>
</html>