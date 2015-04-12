@extends('layouts/principal')

@section('custom-head')
   {{ HTML::style( asset('assets/css/paginas.css') ) }}
@stop

@section('page')
   <div class="wrappper-childs">
    <div class="formulario-login">
        <div class="login">
        {{ Form::open( array( 'url'=>'store') ) }}
            <div>
                <br>
                {{ Form::label('username','Usuario:', array('rel'=>'login-form-user')) }}
                {{ Form::text('username',null, array('rel'=>'login-form-user')) }}
                <br>
                {{ Form::label('password', 'Contraseña:', array('rel'=>'login-form-pass')) }}
                {{ Form::password('password', null, array('class'=>'login-form-pass')) }}
                <br>
                {{ Form::submit('Acceder', array('class'=>'button-login')) }}
            </div>
        {{ Form::close() }}
        </div>
    </div>
   </div>

@stop

