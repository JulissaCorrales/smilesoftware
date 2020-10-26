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

            Route::delete('{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+');

                // *********RUTAS PARA EL MENU PRINCIPAL********//
//grupo de rutas se ingresa con pantallainicio/calendario y luego a ruta que desea ingresar

         Route::prefix('pantallainicio')->group( function(){
             //ruta de agenda
                Route::get('calendario','CitaController@calendario');
                //ruta de vista paciente
                Route::get('vista','PacienteController@vistapaciente')->name ('paciente.vista');
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
    

           });

                           // *********RUTAS PARA EL MENU DE AGENDA********//
//grupo de ruta para agenda
        Route::prefix('pantallainicio/calendario')->group( function(){
               Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
               //ruta de citadiaria
               Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
               //ruta de cita semanal
               Route::get('semanal','CitaController@calendar');
               //ruta de cita mensual
               Route::get('vistamensual','CitaController@vistamensual');
        
    });

                          // *********RUTAS PARA PACIENTE********//

 //grupo de ruta de paciente
    Route::prefix('pantallainicio/vista')->group( function(){
        Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
        //ruta de crear un nuevo paciente
        Route::get('pacienteNuevo','PacienteController@Nuevo')->name('paciente.nuevo');
        //ruta de guardar nuevo paciente
        Route::post('pacienteNuevo','PacienteController@guardar')->name('paciente.guardar');
        
  });

                        // *********RUTAS PARA las rutas con ID********//
    //Agrupamiento de rutas por ID
    Route::prefix('pantallainicio/vista/paciente')->group( function(){
             Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
             //ruta de ver paciente
             Route::get('{id}/paciente','PacienteController@datosVer')->name('paciente.datos')->where('id', '[0-9]+');
             //ruta de borrar paciente
             //Route::delete('{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+');
             //ruta de editar paciente
             Route::get('{id}/editar','PacienteController@editar') ->name('paciente.editar') -> where('id' ,'[0-9]+');
             Route::put('{id}/editar','PacienteController@update')->name('paciente.update') -> where('id' ,'[0-9]+');
             //ruta de Imagenes y Archivos
             Route::get('{id}/imagenesArchivos','imagenesYarchivosController@ver')->name('imagenesYarchivos.ver');
             Route::get('{id}/nuevoarchivo','imagenesYarchivosController@nuevo');
             Route::post('{id}/nuevoarchivo','imagenesYarchivosController@guardar');
             //ruta de cita individual
             Route::get('{id}/citaindividual','CitaController@verCitaIndividual')->where('id','[0-9]+')->name('citaIndividual');
             //ruta de borrar cita individual
             Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');
             //ruta para crear comentarios
             Route::get('{id}/comentarios','PacienteController@comentarios') ->name('comentarios.crear');
             //ruta pra guardar comentarios
             Route::post('{id}/comentarios','PacienteController@GuardarComentario')->name('comentario.guardar');
             //ruta de plandetratamiento ver
             Route::get('{id}/plandetratamiento','PlanTratamientoController@ver')->name('tratamiento.ver');
             //ruta de plande tratamiento nuevo
             Route::get('{id}/tratamientonuevo','PlanTratamientoController@Nuevo')->name('tratamiento.nuevo');
             //ruta de guardar tratamiento
             Route::post('{id}/tratamientonuevo','PlanTratamientoController@guardar')->name('tratamiento.guardar');
             //ruta de borrar tratamiento
             Route::delete('{id}/borrar','PlanTratamientoController@destroy') ->name('plandetratamiento.borrar')->where('id','[0-9]+');

             });

              // *********RUTA PARA EL BUSCADOR********//
             //agrupamiento para que funcione el buscador 

    Route::prefix('pantallainicio/vista/paciente/{id}')->group( function(){
            Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
                
                     
            });
    



    


//Route::get('vistamensual','CitaController@vistamensual');
Route::get('vistaprueba','CitaController@vistaprueba');





//ruta para planes de tratamientos
Route::get('/plandetratamiento/{id}','PlanTratamientoController@ver')->name('tratamiento.ver');
//ruta para nuevo tratamiento

Route::get('/tratamientoNuevo/{id}','PlanTratamientoController@Nuevo')->name('tratamiento.nuevo');
//ruta para guardar paciente
Route::post('/tratamientoNuevo/{id}','PlanTratamientoController@guardar')->name('tratamiento.guardar');
//Ruta Para eliminar plan de tratamiento
Route::delete('/plandetratamiento/{id}/borrar','PlanTratamientoController@destroy') ->name('plandetratamiento.borrar')->where('id','[0-9]+');

//Route::get('calendar','CitaController@calendar');


Route::prefix('pantallainicio/pantallainicio/calendar')->group( function(){
    Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
    //Route::get('','PacienteController@index')->name ('paciente.vista');
});

Route::prefix('/pantallainicio/pantallainicio/pantallainicio/calendar/citadiaria')->group( function(){
    Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
    //Route::get('','PacienteController@index')->name ('paciente.vista');
});

//*****************rutas para ver imagenes y archivos del paciente******************//

//ruta para ver imagenenes del paciente------->

Route::get('/imagenesYarchivos/{id}','ArchivoController@ver')
->name('imagenesYarchivos.ver');

//ruta para el formulario de nuevo archivo del paciente
Route::get('/nuevoArchivo/{id}','ArchivoController@nuevo');
Route::post('/nuevoArchivo/{id}','ArchivoController@guardar');


//Route::get('vistaprueba','CitaController@vistaprueba');









