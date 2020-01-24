@extends('base')

@section('title')
  <title>Listado de libros</title>
@endsection


@section('content')

  <div>
    <a href="{{ route('create-book') }}">Crear libro</a>
  </div>

  @if(count($books) > 0)

    <h1>Listado de libros</h1>

    <table>
      <thead>
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
            <td>
              <a href="{{ route('book-details', [$book->id]) }}">Ver detalle</a>
            </td>
            <td>
              <a href="{{ route('edit-book', [$book->id]) }}">Editar</a>
            </td>
            <td>
              <form action="{{ route('destroy-book', [$book])}}" method='POST'>
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type='submit'>Eliminar</button>
              </form>
            </td>
          </tr>

        @endforeach

      </tbody>
    </table>

  @else

    <h2>No hay libros disponibles</h2>

  @endif

@endsection


