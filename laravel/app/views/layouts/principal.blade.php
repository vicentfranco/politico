<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        {{HTML::style('assets/css/principal.css')}}
        {{HTML::style('assets/css/owl.carousel.css')}}
        {{HTML::script(asset('assets/js/jquery-1.9.1.min.js')) }}
        {{-- Aqui van a ir los css, js o lo que necesitemos en las vistas--}} 
        @yield('custom-head')
        
         <title>Alcides Sosa Intendente 2015</title>
    </head>
    <body>
        <div id="container">
            <header>
                <div id="imagen">
                    <img alt="Client Logo" title="Client Logo" src= "{{ url('assets/images/logo.png') }}" />
                </div>
                <div class="titulos">
                    <h1 class="nombre-titulo">ALCIDES SOSA BAEZ</h1>
                    <h2 class="nombre-titulo">INTENDENTE <span>ACAHAY</span> 2015</h2>
                </div> 
                <div class="redes">
                    <div class="icon">
                        <a href="https://facebook.com/alcides.sosabaez"><img class="icon" src={{asset('assets/images/icon/icon_face.png')}} alt="Logo"></a>
                    </div>
                    <div class="icon">
                        <a href="#"><img class="icon" src={{asset('assets/images/icon/icon_tw.png')}} alt="Logo"></a> 
                    </div>
                    
                </div> 
                <nav class="main-navigation">
                    @section('navbar')
                        <ul>
                            <li>{{ HTML::link('/','Inicio'); }}</li>
                            @if(Auth::check())
                                <li>{{ HTML::link('/admin','Administrador'); }}</li>
                            @endif
                            <li>{{ HTML::link('biografia/mostrar_biografia','Biografía'); }}</li>
                            <li>{{ HTML::link('propuestas/mostrar_propuestas','Propuestas'); }}</li>
                            <li>{{ HTML::link('actividad/mostrar_actividad','Actividades'); }}</li>
                            <li>{{ HTML::link('contactos','Contáctenos'); }}</li>                        
                        </ul>
                    @show
                </nav> 
            </header>
            <div id="page">
                @yield('page')
                
            </div>
 
            @yield('custom-script')
        </div>
        <footer>
            <div class="centrar-footer">
                <div class="izquierda">
                    <p class="footer">Alcides Sosa Baez</p>
                    <p class="footer">Intendente Acahay 2015</p>
                </div>
                
                <div class="izquierda">
                    {{ HTML::link('contactos','Contactos',array('class'=>'link')); }}
                </div>
                <div class="icon">
                        <a href="{{URL::to('/contactos')}}"><img class="icon-contacto" src={{asset('assets/images/icon/icon_contacto.png')}} alt="Logo"></a> 
                </div>
                <div class="derecha">
                    <p class="footer">Email: info@alcides2015.com</p>
                    <p class="footer">Acahay, Paraguay 2015</p>
                </div>
            </div>
        </footer> 
    </body>
    
</html>