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
            //ruta de logotipo
             Route::get('/', function () {
             $logotipos=Logotipo::where('id','=',1)->get();
             return view('welcome')->with('logotipos',$logotipos);
             });

                    // *********RUTA PARA DAR CITA********//
                     //ruta para darcita(cita nueva)
            Route::get('/darcita','CitaController@crear')->middleware('role:admin,secretaria');
                      //Ruta para guardar cita
            Route::post('/darcita','CitaController@guardar')->middleware('role:admin,secretaria');
             //borrar cita individual
            Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+')->middleware('role:admin,secretaria');


            //************RUTA PARA BORRAR PACIENTE */
             
            Route::delete('paciente/{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+')->middleware('role:admin,secretaria');
            
                //***** RUTA PARA ELIMINAR ESPECIALIDAD */

            Route::delete('{id}/borrar/especialidad','EspecialidadController@destroy') ->name('especialidad.borrar')->where('id','[0-9]+')->middleware('role:admin,secretaria');

                // *********RUTAS PARA EL MENU PRINCIPAL********//
//grupo de rutas se ingresa con pantallainicio/calendario y luego a ruta que desea ingresar

         Route::prefix('pantallainicio')->group( function(){
             //ruta de agenda
                Route::get('calendario','CitaController@calendario')->middleware('role:admin,secretaria,odontologo');
                //ruta de vista paciente
                Route::get('vista','PacienteController@vistapaciente')->name ('paciente.vista')->middleware('role:admin,secretaria,odontologo');
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar')->middleware('role:admin,secretaria,odontologo');
    
           });



                           // *********RUTAS PARA EL MENU DE AGENDA********//
