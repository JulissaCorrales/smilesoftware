<?php

use Illuminate\Support\Facades\Route;
use App\Paciente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
                    // *********RUTA PARA DAR CITA********//
                     //ruta para darcita(cita nueva)
            Route::get('/darcita','CitaController@crear');
                      //Ruta para guardar cita
            Route::post('/darcita','CitaController@guardar');


                // *********RUTAS PARA EL MENU PRINCIPAL********//
//grupo de rutas se ingresa con pantallainicio/calendario y luego a ruta que desea ingresar

         Route::prefix('pantallainicio')->group( function(){
                Route::get('calendario','CitaController@calendario');
                Route::get('vista','PacienteController@vistapaciente')->name ('paciente.vista');
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
    

           });

                           // *********RUTAS PARA EL MENU DE AGENDA********//
//grupo de ruta para agenda
        Route::prefix('pantallainicio/calendario')->group( function(){
               Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
               Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
               Route::get('semanal','CitaController@calendar');
               Route::get('vistamensual','CitaController@vistamensual');
        
    });

                          // *********RUTAS PARA PACIENTE********//

 //grupo de ruta de paciente
    Route::prefix('pantallainicio/vista')->group( function(){
        Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
        Route::get('pacienteNuevo','PacienteController@Nuevo')->name('paciente.nuevo');
        Route::post('pacienteNuevo','PacienteController@guardar')->name('paciente.guardar');
        
  });

                        // *********RUTAS PARA las rutas con ID********//
    //Agrupamiento de rutas por ID
    Route::prefix('pantallainicio/vista/paciente')->group( function(){
             Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
             Route::get('{id}/paciente','PacienteController@datosVer')->name('paciente.datos')->where('id', '[0-9]+');
             Route::delete('{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+');
             Route::get('{id}/editar','PacienteController@editar') ->name('paciente.editar') -> where('id' ,'[0-9]+');
             Route::put('{id}/editar','PacienteController@update')->name('paciente.update') -> where('id' ,'[0-9]+');
             Route::get('{id}/imagenesArchivos','imagenesYarchivosController@ver')->name('imagenesYarchivos.ver');
             Route::get('{id}/nuevoarchivo','imagenesYarchivosController@nuevo');
             Route::post('{id}/nuevoarchivo','imagenesYarchivosController@guardar');
             Route::get('{id}/citaindividual','CitaController@verCitaIndividual')->where('id','[0-9]+')->name('citaIndividual');
             Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');
             Route::get('{id}/comentarios','PacienteController@comentarios') ->name('comentarios.crear');
             Route::post('{id}/comentarios','PacienteController@GuardarComentario')->name('comentario.guardar');
             Route::get('{id}/plandetratamiento','PlanTratamientoController@ver')->name('tratamiento.ver');
             Route::get('{id}/tratamientonuevo','PlanTratamientoController@Nuevo')->name('tratamiento.nuevo');
             Route::post('{id}/tratamientonuevo','PlanTratamientoController@guardar')->name('tratamiento.guardar');
             Route::delete('{id}/borrar','PlanTratamientoController@destroy') ->name('plandetratamiento.borrar')->where('id','[0-9]+');

             });

              // *********RUTA PARA EL BUSCADOR********//
             //agrupamiento para que funcione el buscador 

    Route::prefix('pantallainicio/vista/paciente/{id}')->group( function(){
            Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
                
                     
            });
    



    



//Route::get('vistaprueba','CitaController@vistaprueba');









