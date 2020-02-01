@extends('base')

@section('title')
  <title>Crear libro</title>
@endsection


@section('content')

  {{-- <div>
    <a href="{{ route('books-list') }}">Volver al listado de libros</a>
  </div> --}}

  @include('includes/back-to-books')

  <h1>Crear un nuevo libro</h1>

  <form action="{{ route('store-book') }}" method='POST'>

    {{ csrf_field() }}

    <label><b>Título:</b></label><br>
    <input type="text" name='title' placeholder='Título del libro' value="{{ old('title') }}">
    @if($errors->has('title'))
      {{ $errors->first('title') }}
    @endif

    <br><br>

    <label><b>ISBN:</b></label><br>
    <input type="text" name='isbn' placeholder='ISBN del libro' value="{{ old('isbn') }}">
    @if($errors->has('isbn'))
      {{ $errors->first('isbn') }}
    @endif
    <br><br>

    <label><b>Autor:</b></label><br>
    <input type="text" name='author' placeholder='Autor del libro' value="{{ old('author') }}">
    @if($errors->has('author'))
      {{ $errors->first('author') }}
    @endif
    <br><br>

    <label><b>Número de páginas:</b></label><br>
    <input type="number" name='pages' placeholder='Nº páginas' min='0' value="{{ old('pages') }}">
    @if($errors->has('pages'))
      {{ $errors->first('pages') }}
    @endif
    <br><br>

    <label><b>Sinopsis:</b></label><br>
    <textarea name='sinopsis' placeholder='Sinopsis del libro....'>{{ old('isbn') }}</textarea>
    @if($errors->has('sinopsis'))
      {{ $errors->first('sinopsis') }}
    @endif
    <br><br>

    <button type='submit'>Crear libro</button>

  </form>


@endsection

