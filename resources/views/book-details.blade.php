@extends('base')

@section('title')
  <title>Detalle de un libro</title>
@endsection


@section('content')

  {{-- <div>
    <a href="{{ route('books-list') }}">Volver al listado de libros</a>
  </div> --}}

  @include('includes/back-to-books')

  <div>

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

  </div>

@endsection

