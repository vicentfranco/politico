@extends('layouts/principal')

@section('custom-head')
{{ HTML::style( asset('assets/css/paginas.css') ) }}
   {{ HTML::style( asset('assets/galeria/css/custom.css') ) }}

   {{ HTML::style( asset('assets/galeria/css/slicebox.css') ) }}
   {{HTML::script(asset('assets/galeria/js/modernizr.custom.46884.js')) }}
      {{HTML::script(asset('assets/galeria/js/jquery.slicebox.js')) }}

@stop

@section('page')

        <div class="wrapper-childs">
            <div class="galeria-wrapper">

                    <ul id="sb-slider" class="sb-slider">
                       			
                                @if($actividad->foto_1  != null )
                                    <li>
                                        <img src="{{ asset( $actividad->foto_1 ) }}" alt="img"/>
                                    </li>
                                @endif
                                @if( $actividad->foto_2  != null )
                                    <li>
                                        <img src="{{ asset( $actividad->foto_2 ) }}" alt="img"/>
                                    </li>
                                @endif
                                @if($actividad->foto_3 != null )
                                    <li>
                                        <img src="{{ asset( $actividad->foto_3 ) }}" alt="img"/>
                                    </li>
                                @endif
                                

                    </ul>
                <div id="shadow" class="shadow"></div>
                <div id="nav-arrows" class="nav-arrows">
                    <a href="#">Anterior</a>
                    <a href="#">Siguiente</a>
                </div>
            </div><!-- /galeriawrapper -->
            <div>
            	{{ HTML::link('actividad/mostrar_actividad' ,'<< Volver a actividades', array('class'=>'accion-volver')) }}
            </div>
        </div>
		<script type="text/javascript">
			$(function() {
				
				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {

								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true
						} ),
						
						init = function() {

							initEvents();
							
						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {
								
								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
@stop




