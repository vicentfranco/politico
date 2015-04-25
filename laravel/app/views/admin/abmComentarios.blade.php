@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}
    

    <script>
        function checkDelete(id) {
            if (confirm('Really delete?')) {
                $.ajax({
                  type: "DELETE",
                  url: '/contactos/' + id,
                  success: function(result) {
                    // do something
                  }
                });
            }
        }
    </script>
@stop

@section('page')
<div class="wrappper-childs">
    <div class="comentarios">
        <ul>
            <li>
               <div class="comentario">
                    <div class="info-persona-comentario-t">
                        <h3>Informacion</h3>
                    </div>
                    <div class="mensaje-comentario-t">
                        <h3>Comentario</h3>
                    </div>
                    <div class="eliminar-comentario-t">
                        <h3>Accion</h3>
                    </div>
                    <hr class="comentario-linea" />
                </div> 
            </li>
            @foreach($propuestas as $propuesta)
                <li>
                    <div class="comentario">
                        <div class="info-persona-comentario">
                            <p class="comentario-p"><span>Nombre:</span> {{{$propuesta->nombre }}}</p>
                            <p class="comentario-p"><span>Telefono:</span> {{{ $propuesta->telefono }}}</p>
                            <p class="comentario-p"><span>Email:</span> {{{ $propuesta->email }}}</p>
                            <p class="comentario-p"><span>Fecha:</span> {{{ date_format(new DateTime ($propuesta ->fecha), 'd-m-Y') }}}</p>
                        </div>
                        <div class="mensaje-comentario">
                            <p class="comentario-p"> {{{ $propuesta->informacion }}} </p>
                        </div>
                        <div class="eliminar-comentario">
                           {{ Form::open(array('route' => array('contactos.destroy', $propuesta->id), 'method' => 'delete')) }}
                                <button type="submit" href="{{ URL::route('contactos.destroy', $propuesta->id) }}" class="button">Eliminar</button>
                           {{ Form::close() }}
                        </div>
                        <hr class="comentario-linea" />
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@stop




