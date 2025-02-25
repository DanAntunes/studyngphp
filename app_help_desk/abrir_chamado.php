<?php 
require_once __DIR__ . '/src/scripts/validador_acesso.php';
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
    <section aria-labelledby="chamado-title">
      <article class="card">
        <header class="card-header">
          <h2 id="chamado-title" class="mb-0">Abertura de chamado</h2>
        </header>
        <div class="card-body">
          <form action="http://localhost/phpstudy/app_help_desk/src/scripts/registra_chamado.php" method="post">
            <div class="form-group">
              <label for="titulo">Título</label>
              <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título" required>
            </div>
            <div class="form-group">
              <label for="categoria">Categoria</label>
              <select id="categoria" name="categoria" class="form-control" required>
                <option value="">Selecione</option>
                <option value="criacao-usuario">Criação Usuário</option>
                <option value="impressora">Impressora</option>
                <option value="hardware">Hardware</option>
                <option value="software">Software</option>
                <option value="rede">Rede</option>
              </select>
            </div>
            <div class="form-group">
              <label for="descricao">Descrição</label>
              <textarea id="descricao" name="descricao" class="form-control" rows="3" placeholder="Descreva o problema" required></textarea>
            </div>
            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
              <div class="col-6">
                <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
              </div>
            </div>
          </form>
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
