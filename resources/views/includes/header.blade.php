<!doctype html>
{{-- {{ dd(auth()->user()) }} --}}
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ empty($title) ? 'Adam Store' : $title . " | Adam Store" }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">Adam Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" href="/products">Products</a>
            </li>
        </ul>
        
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="/cart">Keranjang <i class="bi bi-cart2"></i><span class="badge bg-success ms-2">@auth{{$incart}}@else 0 @endauth</span></a>
            </li>
            @if($title !== "Login" && $title !== "Register")
              @auth
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle me-1"></i>
                    <strong>{{auth()->user()->name}}</strong>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="/account">My Account</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                      <form action="/logout" method="post">
                        @csrf
                        <button class="dropdown-item" style="color:red">Logout</button>
                      </form>
                    </li>
                  </ul>
                </li>
              @else
                <li class="nav-item ms-3">
                  <a href="/login"><button class="btn btn-outline-success"><i class="bi bi-box-arrow-in-right"></i> Login</button></a> 
                </li>
                <li class="nav-item ms-1">
                <a href="/register"><button class="btn btn-outline-primary">Register</button></a> 
                </li>
              @endauth
            @endif
        </ul>
        </div>
    </div>
    </nav>