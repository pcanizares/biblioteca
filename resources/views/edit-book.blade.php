@extends('base')

@section('title')
  <title>Editar libro</title>
@endsection


@section('content')

  <div>
    <a href="{{ route('books-list') }}">Volver al istado de libros</a>
  </div>

  @if($book)

    <h1>Editar libro</h1>

    <form action="{{ route('update-book', [$book->id]) }}" method='POST'>

      {{ csrf_field() }}

      {{ method_field('PUT') }}

      <label><b>Título:</b></label><br>
      <input type="text" name='title' placeholder='Título del libro' value="{{ old('title') ? old('title') : $book->title }}">
      @if($errors->has('title'))
        {{ $errors->first('title') }}
      @endif
      <br><br>

      <label><b>ISBN:</b></label><br>
      <input type="text" name='isbn' placeholder='ISBN del libro' value="{{ old('isbn') ? old('isbn') : $book->isbn }}">
      @if($errors->has('isbn'))
        {{ $errors->first('isbn') }}
      @endif
      <br><br>

      <label><b>Autor:</b></label><br>
      <input type="text" name='author' placeholder='Autor del libro' value="{{ old('author') ? old('author') : $book->author }}">
      @if($errors->has('author'))
        {{ $errors->first('author') }}
      @endif
      <br><br>

      <label><b>Número de páginas:</b></label><br>
      <input type="number" name='pages' placeholder='Nº páginas' min='0' value="{{ old('pages') ? old('pages') : $book->pages }}">
      @if($errors->has('pages'))
        {{ $errors->first('pages') }}
      @endif
      <br><br>

      <label><b>Sinopsis:</b></label><br>
      <textarea name='sinopsis' placeholder='Sinopsis del libro....'>{{ old('sinopsis') ? old('sinopsis') : $book->sinopsis }}</textarea>
      @if($errors->has('sinopsis'))
        {{ $errors->first('sinopsis') }}
      @endif
      <br><br>

      <button type='submit'>Editar libro</button>

    </form>

  @else 
    <h3>El libro no existe</h3>
  @endif

@endsection

