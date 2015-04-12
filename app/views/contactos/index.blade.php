@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}

@stop

@section('page')
<div class="wrappper-childs">
    
    <div class="header-paginas">
        <h1 class="titulo-pagina">Contactenos</h1>
        <p class="descripcion-titulos-paginas">Queremos que seas participe de mejorar <span class="resaltar-detalle">NUESTRO ACAHAY</span> y para ello tu opinion 
            es importante para ese proposito </p>
    </div>
    <div class="formulario">
        {{ Form::open(array('route'=>'contactos.store')) }}
        
        {{ Form::label('nombre','Nombre y Apellido:',array('class' => 'label')) }}
        {{ Form::text('nombre', null,array('class' => 'text-field','size'=>'40')) }}
        <p class="error-validaciones">{{ $errors->first('nombre') }} </p>
        <br>
        {{ Form::label('telefono','Telefono:', array('class' => 'label')) }}
        {{ Form::number('telefono', null,array('class' => 'text-field')) }}
        <p class="error-validaciones"> {{$errors->first('telefono') }}</p>
        <br>
        {{ Form::label('email','Email:', array('class' => 'label')) }}
        {{ Form::email('email', null,array('class' => 'text-field','size'=>'40')) }}
        <p class="error-validaciones"> {{$errors->first('email') }}</p>
        <br>
        {{ Form::label('comentario','Opinion y comentarios:',array('class' => 'label')) }}
        <br>
        {{ Form::textarea('comentario',null ,array('class' => 'text-area')) }}
        <p class="error-validaciones"> {{ $errors->first('comentario') }} </p>
        <br>
        {{ Form::submit('ENVIAR', array('class'=>'button')) }}
        
        {{Form::close()}}
    </div>
    <div>
            @if (Session::has('result'))
                
                <p class="info-result">{{ Session::get('result'); }}  </p>
            @endif     
    </div>
</div>
@stop




