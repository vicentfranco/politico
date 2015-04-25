@extends('layouts/principal')

@section('custom-head')
    {{HTML::script(asset('assets/js/owl.carousel.js'))}}

@stop

@section('page')
<div class="wrappper-childs">
    
     <div id="frase2">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item"><img src="assets/images/principal_1.jpg" alt="Alcides Sosa"></div>
            <div class="item"><img src="assets/images/principal_2.png" alt="Intendente Acahay"></div>
            <div class="item"><img src="assets/images/principal_3.jpg" alt="Acahay"></div>
       </div>

    </div>
    
    <div id="frase">
        <h1 class="frase">!MÁS QUE ACAHAY, NUESTRO ACAHAY!</h1>
        <hr/>
        <p class="frase">Agradezco la confianza y les aseguro que juntos 
            reuniremos las herramientas necesarias para cumplir a cabalidad este proyecto,
            y encontrar siempre la mejor salida que asegure el bienestar del pueblo. 
            No escatimaré esfuerzos para poder brindar las oportunidades de progreso y desarrollo a la ciudad que me vio nacer. 
            Vamos a trabajar para que Acahay transite los senderos
            de la prosperidad y que el crecimiento se transforme en desarrollo para cada uno de los acahaienses</p>
                     <h5>Alcides Sosa Baez</h5>
    </div>
    <hr id="inferior-hr"/>
</div>
@stop

@section('custom-script')
<script>
$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
      autoPlay: 4000,
      navigation : true, // Show next and prev buttons
      slideSpeed : 400,
      paginationSpeed : 400,
      singleItem:true
      
 
      // "singleItem:true" is a shortcut for:
      // items : 1, 
      // itemsDesktop : false,
      // itemsDesktopSmall : false,
      // itemsTablet: false,
      // itemsMobile : false
 
  });
 
});

</script>
@stop


