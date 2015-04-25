@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}

@stop

@section('page')
<div class="wrappper-childs">
    <div class="actividades-bm">
        <ul>
            <li>
               <div class="actividad-bm">
                    <div class="actividad-titulo-t">
                        <h3>Titulo</h3>
                    </div>
                    <div class="actividad-descripcion-t">
                        <h3>Propuesta</h3>
                    </div>
                   <div class="accion-actividad-t">
                       <h3>Accion</h3>
                   </div>
                    <hr class="comentario-linea-a" />
                </div> 
            </li>
            @foreach($propuestas as $propuesta)
                <li>
                    <div class="actividad-bm">
                        <div class="actividad-titulo">
                            <p class="titulo-p">{{$propuesta->titulo }}</p>
                        </div>
                        <div class="actividad-descripcion">
                            <p class="descripcion-p"> {{ $propuesta->descripcion }} </p>
                        </div>
                        <div class="accion-actividad">
                          {{ HTML::link('admin/eliminar_propuesta/'.$propuesta->id ,'Eliminar', array('class'=>'accion')) }}
                          {{ HTML::link('admin/modificar_propuesta_view/'.$propuesta->id ,'Editar', array('class'=>'accion')) }}
                        </div> 
                        <hr class="comentario-linea-a" />
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <div class="agregar">
         {{ HTML::link('admin/crear_propuesta','AGREGAR',array('class'=>'boton')) }}
    </div>
    <div>
            @if (Session::has('result'))
                
                <p class="info-result">{{ Session::get('result'); }}  </p>
            @endif     
    </div>
</div>
@stop




