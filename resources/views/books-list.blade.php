@extends('base')

@section('title')
  <title>Listado de libros</title>

  <style> 
    .jumbotron {
      background-image: url('images/libros2.jpg');
      background-repeat: no-repeat;
      background-blend-mode: soft-light !important;
      background-size: cover;
    }
  </style>
@endsection


@section('content')


  <div class="jumbotron">
    <h1 class="display-4">Libros</h1>
    <p class="lead">Listado de libros</p>
    <hr class="my-4">
    <p>¿Te gusta leer? ¡Aquí hay un interesante listado de libros! También puedes agregar los que te gusten.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('create-book') }}" role="button">Crear Libro</a>
  </div>

  <div class='container'>
    <h1 class='text-center'>Listado de libros</h1>

    @if(count($books) > 0)

      <div class='table-responsive mt-4'>
        <table class='table table-hover table-bordered'>
          <thead class='thead-dark'>
            <tr>
              <th>ID</th>
              <th>ISBN</th>
              <th>Título</th>
              <th>Autor</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            
            @foreach ($books as $book)
    
              <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td clasS='text-center'>
                  <a href="{{ route('book-details', [$book->id]) }}" class="btn btn-outline-info">Ver detalle</a>
                </td>
                <td clasS='text-center'>
                  <a href="{{ route('edit-book', [$book->id]) }}" class="btn btn-outline-primary">Editar</a>
                </td>
                <td clasS='text-center'>
                  <form action="{{ route('destroy-book', [$book])}}" method='POST'>
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type='submit' class="btn btn-outline-danger">Eliminar</button>
                  </form>
                </td>
              </tr>
    
            @endforeach
    
          </tbody>
        </table>
      </div>
    
    @else
  
      <h2 class='text-center mt-4'>No hay libros disponibles</h2>
  
    @endif


  </div>


@endsection


