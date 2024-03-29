<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Курсовая</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container" >
        <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('main.index') }}">Основная</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('post.index') }}">Продукты</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{  route('about.index')  }}">О сайте</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('contact.index') }}">Описание</a>
        </li>
    </div>
  </div>
</nav>
          
        </div>
        @yield('content')
    </div>
</body>
</html>