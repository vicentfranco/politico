@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}

@stop

@section('page')
<div class="wrappper-childs">

        <div class="menu-admin">
            <ul class="menu-ul-admin">
                            <li>{{ HTML::link('admin/actividades','Actividades'); }}</li>
                            <li>{{ HTML::link('admin/propuestas','Propuestas'); }}</li>
                            <li>{{ HTML::link('admin/ver_comentarios','Comentarios'); }}</li>
                            
                                                   
            </ul>
            
        </div>
        <div>
            @if (Session::has('result'))
                
                <p class="info-result">{{ Session::get('result'); }}  </p>
            @endif     
        </div>
</div>
@stop




