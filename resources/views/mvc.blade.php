@extends('base')

@section('title')
  <title>MVL</title>

  <style> 
    .jumbotron {
      background-image: url("{{ asset('images/mvc-modelo-vista-controlador-portada.png') }}");

    }
  </style>

@endsection


@section('content')

  <div class="jumbotron">
    <h1 class="display-4">MVC</h1>
    <p class="lead">Modelo-Vista-Controlador</p>
    <hr class="my-4">
    <p>¿Qué es y para qué sirve?</p>
  </div>

  <div class='container'>
    
    <h1 class='text-center'>MVC (Modelo-Vista-Controlador): ¿qué es y para qué sirve?</h1>

    <div class='text-justify mt-4'>

      <p>
      Tal vez has escuchado hablar acerca de este modelo, ya que es una excelente practica para definir la arquitectura de muchos sistemas y a los programadores nos permite estructurar sistemas robustos de forma clara y eficiente, sobre todo pensando en que los sistemas sean escalables y requerirán mantenimiento. Si aún no conoces este modelo, aquí te explico en qué consiste.<br />
      </p>

      <p>
        El <b>MVC </b> es un <strong>patrón de diseño arquitectónico de </strong><i>software</i></strong>, que sirve para 
        <strong>clasificar la información</strong>, <strong>la lógica del sistema </strong>y<strong> la interfaz</strong> 
        que se le presenta al usuario. En este tipo de arquitectura existe un sistema central o controlador que gestiona las entradas y
        la salida del sistema, uno o varios modelos que se encargan de buscar los datos e información necesaria y una interfaz que muestra los resultados al usuario final. 
        Es muy usado en el desarrollo web porque al tener que interactuar varios lenguajes para crear un sitio es muy fácil generar confusión entre cada componente si 
        estos no son separados de la forma adecuada. Este patrón permite modificar cada uno de sus componentes si necesidad de afectar a los demás.
      </p>

      <h2>Componentes</h2>

      <div class='text-center'>
        <img src="{{ asset('images/mvc-modelo-vista-controlador.png') }}" class="img-fluid">
      </div>

      <p>
        <b>Modelo:</b> este componente se encarga de manipular, gestionar y actualizar los datos. Si se utiliza una base de datos aquí es donde se realizan las consultas, búsquedas, filtros y actualizaciones.
      </p>
      
      <p>
        <b>Vista:</b> este componente se encarga de mostrarle al usuario final las pantallas, ventanas, páginas y formularios; el resultado de una solicitud. Desde la perspectiva del programador este componente es el que se encarga del frontend; la programación de la interfaz de usuario si se trata de un aplicación de escritorio, o bien, la visualización de las páginas web (CSS, HTML, HTML5 y Javascript).
      </p>
      
      <p>
        <b>Controlador:</b> este componente se encarga de gestionar las instrucciones que se reciben, atenderlas y procesarlas. Por medio de él se comunican el modelo y la vista: solicitando los datos necesarios; manipulándolos para obtener los resultados; y entregándolos a la vista para que pueda mostrarlos.
      </p>
        
      <p>
        Este patrón es uno de los más usados, en la actualidad se puede encontrar tanto en pequeños como en grandes sistemas, en el mundo laboral es indispensable llevarlo a la practica. Si apenas te estás iniciando en el mundo de la programación, te recomiendo que adoptes este modelo lo más pronto posible, para que en un futuro con sistemas más complejos no tengas ningún inconveniente.
      </p>

    </div>

  </div>


@endsection