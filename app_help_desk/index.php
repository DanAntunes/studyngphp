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
    </nav>
  </header>

  <!-- Conteúdo principal -->
  <main class="container my-5">
    <section aria-labelledby="login-title">
      <article class="card card-login">
        <header class="card-header">
          <h2 id="login-title" class="mb-0">Login</h2>
        </header>
        <div class="card-body">
          <form action="#" method="post">
            <div class="form-group">
              <label for="email" class="sr-only">E-mail</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <label for="senha" class="sr-only">Senha</label>
              <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-lg btn-info btn-block">Entrar</button>
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
