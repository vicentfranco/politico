@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}

@stop

@section('page')
<div class="wrappper-childs">
    <div class="formulario">
        <p>Este formulario sirve para cargar las actividades, la imagen 1 es obligatoria, asi como el titulo, fecha y descripcion,
        , los campos de imagen 2 e imagen 3 son opcionales</p>
        
        
        {{ Form::open(array('action'=>'AdminController@modificarActividad','files'=>true)) }}
        
        {{ Form::hidden('id',$actividad->id )}}
        
        {{ Form::label('titulo','Titulo de la Actividad', array('class'=> 'label')) }}
        {{ Form::text('titulo', $actividad->titulo, array('class'=>'text-field')) }}
        {{ $errors->first('titulo') }}
        <br>

        
        {{ Form::label('descripcion','Descripcion de la actividad', array('class'=> 'label')) }}
        <br>
        {{ Form::textarea('descripcion', $actividad->descripcion, array('class'=>'text-area')) }}
        {{ $errors->first('descripcion') }}       
        <br>
        {{ Form::submit('ENVIAR', array('class'=>'button')) }}
        
        {{Form::close()}}
        <div>
            @if (Session::has('result'))
                
                <p class="info-result">{{ Session::get('result'); }}  </p>
            @endif     
        </div>
    </div>
</div>
@stop




