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
<<<<<<< HEAD

//ruta para formulario de paciente nuevo
Route::get('/pacienteNuevo','PacienteController@Nuevo');

Route::post('/pacienteNuevo','PacienteController@guardar')
    ->name('paciente.guardar');
=======
//ruta para vista de pacientes
Route::get('/paciente/vista','PacienteController@vistapaciente')->name ('paciente.vista');
//ruta para vista de nuevo paciente
Route::get('/paciente/nuevo','PacienteController@nuevopaciente');
<<<<<<< HEAD

Route::get('/paciente/datospaciente','PacienteController@DatosPaciente');
=======
>>>>>>> 36de8202ee7354306837ccda800849d24f8e1cb1
>>>>>>> 2973848928762d7bbf72635fb33ae4c65a7f7482
