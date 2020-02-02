@extends('base')

@section('title')
  <title>Detalle de un libro</title>

  <style> 
    .jumbotron {
      background-image: url("{{ asset('images/libros2.jpg') }}");
      background-repeat: no-repeat;
      background-blend-mode: soft-light !important;
      background-size: cover;
    }
  </style>

@endsection


@section('content')

  <div class="jumbotron">
    <h1 class="display-4">Libros</h1>
    <p class="lead">Detalle del libro</p>
    <hr class="my-4">
    <p>¿Te gusta leer? ¡Quizás este libro pueda gustarte!.</p>
    @include('includes/back-to-books')
  </div>


  <div class='container'>

    @if($book)

      <h1 class='text-center'>{{ $book->title }}</h1>

      <div class='text-center mt-4'>
        <p><b>ISBN:</b> {{ $book->isbn }}</p>

        <p><b>Autor:</b> {{ $book->author }}</p>

        <p><b>Número de páginas:</b> {{ $book->pages }}</p>
      </div>

      <div class='text-justify mt-4'>
        <h3>Sinopsis:</h3>

        <p>{{ $book->sinopsis }}</p>
      </div>

    @else

      <h3 class='text-center'>El libro no existe</h3>

    @endif

  </div>

  {{-- <div>
    <a href="{{ route('books-list') }}">Volver al listado de libros</a>
  </div> --}}

  {{-- @include('includes/back-to-books') --}}

  {{-- <div>

    @if($book)

      <h2>{{ $book->title }}</h2>

      <p><b>ISBN:</b> {{ $book->isbn }}</p>

      <p><b>Autor:</b> {{ $book->author }}</p>

      <p><b>Número de páginas:</b> {{ $book->pages }}</p>

      <h3>Sinopsis:</h3>

      <p>{{ $book->sinopsis }}</p>

    @else

      <h3>El libro no existe</h3>

    @endif

  </div> --}}

@endsection

