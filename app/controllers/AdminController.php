<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminController
 *
 * @author vfranco
 */
class AdminController extends BaseController {
    
    const PATH_ACTIVITY_IMG = 'img/';


    
    /**
     * Pagina Principal del administrador
     * @return type view
     */
    public function index(){
        return View::make('admin.index');
    }
    
    /**
     * Pagina para agregar un nuevo user. TODO: FALTA IMPLEMENTAR
     */
    public function agregarUsuario(){
        
    }
    
     /**
     * Pagina que manejara en abm de las propuestas
     * @return type vista
     */
    public function actividadABM(){
        $info = Actividad::all();
        Log::info('Retrieved activitis: '.$info );
        return View::make('admin.abmActividades', array('actividades'=>$info));
    }
    
    /**
     * Pagina que manejara en abm de las propuestas
     * @return type vista
     */
    public function PropuestaABM(){
        $propuestas = Propuesta::all();
        Log::info('Retrived Propuestas: '. $propuestas);
        return View::make('admin.abmPropuestas',array('propuestas'=>$propuestas));
    }
    
    
   
    /**
     * Pagina para agregar una nueva actividad
     * @return type
     */
    public function agregarActividad(){
        return View::make('admin.agregarActividad');
    }
    
    /**
     * Pagina para agregar una nueva propuesta
     * @return type
     */
    public function agregarPropuesta(){
        return View::make('admin.agregarPropuesta');
    }
    
    
    /**
     * Guarda la actividad
     * @return type
     */
    public function guardarActividad(){
    	$validaciones = Validator::make(Input::all(),
                [
                    'foto_1'=> 'required',
                    'titulo'=> 'required',
                    'descripcion'=>'required',
                    'fecha'=>'required'
                ]);
        
        if($validaciones->fails()){
            return Redirect::back()->withInput()->withErrors($validaciones);
        }
        
        Log::info('Input::all(), guardarActividad: '. implode(Input::all()));
        

        $destinationPath = '';
	$filename1 = '';
        $filename2 = '';
        $filename3 = '';

	if (Input::hasFile('foto_1')) {
	    $file            = Input::file('foto_1');
	    $destinationPath = self::PATH_ACTIVITY_IMG;
	    $filename1       = str_random(6) . '_' . $file->getClientOriginalName();
	    $uploadSuccess   = $file->move($destinationPath, $filename1);
	}
            
    if (Input::hasFile('foto_2')) {
	    $file            = Input::file('foto_2');
	    $destinationPath = self::PATH_ACTIVITY_IMG;
	    $filename2        = str_random(6) . '_' . $file->getClientOriginalName();
	    $uploadSuccess   = $file->move($destinationPath, $filename2);
	}
            
    if (Input::hasFile('foto_3')) {
	    $file            = Input::file('foto_3');
	    $destinationPath = self::PATH_ACTIVITY_IMG;
	    $filename3        = str_random(6) . '_' . $file->getClientOriginalName();
	    $uploadSuccess   = $file->move($destinationPath, $filename3);
	}


    	$info = new Actividad;
        $info -> titulo = Input::get('titulo');
        $info -> descripcion = Input::get('descripcion');
        $info -> fecha = Input::get('fecha');

        if($filename1 != '')
            $info -> foto_1 = $destinationPath . $filename1;
        if($filename2 != '')
            $info -> foto_2 = $destinationPath . $filename2;
        if($filename3 != '')
            $info -> foto_3 = $destinationPath . $filename3;

        $info -> save();
        Session::flash('result', 'Se guardo correctamente la actividad');
        
        return Redirect::action('AdminController@agregarActividad');
    }
    
    /**
    * Guarda la propuesta
    * @return type
    */
    public function guardarPropuesta(){
      $validaciones = Validator::make(Input::all(),
                [
                    'titulo'=> 'required',
                    'descripcion'=>'required'
                ]);
        
        if($validaciones->fails()){
            return Redirect::back()->withInput()->withErrors($validaciones);
        } 
        
        Log::info('Input::all(), guardarPropuesta(): '. implode(Input::all()));
        
        $propuesta = new Propuesta;
        $propuesta->titulo = Input::get('titulo');
        $propuesta->descripcion = Input::get('descripcion');
        $propuesta->save();
        
        Session::flash('result', 'Se inserto correctamente');
        
        return Redirect::action('AdminController@agregarPropuesta');
    }
    
