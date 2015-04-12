@extends('layouts/principal')

@section('custom-head')
   {{ HTML::style( asset('assets/css/paginas.css') ) }}


@stop

@section('page')
<div class="wrappper-childs">
    
    <div class="header-paginas">
        <h1 class="titulo-pagina">Actividades</h1>
        <p class="descripcion-titulos-paginas">Aqui mostraremos nuestras actividades para ir mejorando <span class="resaltar-detalle">NUESTRO ACAHAY</span> </p>
    </div>
    
    <div class="actividades">
    	
        <ul class="actividad">
            @foreach ($actividades as $actividad)
                
                <li class="actividad">
                    <div class="info">
                        <h3 class="actividad"> {{ $actividad -> titulo }} </h3>
                        <p class="fecha"> Fecha: {{  date_format(new DateTime ($actividad -> fecha), 'd-m-Y');  }} </p>
                        <p class="actividad"> {{ $actividad -> descripcion }} </p>
                        
                        {{ HTML::link('actividad/mostrar_fotos/'.$actividad->id ,'Ver Fotos', array('class'=>'boton')) }}
                    </div>
                    <div id="imagen-actividad">
                        <img src="{{ asset( $actividad -> foto_1 ) }}" />
                    </div>
                    <hr/>
                </li>
                
            @endforeach
        </ul>

    </div>
    <div class="pagination">
        {{ $actividades->links( )}}
    </div>    
</div>
@stop