//grupo de ruta para agenda
Route::prefix('pantallainicio/calendario')->group( function(){
    Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
    //Route::get('{id}','citaController@citaodontologo')->name('cita.odontolo');
    Route::get('citadiaria','PantallaInicioController@PantallaInicio')->name('cita.diaria');
    Route::get('semanal','CitaController@calendar')->middleware('role:admin,secretaria,odontologo');
    Route::get('vistamensual','CitaController@vistamensual');
    Route::get('diaria','CitaController@vistadiaria')->middleware('role:admin,secretaria,odontologo');
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


           
            



        
                          // *********RUTAS PARA PACIENTE********//

 //grupo de ruta de paciente
    Route::prefix('pantallainicio/vista')->group( function(){
        Route::get('buscar','PacienteController@index')->name ('paciente.buscar')->middleware('role:admin,secretaria,odontologo');
        //ruta de crear un nuevo paciente
        Route::get('pacienteNuevo','PacienteController@Nuevo')->name('paciente.nuevo')->middleware('role:admin,secretaria');
        //ruta de guardar nuevo paciente
        Route::post('pacienteNuevo','PacienteController@guardar')->name('paciente.guardar')->middleware('role:admin,secretaria');;
        
  });

                        // *********RUTAS PARA las rutas con ID********//
    //Agrupamiento de rutas por ID
    Route::prefix('pantallainicio/vista/paciente')->group( function(){
             Route::get('buscar','PacienteController@index')->name ('paciente.buscar')->middleware('role:admin,secretaria,odontologo');
             //ruta de ver paciente
             Route::get('{id}/paciente','PacienteController@datosVer')->name('paciente.datos')->where('id', '[0-9]+')->middleware('role:admin,odontologo,secretaria');
             //ruta de borrar paciente
             //Route::delete('{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+');
             //ruta de editar paciente
             Route::get('{id}/editar','PacienteController@editar') ->name('paciente.editar') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria,odontologo');
             Route::put('{id}/editar','PacienteController@update')->name('paciente.update') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria');
             //ruta de Imagenes y Archivos
             Route::get('{id}/imagenesArchivos','ArchivoController@ver')->name('imagenesYarchivos.ver');
             Route::get('{id}/nuevoarchivo','ArchivoController@nuevo')-> where('id' ,'[0-9]+');
             Route::post('{id}/nuevoarchivo','ArchivoController@guardar')-> where('id' ,'[0-9]+');
             //ruta de cita individual
             Route::get('{id}/citaindividual','CitaController@verCitaIndividual')->where('id','[0-9]+')->name('citaIndividual')->middleware('role:admin,odontologo');
             //ruta de borrar cita individual
           // Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');
             //ruta para crear comentarios
             Route::get('{id}/comentarios','PacienteController@comentarios') ->name('comentarios.crear')->middleware('role:admin,secretaria');
             //ruta pra guardar comentarios
             Route::post('{id}/comentarios','PacienteController@GuardarComentario')->name('comentario.guardar')->middleware('role:admin,secretaria');
             //ruta de plandetratamiento ver
             Route::get('{id}/plandetratamiento','PlanTratamientoController@ver')->name('tratamiento.ver');
             //ruta de plande tratamiento nuevo
             Route::get('{id}/tratamientonuevo','PlanTratamientoController@Nuevo')->name('tratamiento.nuevo');
             //ruta de guardar tratamiento
             Route::post('{id}/tratamientonuevo','PlanTratamientoController@guardar')->name('tratamiento.guardar');
             //ruta de borrar tratamiento
             Route::delete('{id}/borrar','PlanTratamientoController@destroy') ->name('plandetratamiento.borrar')->where('id','[0-9]+');
             //Rutas para la factura de plan de tratamiento
             Route::get('{id}/plandetratamiento/{idplantratamiento}/factura','PlanTratamientoController@factura')->name('factura.ver')->where('id','[0-9]+');


             //rutas para documentos clinicos 
              Route::get('{id}/documentosClinicos','DocumentosClinicosController@ver')->name('documentos.ver');
              Route::get('{id}/nuevodocumento','DocumentosClinicosController@nuevo')-> where('id' ,'[0-9]+');
              Route::post('{id}/nuevodocumento','DocumentosClinicosController@guardar')-> where('id' ,'[0-9]+');

              
              Route::get('{id}/evoluciones','EvolucionesController@EvolucionesPaciente')->where('id','[0-9]+')->name('paciente.evoluciones');

              Route::get('{id}/evolucion/nueva','EvolucionesController@nuevaevolucion')->name('evolucion.nueva') -> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
              Route::post('{id}/evolucion/nueva','EvolucionesController@GuardarEvolucion')->name('evolucion.guardar') -> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
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
                Route::get('gastos','GastoController@ver')->name('gastos.ver')->middleware('role:admin,secretaria');
                //    Ruta para guardar el gasto creado
                Route::post('gastos/nuevo','GastoController@guardargasto')->name('gastos.guardar')->middleware('role:admin,secretaria');
                //    Ruta para eliminar el gasto creado
                Route::delete('{id}/borrar','GastoController@borrargasto') ->name('gasto.borrar')->where('id','[0-9]+')->middleware('role:admin');
                    /* Ruta para editar gasto */
                Route::get('{id}/editar','GastoController@editar') ->name('gasto.editar') -> where('id' ,'[0-9]+')->middleware('role:admin');
                /* Ruta para guardar la edicion del gasto */
                Route::put('{id}/editar','GastoController@update')->name('gasto.update') -> where('id' ,'[0-9]+')->middleware('role:admin');

                Route::get('odontologo','OdontologoController@vistaodontologo');
              
                Route::get('especialidad','EspecialidadController@vistaespecialidad')->middleware('role:admin,secretaria');
                Route::get('nueva/especialidad','EspecialidadController@nuevaespecialidad')->middleware('role:admin,secretaria');
                Route::post('nueva/especialidad','EspecialidadController@GuardarNuevo')->middleware('role:admin,secretaria');

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
          Route::get('usuarios/ver','UsuarioController@ver')->name('usuarios.indice')->middleware('role:admin');;
          Route::get('usuarios/nuevo','UsuarioController@nuevo')->name('usuario.nuevo')->middleware('role:admin');;
          Route::post('usuarios/guardar','UsuarioController@guardar')->name('usuario.guardar')->middleware('role:admin');;

          Route::get('{id}/verusuario','UsuarioController@verusuario')->name('usuario.verusuario') -> where('id' ,'[0-9]+')->middleware('role:admin');;
          Route::get('usuarios/{id}/editar','UsuarioController@editar') ->name('usuario.editar') -> where('id' ,'[0-9]+')->middleware('role:admin');;
          Route::put('usuarios/{id}/editar','UsuarioController@actualizar') ->name('usuario.actualizar') -> where('id' ,'[0-9]+')->middleware('role:admin');;
          Route::delete('usuarios/{id}/borrar','UsuarioController@borrar') ->name('usuario.borrar')->where('id','[0-9]+')->middleware('role:admin');;
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
       


        //ruta para los roles
        Route::get('roles/ver','RolController@Roles') ->name('roles.ver')->middleware('role:admin');
          Route::get('{id}/verrol','RolController@verRoles')->name('rol.verroles') -> where('id' ,'[0-9]+')->middleware('role:admin');
          Route::get('rol/nuevo','RolController@nuevoRol')->name('nuevo.rol')->middleware('role:admin');
          Route::post('rol/nuevo','RolController@guardarRol')->name('rol.guardar')->middleware('role:admin');
          Route::get('{id}/rol/editar','RolController@editarRol') ->name('rol.editar') -> where('id' ,'[0-9]+')->middleware('role:admin');
          Route::put('{id}/rol/editar','RolController@update')->name('rol.update') -> where('id' ,'[0-9]+')->middleware('role:admin');
          Route::delete('{id}/rol/borrar','RolController@borrar') ->name('rol.borrar')->where('id','[0-9]+')->middleware('role:admin');


   
   
  


  
//Rutas de Odontologo//
              
        Route::get('odontologo/nuevo','OdontologoController@nuevoodontologo');
        Route::post('odontologo/nuevo','OdontologoController@GuardarNuevo');
        Route::get('/{id}/editar/odontologo','OdontologoController@editarodontologo') ->name('odontologo.editar') -> where('id' ,'[0-9]+');
        Route::put('/{id}/editar/odontologo','odontologoController@updateodontologo')->name('odontologo.update') -> where('id' ,'[0-9]+');
        Route::delete('{id}/borrar/odontologo','OdontologoController@destroy') ->name('odontologo.borrar')->where('id','[0-9]+');


        
//**************Rutas de  tratamientos******************/
Route::get('tratamiento','TratamientoController@vistaprincipal')->name('tratamiento.vista');
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


Route::get('pantallainicio/{id}/especialidades','EspecialidadController@VistaEspecial')->where('id','[0-9]+')->name('especialidades')->middleware('role:admin,secretaria');
Route::get('{id}/evoluciones','EvolucionesController@EvolucionesPaciente')->where('id','[0-9]+')->name('paciente.evoluciones')->middleware('role:admin,odontologo');
Route::get('especialidad/nueva','EspecialidadOdontologosController@especialidadOdontologo')->middleware('role:admin,secretaria');
Route::post('especialidad/nueva','EspecialidadOdontologosController@GuardarNuevo')->middleware('role:admin,secretaria');

Route::get('pantallainicio/odontologo/{id}','EspecialidadOdontologosController@EspecialidadesOdontologo')->where('id','[0-9]+')->name('odontologo.especialidad')->middleware('role:admin,secretaria');


//**************Rutas de  inventarios******************/
Route::get('inventario','InventarioController@vistaprincipal');
Route::delete('inventario/{id}/borrar','InventarioController@destroy') ->name('inventario.borrar')->where('id','[0-9]+');
Route::post('inventarioNuevo','InventarioController@guardar');
Route::get('inventarionuevo','InventarioController@nuevo');
Route::get('inventario/{id}/editar','InventarioController@editar') ->name('inventario.editar') -> where('id' ,'[0-9]+');
Route::put('inventario/{id}/editar','InventarioController@update')->name('inventario.update') -> where('id' ,'[0-9]+');

//**************Rutas de  medios de pago******************/
Route::get('mediopago','MediodepagoController@vistaprincipal');
Route::delete('mediopago/{id}/borrar','MediodepagoController@destroy') ->name('mediopago.borrar')->where('id','[0-9]+');
Route::post('mediopagoNuevo','MediodepagoController@guardar');
Route::get('mediopagonuevo','MediodepagoController@nuevo');
Route::get('mediopago/{id}/editar','MediodepagoController@editar') ->name('mediopago.editar') -> where('id' ,'[0-9]+');
Route::put('mediopago/{id}/editar','MediodepagoController@update')->name('mediopago.update') -> where('id' ,'[0-9]+');



Route::get('evolucion/nueva/{id}','EvolucionesController@nuevaevolucion')->name('evolucion.nueva') -> where('id' ,'[0-9]+');;





//Rutas para el login(Autenticación)
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


