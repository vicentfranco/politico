<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Actividad
 *
 * @author vfranco
 */
class Actividad extends Eloquent{
    
    //este atributo deshabilita un campo por defecto que deberiamos agregar a nuestra base de datos osino explotaaaaaa :/
    public $timestamps = false;
    
    
    protected $fillable = ['titulo','descripcion','foto_1','foto_2','foto_3','fecha'];
    protected $table = 'actividad';
}
