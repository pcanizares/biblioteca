<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    @yield('title')

  </head>

  <body>

    <header>
      CABECERA
    </header>

    <nav>
      <ul>
        <li>
          <a href="{{ route('index') }}">Inicio</a>
        </li>
        <li>
          <a href="{{ route('mvc') }}">MVC</a>
        </li>
        <li>
          <a href="{{ route('laravel') }}">Laravel</a>
        </li>
        <li>
          <a href="{{ route('books-list') }}">Books</a>
        </li>
      </ul>
    </nav>

    @yield('content')

  </body>
</html>


