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


Route::get('pantallainiciomenuagenda','MenuAgendaController@MenuAgenda');

//ruta para vista cita diaria
Route::get('/citadiaria','PantallaInicioController@PantallaInicio');

//ruta para darcita(cita nueva)
Route::get('/darcita','CitaController@crear');
//ruta para vista de pacientes
Route::get('/paciente','PacienteController@vistapaciente');
//ruta para vista de nuevo paciente
Route::get('/paciente/nuevo','PacienteController@nuevopaciente');