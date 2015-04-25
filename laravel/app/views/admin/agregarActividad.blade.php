@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}

@stop

@section('page')
<div class="wrappper-childs">
    <div class="formulario">
        <p class="descripcion-titulos-paginas">Este formulario sirve para cargar las actividades, la imagen 1 es obligatoria, asi como el titulo, fecha y descripcion,
        , los campos de imagen 2 e imagen 3 son opcionales</p>
        {{ Form::open(array('action'=>'AdminController@guardarActividad','files'=>true)) }}
        
        {{ Form::label('titulo','Titulo de la actividad', array('class'=> 'label')) }}
        {{ Form::text('titulo', null, array('class'=>'text-field')) }}
        {{ $errors->first('titulo') }}
        <br>
        
        {{ Form::label('fecha','Fecha de la actividad:', array('class'=> 'label')) }}
        {{ Form::input('date','fecha', null, array('class'=>'text-field')) }}
        {{ $errors->first('fecha') }} 
        <br>
  
        {{ Form::label('foto_1','Imagen 1', array('class'=> 'label')) }}
        {{ Form::file('foto_1', array('class'=>'file')) }}
        {{ $errors->first('foto_1') }}
        <br>
        
        {{ Form::label('foto_2','Imagen 2', array('class'=> 'label')) }}
        {{ Form::file('foto_2', array('class'=>'file')) }}
        {{ $errors->first('foto_2') }}
        <br>
        
        {{ Form::label('foto_3','Imagen 3', array('class'=> 'label')) }}
        {{ Form::file('foto_3', array('class'=>'file')) }}
        {{ $errors->first('foto_3') }}
        <br>
        
        {{ Form::label('descripcion','Descripcion de la actividad', array('class'=> 'label')) }}
        <br>
        {{ Form::textarea('descripcion', null, array('class'=>'text-area')) }}
        {{ $errors->first('descripcion') }}        

        {{ Form::submit('GUARDAR', array('class'=>'button')) }}
        
        {{Form::close()}}
        <div>
            @if (Session::has('result'))
                <p class="info-result">{{ Session::get('result'); }}  </p>
            @endif     
        </div>
    </div>
</div>
@stop




