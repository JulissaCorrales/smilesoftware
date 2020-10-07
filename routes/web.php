<?php

use Illuminate\Support\Facades\Route;

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

//ruta para vista cita diaria
Route::get('/citadiaria','PantallaInicioController@PantallaInicio')->name('citadiaria');



//ruta para formulario de paciente nuevo
Route::get('/pacienteNuevo','PacienteController@Nuevo');

Route::get('/paciente/{id}','PacienteController@datosVer')->name('paciente.datos')->where('id', '[0-9]+');


//Ruta para editar Paciente

Route::get('/paciente/{id}/editar','PacienteController@editar') ->name('paciente.editar') -> where('id' ,'[0-9]+');
Route::put('/paciente/{id}/editar','PacienteController@update')->name('paciente.update') -> where('id' ,'[0-9]+');




Route::post('/pacienteNuevo','PacienteController@guardar')
    ->name('paciente.guardar');
//ruta para vista de pacientes

Route::get('/paciente/vista','PacienteController@vistapaciente')->name ('paciente.vista');
//ruta para vista de nuevo paciente
Route::get('/paciente/nuevo','PacienteController@nuevopaciente');

//ruta para darcita(cita nueva)
Route::get('/darcita','CitaController@crear');
//Ruta para guardar cita
Route::post('/darcita','CitaController@guardar');
