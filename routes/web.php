<?php

use Illuminate\Support\Facades\Route;
use App\Paciente;
use App\Logotipo;

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
  $logotipos=Logotipo::where('id','=',1)->get();
    return view('welcome')->with('logotipos',$logotipos);
});
                    // *********RUTA PARA DAR CITA********//
                     //ruta para darcita(cita nueva)
            Route::get('/darcita','CitaController@crear');
                      //Ruta para guardar cita
            Route::post('/darcita','CitaController@guardar');

            Route::delete('paciente/{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+');

            Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');


            Route::delete('{id}/borrar/especialidad','EspecialidadController@destroy') ->name('especialidad.borrar')->where('id','[0-9]+');

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
    //Route::get('{id}','citaController@citaodontologo')->name('cita.odontolo');
    Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
    Route::get('semanal','CitaController@calendar');
    Route::get('vistamensual','CitaController@vistamensual');
    Route::get('diaria','CitaController@vistadiaria'); 
    });



    Route::prefix('pantallainicio/calendario')->group( function(){
      //  Route::get('{id}/odontologo','CitaController@datosver');
          Route::get('{id}/doctor','CitaController@citaodontologo');
        
        });

        Route::prefix('pantallainicio/calendario/semanal')->group( function(){
            Route::get('{id}/odontologo','CitaController@datosver');
              Route::get('{id}/doctor','CitaController@citaodontologo');
            
            });



            Route::get('odontologo','OdontologoController@vistaodontologo');
            Route::get('odontologo/nuevo','OdontologoController@nuevoodontologo');


            Route::get('especialidad','EspecialidadController@vistaespecialidad');
            



        
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
             Route::get('{id}/imagenesArchivos','ArchivoController@ver')->name('imagenesYarchivos.ver');
             Route::get('{id}/nuevoarchivo','ArchivoController@nuevo')-> where('id' ,'[0-9]+');
             Route::post('{id}/nuevoarchivo','ArchivoController@guardar')-> where('id' ,'[0-9]+');
             //ruta de cita individual
             Route::get('{id}/citaindividual','CitaController@verCitaIndividual')->where('id','[0-9]+')->name('citaIndividual');
             //ruta de borrar cita individual
           // Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');
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

             //rutas para documentos clinicos 
              Route::get('{id}/documentosClinicos','DocumentosClinicosController@ver');
              Route::get('{id}/nuevodocumento','DocumentosClinicosController@nuevo')-> where('id' ,'[0-9]+');
              Route::post('{id}/nuevodocumento','DocumentosClinicosController@guardar')-> where('id' ,'[0-9]+');
              Route::get('{id}/evoluciones','EvolucionesController@EvolucionesPaciente')->where('id','[0-9]+')->name('paciente.evoluciones');


             });

              // *********RUTA PARA EL BUSCADOR********//
             //agrupamiento para que funcione el buscador 

    Route::prefix('pantallainicio/vista/paciente/{id}')->group( function(){
            Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
                
                     
            });
            //********* Rutas para administracion(gastos,etc)*********//
            Route::prefix('pantallainicio')->group( function(){
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
                //ruta para ver los gastos de la clinica
                Route::get('gastos','GastoController@ver')->name('gastos.ver');
                //    Ruta para guardar el gasto creado
                Route::post('gastos/nuevo','GastoController@guardargasto')->name('gastos.guardar');
                //    Ruta para eliminar el gasto creado
                Route::delete('{id}/borrar','GastoController@borrargasto') ->name('gasto.borrar')->where('id','[0-9]+');
                    /* Ruta para editar gasto */
                Route::get('{id}/editar','GastoController@editar') ->name('gasto.editar') -> where('id' ,'[0-9]+');
                /* Ruta para guardar la edicion del gasto */
                Route::put('{id}/editar','GastoController@update')->name('gasto.update') -> where('id' ,'[0-9]+');


                Route::get('odontologo','OdontologoController@vistaodontologo');
               // Route::get('odontologo/nuevo','OdontologoController@nuevoodontologo');
               // Route::post('odontologo/nuevo','OdontologoController@GuardarNuevo');
                Route::get('especialidad','EspecialidadController@vistaespecialidad');
                Route::get('nueva/especialidad','EspecialidadController@nuevaespecialidad');
                Route::post('nueva/especialidad','EspecialidadController@GuardarNuevo');
              });

                //********* Rutas para Logotipo*********//
                Route::prefix('pantallainicio/logotipo')->group( function(){
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
                ///////////////////logotipo///////////////////
                Route::get('ver','LogotipoController@ver')->name('logotipo.ver');
                /* Ruta para crear logotipo */
                Route::post('logotipo','LogotipoController@subirArchivo')->name('logotipo.guardar');
                Route::get('/editar','LogotipoController@editar') ->name('logotipo.editar') -> where('id' ,'[0-9]+');
                /* Ruta para guardar la edicionlogo */
                Route::put('{/editar','LogotipoController@update')->name('logotipo.update') -> where('id' ,'[0-9]+');
                /* Ruta para borrar logotipo */
                Route::delete('{id}/borrar','LogotipoController@borrarlogotipo') ->name('logotipo.borrar')->where('id','[0-9]+');
        });

        //**************Rutas de  usuarios******************/

        //rutas para ver todos los usuarios(Todos,Administrativos y clínicos)
        Route::prefix('pantallainicio/')->group( function(){
          Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
          Route::get('usuarios/ver','UsuarioController@ver')
          ->name('usuarios.indice');
          Route::get('usuarios/nuevo','UsuarioController@nuevo');
          Route::post('usuarios/guardar','UsuarioController@guardar')
          ->name('usuario.guardar');
          Route::get('usuarios/{id}/editar','UsuarioController@editar') ->name('usuario.editar') -> where('id' ,'[0-9]+');
          Route::put('usuarios/{id}/editar','UsuarioController@actualizar') ->name('usuario.actualizar') -> where('id' ,'[0-9]+');
          Route::delete('usuarios/{id}/borrar','UsuarioController@borrar') ->name('usuario.borrar')->where('id','[0-9]+');
           //*****************rutas para usuarios administrativos********************/
          Route::get('usuariosAdministrativos','AdministrativoController@ver')
          ->name('administrativo.indice');
          Route::get('usuariosAdministrativos/nuevo','AdministrativoController@nuevo');
          Route::get('/{id}/editar/administrativo','AdministrativoController@editar')
          ->name('administrativo.editar') -> where('id' ,'[0-9]+');
          // Rutas Para Usuarios Clinicos:
          Route::get('usuariosClinicos','UsuarioClinicoController@ver')
          ->name('clinico.indice');
            Route::get('usuariosClinicos/nuevo','UsuarioClinicoController@nuevo')->name('clinico.nuevo');
            Route::get('/{id}/editar/clinico','UsuarioClinicoController@editar')
            ->name('clinico.editar') -> where('id' ,'[0-9]+');

        });
       



   
   
  


   

  

    
