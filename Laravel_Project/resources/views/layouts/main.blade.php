<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>

  <!-- Fontes do Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        
  <!-- CSS do Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS da aplicalçao -->
  <link rel="stylesheet" href="/css/styles.css">
  <script src="/js/scripts.js"></script>

  @livewireStyles
</head>
<body class= "@yield('body')" >
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="\">
        <img src="/img/images.png" width="40" height="40" alt="">
      </a>
      <a class="navbar-brand" href="\">Página inicial</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="/produtos" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Produtos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/users/user">Usuário</a>
            </li>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/events/create">Criar Evento</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/info">Info</a>
            </li>
            @guest
            <li class="nav-item">
            <a class="nav-link" href="/users/login">Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/users/cadastro">Cadastre-se</a>
            </li>
            @endguest
        </ul>
        <nav class="navbar bg-body-tertiary">
          <div class="container-fluid">
            <form class="d-flex" role="search" action="">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </nav>
      </div>
    </nav>
  </header>
  <main>
    <div class="container-fluid">
      <div class="row">
        @if(session('msg'))
        <p class="msg"> {{ session('msg') }} </p>
        @endif
        @yield('content')
      </div>
    </div>
  </main>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="/" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="/produto" class="nav-link px-2 text-body-secondary">Produtos</a></li>
    <li class="nav-item"><a href="/users/user" class="nav-link px-2 text-body-secondary">Usuários</a></li>
    <li class="nav-item"><a href="/events/create" class="nav-link px-2 text-body-secondary">Criar Evento</a></li>
    <li class="nav-item"><a href="/info" class="nav-link px-2 text-body-secondary">Info</a></li>
    <li class="nav-item"><a href="/users/login" class="nav-link px-2 text-body-secondary">Login</a></li>
    <li class="nav-item"><a href="/users/cadstro" class="nav-link px-2 text-body-secondary">Cadastro</a></li>
  </ul>
  <p class="text-center text-body-secondary">© 2024 Company, Inc</p>
</footer>

  @livewireScripts
</body>
</html>
