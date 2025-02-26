<?php 
require_once __DIR__ . '/src/scripts/validador_acesso.php';
?>

<?php
   //
   $chamados = [];
  // Abrir o arquivo.hd
  $arquivo = fopen('./src/scripts/arquivo.hd', 'r');

  // Enquanto houver registros (linhas) a serem recuperados
  while (!feof($arquivo)) {// testa pelo fim de um arquivo
    //linhas
  $registro = fgets($arquivo);
  $chamados[] = $registro;
  };
  //fechar o arquivo aberto
  fclose($arquivo);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Aplicativo para abertura e acompanhamento de chamados">
  <meta name="author" content="Danilo Antunes">
  <title>App Help Desk</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./src/css/app.css">
</head>
<body>
  <!-- Cabeçalho com navegação -->
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <figure class="mb-0">
          <img src="./public/image/logo.png" alt="Logo App Help Desk" class="d-inline-block align-top logo">
          <span>App Help Desk</span>
        </figure>
      </a>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./src/scripts/logoff.php">
            SAIR
          </a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="container my-5">
    <section aria-labelledby="consulta-chamado-title">
      <article class="card">
        <header class="card-header">
          <h2 id="consulta-chamado-title" class="mb-0">Consulta de chamado</h2>
        </header>
        <div class="card-body">
          <? foreach($chamados as $chamados) { ?>
          <div class="row">
            <div class="col">
              <!-- Card de chamado individual -->
              <article class="card mb-3 bg-light">
                <div class="card-body">
                  <h3 class="card-title">Título do chamado...</h3>
                  <h4 class="card-subtitle mb-2 text-muted">Categoria</h4>
                  <p class="card-text">Descrição do chamado...</p>
                </div>
              </article>
            </div>
          </div>
          
          <? } ?>
          <!-- Botão de voltar -->
          <div class="row mt-5">
            <div class="col-6">
            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
            </div>
          </div>
        </div>
      </article>
    </section>
  </main>

  <!-- Rodapé -->
  <footer class="text-center py-3">
    <small>&copy; 2025 App Help Desk. Todos os direitos reservados.</small>
  </footer>
</body>
</html>