//Rutas de Odontologo//
              
        Route::get('odontologo/nuevo','OdontologoController@nuevoodontologo');
        Route::post('odontologo/nuevo','OdontologoController@GuardarNuevo');
        Route::get('/{id}/editar/odontologo','OdontologoController@editarodontologo') ->name('odontologo.editar') -> where('id' ,'[0-9]+');
        Route::put('/{id}/editar/odontologo','odontologoController@updateodontologo')->name('odontologo.update') -> where('id' ,'[0-9]+');
        Route::delete('{id}/borrar/odontologo','OdontologoController@destroy') ->name('odontologo.borrar')->where('id','[0-9]+');


        
//**************Rutas de  tratamientos******************/
Route::get('tratamiento','TratamientoController@vistaprincipal');
Route::get('tratamientonuevo','TratamientoController@nuevo');
Route::post('tratamientoNuevo','TratamientoController@guardar');
Route::delete('tratamiento/{id}/borrar','TratamientoController@destroy') ->name('tratamiento.borrar')->where('id','[0-9]+');
Route::get('{id}/editar','TratamientoController@editar') ->name('tratamiento.editar') -> where('id' ,'[0-9]+');
Route::put('{id}/editar','TratamientoController@update')->name('tratamiento.update') -> where('id' ,'[0-9]+');


//**************Rutas de  tratamientos******************/
Route::get('/tratamiento/{id}/producto','ProductosController@datos')->name('productos.datos')->where('id', '[0-9]+');
Route::get('tratamiento/{id}/producto/editar','ProductosController@editar') ->name('producto.editar') -> where('id' ,'[0-9]+');
Route::put('tratamiento/{id}/producto/editar','ProductosController@update')->name('producto.update') -> where('id' ,'[0-9]+');
Route::get('/tratamiento/{id}/producto/nuevo','ProductosController@nuevo')->name('producto.nuevo') -> where('id' ,'[0-9]+');
Route::post('/tratamiento/{id}/producto/Nuevo','ProductosController@guardar');
Route::delete('tratamiento/{id}/producto/borrar','ProductosController@destroy') ->name('producto.borrar')->where('id','[0-9]+');


Route::get('pantallainicio/{id}/especialidades','EspecialidadController@VistaEspecial')->where('id','[0-9]+')->name('especialidades');
Route::get('{id}/evoluciones','EvolucionesController@EvolucionesPaciente')->where('id','[0-9]+')->name('paciente.evoluciones');
Route::get('especialidad/nueva','EspecialidadOdontologosController@especialidadOdontologo');
Route::post('especialidad/nueva','EspecialidadOdontologosController@GuardarNuevo');

Route::get('pantallainicio/odontologo/{id}','EspecialidadOdontologosController@EspecialidadesOdontologo')->where('id','[0-9]+')->name('odontologo.especialidad');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');