<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActividadController
 *
 * @author vfranco
 */
class ActividadController extends BaseController{
    
    public function mostrarActividad(){
    	//$info = Actividad::all()->sortBy('fecha')->reverse();
    	$actividades = Actividad::orderBy('fecha','DESC')->simplePaginate(3);
    	return View::make('actividad.mostrarActividad', compact('actividades'));
    }
    
    public function mostrarFotosActividad($id){
        $actividad = Actividad::find($id);            
        return View::make('actividad.mostrarFotos',  array('actividad' => $actividad));
    }
}
