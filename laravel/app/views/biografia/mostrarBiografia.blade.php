@extends('layouts/principal')

@section('custom-head')
    {{ HTML::style( asset('assets/css/paginas.css') ) }}
@stop


@section('page')
<div class="wrappper-childs">
    <div class="header-paginas">
            <h1 class="titulo-pagina">Biografia</h1>
        <p class="descripcion-titulos-paginas">
        </p>
    </div>

    <div id="biografia">
        <div id="bio-imagen">
            <img alt="Client Logo" title="Client Logo" src= "{{ url('assets/images/foto-bio.JPG') }}" />
        </div>
        
        <p> Alcides Sosa Baez. Nació en Acahay, distrito del Departamento de
Paraguarí (Paraguay), un 11 de febrero de 1956, hijo de Agustín 
Sosa C. y Pablina Baez de Sosa, ya fallecidos. Es el sexto de ocho hermanos.
Durante su juventud practicó futbol en el Club Atlántida de 
Asunción, Mariscal López y Teniente Cabello de Carapegua, 12 de 
Octubre de Acahay, también fue presidente de este último. 
</p>

<p>Cursó sus estudios:</p>

<p>- Primarios en la Escuela Graduada N°204.</p>

<p>- Secundarios en el Colegio Valois Rivarola.</p>

<p>- Bachillerato Técnico en IPT (Instituto Paraguayo de Telecomunicaciones).

<p>- Mejor egresado del curso de Periodismo Deportivo (Circulo de Periodistas Deportivos del Paraguay).</p>

<p>- Curso extensivo de Extensión y Perfeccionamiento de Radio y Televisión dictado por el Instituto Superior de Enseñanza de 
    Radiodifusión (ISER) en la República Argentina.</p>

<p>Está casado con Marisol Acha de profesión comerciante, egresada 

    de la Facultad de Ciencias Económicas UNA.

Goza del privilegio de ser padre de 4 hijos; Jorge Raul de 21 años, 

estudiante de Administración de Empresas, Alicia Marisol 20 años, 

estudiante de Contaduría Pública y Licenciatura en Lengua 

Extranjera- Inglés, Adriana Marisol 19 años estudiante de 

Ingeniería en Sistema de Producción y Profesional Gastronómico, 

Natalia Beatriz 14 años alumna del 9° grado.</p>

<p>Actividades Laborales:</p> 

<p> - Central Automática de Carapegua (Copaco).</p> 

<p> - Estación Terrena de Aregua, para comunicaciones vía satélite.</p>

<p> - Canal 9 TV Cerro Cora (32 años).</p>

<p> - Presidente de la Asociación de Funcionarios del Canal 9 TV Cerro Cora(16 años).</p> 

<p>Ha cumplido con creces su labor profesional. Actualmente jubilado, 

con intenciones de trabajar para que su comunidad transite los 

senderos de la prosperidad, y que el crecimiento se transforme en 

desarrollo para cada uno de los ciudadanos de su querido Acahay.

Encabeza el proyecto denominado ¡MAS QUE ACAHAY, NUESTRO 

ACAHAY! , proponiendo una política que se sustenta en valores 

como: justicia, tolerancia, cooperación y transparencia.
</p> 
    </div>
</div>
@stop




