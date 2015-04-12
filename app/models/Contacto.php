<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InfoContacto
 *
 * @author vfranco
 */
class Contacto extends Eloquent{
    
    
    //este atributo deshabilita un campo por defecto que deberiamos agregar a nuestra base de datos osino explotaaaaaa :/
    public $timestamps = false;
    
    protected $fillable = ['informacion','nombre','telefono','email','fecha'];
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
    protected $table = 'contactos';
    
    
}
