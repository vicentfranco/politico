<?php

class ContactosController extends BaseController{
    
    public function _construct(){
        $this->beforeFilter('xss', array('on' => 'store') );
    }
    public function index(){
        return View::make('contactos.index');
    }
    
    public function create(){
        return View::make('contactos.index');
    }
    
    
    public function store(){
        $validaciones = Validator::make(Input::all(),
                [
                    'nombre'=> 'required',
                    'comentario'=>'required',
                    'telefono'=>'required|numeric',
                    'email'=>'email'
                ]);
        if($validaciones->fails()){
            return Redirect::back()->withInput()->withErrors($validaciones);
        }
        
        $info = new Contacto;
        $info -> nombre = strip_tags(Input::get('nombre'));
        $info -> telefono = strip_tags(Input::get('telefono'));
        $info -> informacion =Input::get('comentario');
        $info-> email = strip_tags(Input::get('email'));
        $info-> fecha = date('Y-m-d');
        $info -> save();
        Session::flash('result','Se ha enviado correctamente su mensaje, gracias por su interes. :)');
        return Redirect::back();
    }
    

    public function  destroy($id){
        $comentario = Contacto::find($id);
        $comentario->delete();
        return Redirect::action('AdminController@verComentarios');
    }
    
}
