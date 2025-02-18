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
  <link rel="stylesheet" href="./src/app.css">
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
    <section aria-labelledby="menu-title">
      <article class="card card-home">
        <header class="card-header">
          <h2 id="menu-title" class="mb-0">Menu</h2>
        </header>
        <div class="card-body">
          <div class="row">
            <div class="col-6 d-flex justify-content-center">
              <a href="abrir_chamado.html" title="Abrir Chamado">
                <img src="formulario_abrir_chamado.png" width="70" height="70" alt="Formulário para abrir chamado">
              </a>
            </div>
            <div class="col-6 d-flex justify-content-center">
              <a href="consultar_chamado.html" title="Consultar Chamado">
                <img src="formulario_consultar_chamado.png" width="70" height="70" alt="Formulário para consultar chamado">
              </a>
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
