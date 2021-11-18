<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <title>CRUD Mahasiswa UNESA</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD Data Mahasiswa</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="https://bit.ly/adminakkc">Made with <span class="heart">♥</span> by Gading Utama</a>
        </li>
        </li>
      </ul>
    </div>
  </span>
</div>
</nav>
<div class="container">
@yield('content')
</div>
    <script src="{{ asset ('js/bootstrap.min.js') }}"></script>
  </body>
</html>


