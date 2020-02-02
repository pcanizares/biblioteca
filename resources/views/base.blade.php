<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('title')

    <style>
      nav li a{
        text-decoration: none;
        color: purple;
      }

      nav li.active a {
        color: red;
      }
    </style>

  </head>

  <body>

    <header>
      CABECERA
    </header>

    <nav>
      {{ strpos(Route::currentRouteName(), 'bookdd') }}
      <ul>
        <li @if(Route::currentRouteName() == 'index') class='active' @endif>
          <a href="{{ route('index') }}">Inicio</a>
        </li>
        <li @if(Route::currentRouteName() == 'mvc') class='active' @endif>
          <a href="{{ route('mvc') }}">MVC</a>
        </li>
        <li @if(Route::currentRouteName() == 'laravel') class='active' @endif>
          <a href="{{ route('laravel') }}">Laravel</a>
        </li>
        <li @if(strpos(Route::currentRouteName(), 'book') === 0 || strpos(Route::currentRouteName(), 'book') >= 1) class='active' @endif>
          <a href="{{ route('books-list') }}">Books</a>
        </li>
      </ul>
    </nav>

    @yield('content')

  </body>
</html>


