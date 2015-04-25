<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PropuestaController
 *
 * @author vfranco
 */
class PropuestaController  extends BaseController{
   
    public function mostrarPropuestas(){
        $propuestas = Propuesta::all();
        return View::make( 'propuestas.mostrarPropuestas', array('propuestas'=>$propuestas) ); 
    }
}
