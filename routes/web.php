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


Route::get('pantallainiciomenuagenda','MenuAgendaController@MenuAgenda')->name('pantallainiciomenuagenda');

Route::get('pantallainicio','PacienteController@index')->name('pantallainicio');

//ruta para vista cita diaria
Route::get('/citadiaria','PantallaInicioController@PantallaInicio')->name('citadiaria');



//ruta para formulario de paciente nuevo
Route::get('/pacienteNuevo','PacienteController@Nuevo')->name('paciente.nuevo');
//ruta para guardar paciente
Route::post('/pacienteNuevo','PacienteController@guardar')->name('paciente.guardar');

Route::get('/paciente/{id}','PacienteController@datosVer')->name('paciente.datos')->where('id', '[0-9]+');



//Ruta para editar Paciente

Route::get('/paciente/{id}/editar','PacienteController@editar') ->name('paciente.editar') -> where('id' ,'[0-9]+');
Route::put('/paciente/{id}/editar','PacienteController@update')->name('paciente.update') -> where('id' ,'[0-9]+');


    Route::post('nuevo','PacienteController@GuardarNuevo')
    ->name('guardar.nuevo');
//ruta para vista de pacientes

Route::get('/paciente/vista','PacienteController@vistapaciente')->name ('paciente.vista');

//ruta para darcita(cita nueva)
Route::get('/darcita','CitaController@crear');
//Ruta para guardar cita
Route::post('/darcita','CitaController@guardar');


//ruta para borrar paciente
Route::delete('/paciente/{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+');

//grupo de rutas se ingresa con pantallainicio/y luego a ruta que desea ingresar
//este caso solo para probar el buscador ingrese en la ruta pantallainicio/vista
Route::prefix('pantallainicio')->group( function(){
    Route::get('pantalla','PacienteController@index')->name('pantallainicio');
   // Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
    Route::get('vista','PacienteController@vistapaciente')->name ('paciente.vista');
    Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
    Route::get('calendario','CitaController@calendario');
    //Route::get('calendar','CitaController@calendar');

    
});

Route::prefix('pantallainicio/calendario')->group( function(){
    Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
    //Route::get('/darcita','CitaController@crear');
   // Route::post('/darcita','CitaController@guardar');
    //Route::get('','PacienteController@index')->name ('paciente.vista');
        Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
        Route::get('calendar','CitaController@calendar');
        
    });

Route::prefix('pantallainicio/pantallainicio')->group( function(){
Route::get('pantallainicio/citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
Route::get('','PacienteController@index')->name ('paciente.vista');
    Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
    
    //Route::get('pantallainicio/calendar','CitaController@calendar');
    
});




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

Route::get('/imagenesYarchivos/{id}','imagenesYarchivosController@ver')
->name('imagenesYarchivos.ver');

//Route::get('calendario','CitaController@calendario');

//Route::get('datos','CitaController@datos')->name ('paciente.datos');



//ver cita individual
Route::get('/citaIndividual/{id}','CitaController@verCitaIndividual')->where('id','[0-9]+')->name('citaIndividual');
//borrar cita individual
Route::delete('/citaIndividual/{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');





