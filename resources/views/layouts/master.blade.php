<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>laravel-auth</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark px-5 py-3">
        <div class="container-fluid">
          <a class="navbar-brand text-light fs-3" href="#">FL11</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              
              @auth
              <li class="nav-item">
                <a class="nav-link text-light " href="{{route('index')}}">Acceuil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="{{route('mine')}}">Mes articles</a>
              </li>
              <li class="nav-item">
               <button class="btn btn-success p-0 me-2"> <a class="nav-link text-light" href="{{route('enregistrer')}}">Enregister<i class="fa-solid fa-pen-to-square" style="margin-right: 3px"></i></a></button>
              </li>
              <li class="nav-item">
               <button class="btn btn-primary p-0"> <a class="nav-link text-light" href="{{route('logout')}}">Deconnexion <i class="fa-solid fa-power-off"></i> </a></button>
              </li>
               @else
               <li class="nav-item">
                <a class="nav-link text-light " href="{{route('index')}}">Acceuil</a>
              </li>
               <li class="nav-item">
                <a class="nav-link text-light" href="{{route('login')}}">Mon compte</a>
              </li>
              @endauth
              
            </ul>
          </div>
        </div>
      </nav>
    @yield('content')  
</body>
</html>