<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

/* manejo de sesion */
Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');
Route::post('store','SessionsController@store');
/* fin manejo de sesion */


/*manejo de administrador*/
Route::get('admin', 'AdminController@index')->before('auth');
Route::get('admin/crear_actividad', 'AdminController@agregarActividad')->before('auth');
Route::post('admin/guardar_actividad','AdminController@guardarActividad')->before('auth');
Route::get('admin/actividades','AdminController@actividadABM')->before('auth');
Route::get('admin/eliminar_actividad/{id}','AdminController@eliminarActividad')->before('auth');
Route::get('admin/modificar_actividad/{id}','AdminController@modificarActividadView')->before('auth');
Route::post('admin/modif_actividad','AdminController@modificarActividad')->before('auth');



Route::get('admin/crear_propuesta', 'AdminController@agregarPropuesta')->before('auth');
Route::get('admin/propuestas','AdminController@propuestaABM')->before('auth');
Route::post('admin/guardar_propuesta','AdminController@guardarPropuesta')->before('auth');
Route::get('admin/eliminar_propuesta/{id}','AdminController@eliminarPropuesta')->before('auth');
Route::get('admin/modificar_propuesta_view/{id}','AdminController@modificarPropuestaView')->before('auth');
Route::post('admin/modificar_propuesta','AdminController@modificarPropuesta')->before('auth');


Route::get('admin/ver_comentarios','AdminController@verComentarios')->before('auth');





/*fin manejo de administrador*/



/* manejo de contactos*/
Route::resource('contactos','ContactosController');
/* fin manejo de contactos*/


/* manejo de actividades*/
Route::get('actividad/mostrar_actividad','ActividadController@mostrarActividad');

Route::get('actividad/mostrar_fotos/{id}','ActividadController@mostrarFotosActividad');
/*fin manejo de actividades*/


/* manejo de propuestas */

Route::get('propuestas/mostrar_propuestas','PropuestaController@mostrarPropuestas');
/* fin manejo de propuestas */ 


/* manejo de biografia */
Route::get('biografia/mostrar_biografia','BiografiaController@mostrarBiografia');

/* fin manejo de biografia*/

Route::get('usuario', function (){
    User::create([
        'username'=> 'vfranco',
        'email'=> 'vfranco@roshka.com',
        'password'=> Hash::make('123456')
    ]);
    return 'se inserto correctamente';
});


