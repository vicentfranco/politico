@extends('layouts/principal')

@section('custom-head')
   {{ HTML::style( asset('assets/css/paginas.css') ) }}
   {{ HTML::style( asset('assets/css/jquery-ui.css') ) }}
   {{HTML::script(asset('assets/js/jquery-ui.js')) }}
    
   <script>
        $(function() {
          $( "#accordion" ).accordion();
        });
   </script>
    
    
@stop

@section('page')
<div class="wrappper-childs">
    
    <div class="header-paginas">
        <h1 class="titulo-pagina">Propuestas</h1>
        <p class="descripcion-titulos-paginas">Aqui mostraremos nuestras propuestas para ir mejorando <span class="resaltar-detalle">NUESTRO ACAHAY</span> </p>
    </div>
    <div id="accordion">
        @foreach($propuestas as $propuesta)
            <h3>{{ $propuesta-> titulo }}</h3>
            <div id="propuesta-custom">
              <p>
                  {{ $propuesta-> descripcion }}
              </p>
            </div>
        @endforeach
    </div> 
    <br>
</div>
@stop




