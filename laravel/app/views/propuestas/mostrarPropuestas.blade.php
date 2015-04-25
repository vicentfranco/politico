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
        <p class="descripcion-titulos-paginas">   Tengo un plan estratégico, se llama HACER LAS COSAS BIEN. 
          Promuevo una política basada en responsabilidad, 
          respeto y compromiso con mi pueblo donde tendremos 
          en cuenta todos los proyectos en bien de la comunidad. 
          Lo mejor está por venir, esto es MÁS QUE ACAHAY, NUESTRO ACAHAY.  
        </p>
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




