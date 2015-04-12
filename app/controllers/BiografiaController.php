<?php

class BiografiaController extends BaseController{
    
    public function mostrarBiografia(){
        return View::make('biografia.mostrarBiografia');
    }
}
