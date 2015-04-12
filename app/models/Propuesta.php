<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Propuesta
 *
 * @author vfranco
 */
class Propuesta extends Eloquent{
    //este atributo deshabilita un campo por defecto que deberiamos agregar a nuestra base de datos osino explotaaaaaa :/
    public $timestamps = false;
    protected $table = 'propuestas';
    protected $fillable = ['titulo', 'descripcion'];
}
