<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">    

    @yield('title')

    <style>
      #content {
        margin-top:56px;
      }
    </style>

  </head>

  <body>
{{-- 
    <header>
      CABECERA
    </header> --}}

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">My Books</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li @if(Route::currentRouteName() == 'index') class='nav-item active' @else class='nav-item' @endif >
            <a class="nav-link" href="{{ route('index') }}">Inicio</a>
          </li>
          <li @if(Route::currentRouteName() == 'mvc') class='nav-item active' @else class='nav-item' @endif>
            <a class="nav-link" href="{{ route('mvc') }}">MVC</a>
          </li>
          <li @if(Route::currentRouteName() == 'laravel') class='nav-item active' @else class='nav-item' @endif>
            <a class="nav-link" href="{{ route('laravel') }}">Laravel</a>
          </li>
          <li @if(strpos(Route::currentRouteName(), 'book') === 0 || strpos(Route::currentRouteName(), 'book') >= 1) class='active' @else class='nav-item' @endif>
            <a class="nav-link" href="{{ route('books-list') }}">Libros</a>
          </li>

        </ul>
      </div>
    </nav>

    <div id='content'>

      @yield('content')

    </div>

    <footer class='container-fluid mt-5'>
      <div class='border-top pt-4 pb-4'>
        <div class='row'>
          <div class='col'>My Books &copy;{{ date('Y') }}</div>
          <div class='col text-right'>
            <a href='#' class='ml-3'>
              <i class='fa fa-facebook'></i>
            </a>
            <a href='#' class='ml-3'>
              <i class='fa fa-twitter'></i>
            </a>
            <a href='#' class='ml-3'>
              <i class='fa fa-instagram'></i>
            </a>
            
          </div>
        </div>
      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
  </body>
</html>