    /**
     * Pagina para la modificacion de una actividad
     * @param type $id id de la actividad a modificar
     * @return type vista
     */
    public function modificarActividadView($id){
        Log::info('actividad id: '.$id);
        $actividad = Actividad::find($id);
        Log::info('actividad: '. $actividad);
        
        if($actividad == null){
            Session::flash('result','Identificador de la actividad invalida');
            return Redirect::action('AdminController@actividadABM');
        }
        
        return View::make('admin.modificarActividad', array('actividad' => $actividad));
    } 
    
    /**
     * Modifica una actividad
     * @return type
     */
    public function modificarActividad(){
        $validaciones = Validator::make(Input::all(),
                [
                    'id'=> 'required',
                    'titulo'=>'required',
                    'descripcion'=>'required'
                ]);
        
        if($validaciones->fails()){
            return Redirect::back()->withInput()->withErrors($validaciones);
        }
        
        Log::info('Input::all(), modificarPorpuesta: '. implode(Input::all()));
            
        $actividad = Actividad::find(Input::get('id'));
        $actividad->titulo = Input::get('titulo');
        $actividad->descripcion = Input::get('descripcion');
        $actividad->save();
        
        Session::flash('result', 'Se modifico la actividad');
        
        return Redirect::action('AdminController@actividadABM');
    }
    
    /**
     * Pagina para la modificacion de una propuesta
     * @param type $id id de la propuesta a modificar
     * @return type vista
     */
    public function modificarPropuestaView($id){
        Log::info('id de la propuesta :'. $id); 
        $propuesta = Propuesta::find($id);
        Log::info('propuesta: '.$propuesta);
        
        if($propuesta == null){
            Session::flash('result','Identificador de la propuesta invalida');
            return Redirect::back();
        }
        
        return View::make('admin.modificarPropuesta', array('propuesta'=>$propuesta));
    }
    
    /**
     * Modifica una propuesta
     * @return type
     */
    public function modificarPropuesta(){
        $validaciones = Validator::make(Input::all(),
                [
                    'id'=> 'required',
                    'titulo'=>'required',
                    'descripcion'=>'required'
                ]);
        
        if($validaciones->fails()){
            return Redirect::back()->withInput()->withErrors($validaciones);
        }
        
        Log::info('Input::all(), modficarPropuesta: '. implode(Input::all()));
        
        $propuesta = Propuesta::find(Input::get('id'));
        $propuesta->titulo = Input::get('titulo');
        $propuesta->descripcion = Input::get('descripcion');
        $propuesta->save();
        
        Session::flash('result', 'Se modifico la propuesta');
        
        return Redirect::action('AdminController@propuestaABM');
    }

    
    /**
     * Elimina una actividad
     * @param type $id id de la actividad a eliminar
     * @return type vista abm actividades
     */
    public function eliminarActividad($id){
        $actividad = Actividad::find($id);
        Log::info('id actividad a eliminar: '.$id);
        
        if($actividad == null){
            Session::flash('result','No se encontro la actividad');
            return Redirect::action('AdminController@actividadABM');
        }
        
        if($actividad->foto_1 != null){
            try {
                unlink($actividad->foto_1);
            } catch (Exception $exc) {
                Log::error('error al eliminar la foto: '.$actividad->foto_1);
            }

            
        }
        if($actividad->foto_2 != null){
            try {
               unlink($actividad->foto_2); 
            } catch (Exception $exc) {
               Log::error('error al eliminar la foto: '.$actividad->foto_2);
            }

            
        }
        if($actividad->foto_3 != null){
            try{
               unlink($actividad->foto_3); 
            } catch (Exception $ex) {
                Log::error('error al eliminar la foto: '.$actividad->foto_3);
            }
            
        }  
        
        $actividad->delete();
        Session::flash('result','Se elimino la actividad');
        return Redirect::action('AdminController@actividadABM');
    }
    

    /**
     * Elimina una propuesta
     * @param type $id id de la actividad a eliminar
     * @return type vista abm actividades
     */
    public function eliminarPropuesta($id){
        $propuesta = Propuesta::find($id);
        
        Log::info('id propuesta a eliminar: '.$id);
        
        if($propuesta == null){
            Session::flash('result','No se encontro propuesta');
            return Redirect::action('AdminController@propuestaABM');
        }
        
        $propuesta->delete();
        Session::flash('result', 'Se elimino la propuesta');
        return Redirect::action('AdminController@propuestaABM');
    }
    
    
    /**
     * Muestra todos los comentarios
     * @return type
     */
    public function verComentarios(){
        $propuestas = Contacto::all()->sortBy('fecha')->reverse();
        
        if($propuestas == null || count($propuestas) < 1 ){
            Session::flash('result','No existen comentarios');
            return Redirect::action('AdminController@index');
        }
        return View::make('admin.abmComentarios', array('propuestas' => $propuestas));
        
    }
}
