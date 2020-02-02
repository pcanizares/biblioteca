@extends('base')

@section('title')
  <title>Crear libro</title>

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
  <p class="lead">Crear un nuevo libro</p>
  <hr class="my-4">
  <p>¿Te gusta leer? ¡Aquí puedes añadir un nuevo libro que te guste!.</p>
  @include('includes/back-to-books')
</div>

<div class='container'>

  <h1 class='text-center'>Crear un nuevo libro</h1>

  <form action="{{ route('store-book') }}" method='POST'>

    {{ csrf_field() }}

    <div class="form-group">
      <label for="title"><b>Título:</b></label>
      <input type='text' class="form-control @if($errors->has('title')) is-invalid @endif" id="title" aria-describedby="titleHelp" name='title' placeholder='Título del libro' value="{{ old('title') }}">
      @if($errors->has('title'))
        <div class="invalid-feedback">{{ $errors->first('title') }}</small>
      @endif
    </div>

    <div class="form-group">
      <label for="author"><b>Autor:</b></label>
      <input type='text' class="form-control @if($errors->has('author')) is-invalid @endif" id="author" aria-describedby="authorHelp" name='author' placeholder='Autor del libro' value="{{ old('author') }}">
      @if($errors->has('author'))
        <div class="invalid-feedback">{{ $errors->first('author') }}</div>
      @endif
    </div>

    <div class="form-row form-group">
      <div class="col-md-6">
        <label for="isbn"><b>ISBN:</b></label>
        <input type='text' class="form-control @if($errors->has('isbn')) is-invalid @endif" id="isbn" aria-describedby="isbnHelp" name='isbn' placeholder='ISBN del libro' value="{{ old('isbn') }}">
        @if($errors->has('isbn'))
          <div class="invalid-feedback">{{ $errors->first('isbn') }}</div>
        @endif
      </div>
      <div class="col-md-6">
        <label for="pages"><b>Número de páginas:</b></label>
        <input type='number' class="form-control @if($errors->has('pages')) is-invalid @endif" id="pages" aria-describedby="pagesHelp" name='pages' placeholder='5' min='0' value="{{ old('pages') }}">
        @if($errors->has('pages'))
          <div class="invalid-feedback">{{ $errors->first('pages') }}</div>
        @endif
      </div>
    </div>
    
    <div class="form-group">
      <label for="sinopsis"><b>Sinopsis:</b></label>
      <textarea class="form-control @if($errors->has('sinopsis')) is-invalid @endif" id="sinopsis" rows="3" name='sinopsis' placeholder='Sinopsis del libro....'>{{ old('isbn') }}</textarea>
      @if($errors->has('sinopsis'))
      <div class="invalid-feedback">{{ $errors->first('sinopsis') }}</div>
      @endif
    </div>
    
    <button type="submit" class="btn btn-success btn-block mt-4">Crear libro</button>

  </form>  

</div>  




  {{-- <div>
    <a href="{{ route('books-list') }}">Volver al listado de libros</a>
  </div> --}}


  {{-- <h1>Crear un nuevo libro</h1>

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

  </form> --}}


@endsection

