<?php

use Illuminate\Support\Facades\Route;
use App\Paciente;
use App\Logotipo;
use App\Mail\Contactanos;
use Illuminate\Support\Facades\Mail;

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
             
            Route::delete('paciente/{id}/borrar','PacienteController@destroy') ->name('paciente.borrar')->where('id','[0-9]+')->middleware('role:admin,secretaria,odontologo');
            
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
    Route::get('vistamensual','CitaController@vistamensual')->middleware('role:admin,secretaria,odontologo');
    Route::get('diaria','CitaController@vistadiaria')->middleware('role:admin,secretaria,odontologo');
    });



    Route::prefix('pantallainicio/calendario')->group( function(){
      //  Route::get('{id}/odontologo','CitaController@datosver');
          Route::get('{id}/doctor','CitaController@citaodontologo')->middleware('role:admin,secretaria,odontologo');
        
        });

        Route::prefix('pantallainicio/calendario/semanal')->group( function(){
            Route::get('{id}/odontologo','CitaController@datosver')->middleware('role:admin,secretaria,odontologo');
              Route::get('{id}/doctor','CitaController@citaodontologo')->middleware('role:admin,secretaria,odontologo');
            
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
             Route::put('{id}/editar','PacienteController@update')->name('paciente.update') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria,odontologo');
            //ruta de Imagenes y Archivos
            Route::get('{id}/imagenesArchivos','ArchivoController@ver')->name('imagenesYarchivos.ver')->middleware('role:admin,odontologo');
            Route::get('{id}/nuevoarchivo','ArchivoController@nuevo')-> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
            Route::post('{id}/nuevoarchivo','ArchivoController@guardar')-> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
             //ruta de cita individual
             Route::get('{id}/citaindividual','CitaController@verCitaIndividual')->where('id','[0-9]+')->name('citaIndividual')->middleware('role:admin,odontologo,secretaria');
             /* Editar cita individual */
              Route::get('{id}/editarcitaindividual/{citaid}','CitaController@editarCitaIndividual') ->name('citaindividual.editar') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria,odontologo');
              Route::put('{id}/editarcitaindividual/{citaid}','CitaController@updatecitaindividual') ->name('citaindividual.update') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria,odontologo');
             //ruta de borrar cita individual
           // Route::delete('{id}/borrar','CitaController@destroyCita') ->name('cita.borrar')->where('id','[0-9]+');
             //ruta para crear comentarios
             Route::get('{id}/comentarios','PacienteController@comentarios') ->name('comentarios.crear')->middleware('role:admin,secretaria,odontologo');
             //ruta pra guardar comentarios
             Route::post('{id}/comentarios','PacienteController@GuardarComentario')->name('comentario.guardar')->middleware('role:admin,secretaria,odontologo');
              
             //ruta de plandetratamiento ver
              Route::get('{id}/plandetratamiento','PlanTratamientoController@ver')->name('tratamiento.ver')->middleware('role:admin,odontologo');
              //ruta de plande tratamiento nuevo
              Route::get('{id}/tratamientonuevo','PlanTratamientoController@Nuevo')->name('tratamiento.nuevo')->middleware('role:admin,odontologo');
              //ruta de guardar tratamiento
              Route::post('{id}/tratamientonuevo','PlanTratamientoController@guardar')->name('tratamiento.guardar')->middleware('role:admin,odontologo');
              //ruta de borrar tratamiento
              Route::delete('{id}/borrar','PlanTratamientoController@destroy') ->name('plandetratamiento.borrar')->where('id','[0-9]+')->middleware('role:admin,odontologo');
              //Rutas para la factura de plan de tratamiento
              Route::get('{id}/plandetratamiento/{idplantratamiento}/factura','PlanTratamientoController@factura')->name('factura.ver')->where('id','[0-9]+')->middleware('role:admin,odontologo');


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
            Route::get('buscar','PacienteController@index')->name ('paciente.buscar')->middleware('role:admin,secretaria,odontologo');
                
                     
            });
            //********* Rutas para administracion(gastos,etc)*********//
            Route::prefix('pantallainicio')->group( function(){
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar')->middleware('role:admin,secretaria,odontologo');
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

                Route::get('odontologo','OdontologoController@vistaodontologo')->middleware('role:admin,secretaria')->name('odontologo.vista');
              
                Route::get('especialidad','EspecialidadController@vistaespecialidad')->middleware('role:admin,secretaria');
                Route::get('nueva/especialidad','EspecialidadController@nuevaespecialidad')->middleware('role:admin,secretaria');
                Route::post('nueva/especialidad','EspecialidadController@GuardarNuevo')->middleware('role:admin,secretaria');

              });

                //********* Rutas para Logotipo*********//
                Route::prefix('pantallainicio/logotipo')->group( function(){
                Route::get('buscar','PacienteController@index')->name ('paciente.buscar')->middleware('role:admin,secretaria');
                ///////////////////logotipo///////////////////
                Route::get('ver','LogotipoController@ver')->name('logotipo.ver')->middleware('role:admin,secretaria');
                /* Ruta para crear logotipo */
                Route::post('logotipo','LogotipoController@subirArchivo')->name('logotipo.guardar')->middleware('role:admin');
                Route::get('/editar','LogotipoController@editar') ->name('logotipo.editar') -> where('id' ,'[0-9]+')->middleware('role:admin');
                /* Ruta para guardar la edicionlogo */
                Route::put('{/editar','LogotipoController@update')->name('logotipo.update') -> where('id' ,'[0-9]+')->middleware('role:admin');
                /* Ruta para borrar logotipo */
                Route::delete('{id}/borrar','LogotipoController@borrarlogotipo') ->name('logotipo.borrar')->where('id','[0-9]+')->middleware('role:admin');
        });

        //**************Rutas de  usuarios******************/
        Route::prefix('pantallainicio/')->group( function(){
          Route::get('buscar','PacienteController@index')->name ('paciente.buscar');
          Route::get('usuarios/ver','UsuarioController@ver')->name('usuarios.indice')->middleware('role:admin');
          Route::get('usuarios/nuevo','UsuarioController@nuevo')->name('usuario.nuevo')->middleware('role:admin');
          Route::post('usuarios/guardar','UsuarioController@guardar')->name('usuario.guardar')->middleware('role:admin');
          Route::get('{id}/verusuario','UsuarioController@verusuario')->name('usuario.verusuario') -> where('id' ,'[0-9]+')->middleware('role:admin');
          Route::get('usuarios/{id}/editar','UsuarioController@editar') ->name('usuario.editar') -> where('id' ,'[0-9]+')->middleware('role:admin');
          Route::put('usuarios/{id}/editar','UsuarioController@actualizar') ->name('usuario.actualizar') -> where('id' ,'[0-9]+')->middleware('role:admin');
          Route::delete('usuarios/{id}/borrar','UsuarioController@borrar') ->name('usuario.borrar')->where('id','[0-9]+')->middleware('role:admin');

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
              
Route::get('odontologo/nuevo','OdontologoController@nuevoodontologo')->middleware('role:admin,secretaria');
Route::post('odontologo/nuevo','OdontologoController@GuardarNuevo')->middleware('role:admin,secretaria');
Route::get('/{id}/editar/odontologo','OdontologoController@editarodontologo') ->name('odontologo.editar') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria');
Route::put('/{id}/editar/odontologo','odontologoController@updateodontologo')->name('odontologo.update') -> where('id' ,'[0-9]+')->middleware('role:admin,secretaria');
Route::delete('{id}/borrar/odontologo','OdontologoController@destroy') ->name('odontologo.borrar')->where('id','[0-9]+')->middleware('role:admin,secretaria');


        
//**************Rutas de  tratamientos******************************************************************/
Route::get('tratamiento','TratamientoController@vistaprincipal')->name('tratamiento.vista')->middleware('role:admin,odontologo,secretaria');
Route::get('tratamientonuevo','TratamientoController@nuevo');
Route::post('tratamientoNuevo','TratamientoController@guardar')->middleware('role:admin,odontologo');
Route::delete('tratamiento/{id}/borrar','TratamientoController@destroy') ->name('tratamiento.borrar')->where('id','[0-9]+')->middleware('role:admin,odontologo');
Route::get('{id}/editar','TratamientoController@editar') ->name('tratamiento.editar') -> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
Route::put('{id}/editar','TratamientoController@update')->name('tratamiento.update') -> where('id' ,'[0-9]+');


//**************Rutas de  Productos******************/
Route::get('/tratamiento/{id}/producto','ProductosController@datos')->name('productos.datos')->where('id', '[0-9]+')->middleware('role:admin,odontologo');
Route::get('tratamiento/{id}/producto/editar','ProductosController@editar') ->name('producto.editar') -> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
Route::put('tratamiento/{id}/producto/editar','ProductosController@update')->name('producto.update') -> where('id' ,'[0-9]+')->middleware('role:admin,odontologo');
Route::get('/tratamiento/{id}/producto/nuevo','ProductosController@nuevo')->name('producto.nuevo') -> where('id' ,'[0-9]+');
Route::post('/tratamiento/{id}/producto/Nuevo','ProductosController@guardar')->middleware('role:admin,odontologo');
Route::delete('tratamiento/{id}/producto/borrar','ProductosController@destroy') ->name('producto.borrar')->where('id','[0-9]+')->middleware('role:admin,odontologo');


Route::get('pantallainicio/{id}/especialidades','EspecialidadController@VistaEspecial')->where('id','[0-9]+')->name('especialidades')->middleware('role:admin,secretaria');
Route::get('{id}/evoluciones','EvolucionesController@EvolucionesPaciente')->where('id','[0-9]+')->name('paciente.evoluciones')->middleware('role:admin,odontologo');
Route::get('especialidad/nueva','EspecialidadOdontologosController@especialidadOdontologo')->middleware('role:admin,secretaria');
Route::post('especialidad/nueva','EspecialidadOdontologosController@GuardarNuevo')->middleware('role:admin,secretaria');

Route::get('pantallainicio/odontologo/{id}','EspecialidadOdontologosController@EspecialidadesOdontologo')->where('id','[0-9]+')->name('odontologo.especialidad')->middleware('role:admin,secretaria');


//**************Rutas de  inventarios******************/
Route::get('inventario','InventarioController@vistaprincipal')->middleware('role:admin,secretaria,odontologo');
Route::delete('inventario/{id}/borrar','InventarioController@destroy') ->name('inventario.borrar')->where('id','[0-9]+')->middleware('role:secretaria,admin');
Route::post('inventarioNuevo','InventarioController@guardar')->middleware('role:admin,secretaria');
Route::get('inventarionuevo','InventarioController@nuevo');
Route::get('inventario/{id}/editar','InventarioController@editar') ->name('inventario.editar') -> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');
Route::put('inventario/{id}/editar','InventarioController@update')->name('inventario.update') -> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');

//**************Rutas de  medios de pago******************/
Route::get('/pantallainicio/mediopago','MediodepagoController@vistaprincipal')->middleware('role:admin,secretaria');
Route::delete('mediopago/{id}/borrar','MediodepagoController@destroy') ->name('mediopago.borrar')->where('id','[0-9]+')->middleware('role:secretaria,admin');
Route::post('mediopagoNuevo','MediodepagoController@guardar')->middleware('role:admin,secretaria');
Route::get('mediopagonuevo','MediodepagoController@nuevo');
Route::get('mediopago/{id}/editar','MediodepagoController@editar') ->name('mediopago.editar') -> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');
Route::put('mediopago/{id}/editar','MediodepagoController@update')->name('mediopago.update') -> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');



Route::get('evolucion/nueva/{id}','EvolucionesController@nuevaevolucion')->name('evolucion.nueva') -> where('id' ,'[0-9]+');;





//Rutas para el login(Autenticación)
Auth::routes();






Route::get('/home', 'HomeController@index')->name('home');


//ruta para editar Horario Odontologo
//Route::get('editarHorario','OdontologoController@editarHorario')->name('editar.horario');
Route::get('create/{id}/nuevo','HorarioController@create')-> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');
Route::post('create/{id}/nuevo','HorarioController@store')-> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');




Route::post('odontologo/nuevo','OdontologoController@GuardarNuevo')->middleware('role:admin,secretaria');
Route::get('horario/{id}/editar','OdontologoController@editarHorario') ->name('horario.editar') -> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');
Route::put('horario/{id}/editar','OdontologoController@editarHorario')->name('horario.update') -> where('id' ,'[0-9]+')->middleware('role:secretaria,admin');







//ruta para pdf 
route::get('/pdf','PDFController@PDF')->name('descargarPDF');
route::get('/pdfpacientes','PDFController@PDFPacientes')->name('descargarPDFPacientes');

//ruta para la vista recaudaciones

route::get('/pantallainicio/vista/paciente/{id}/VistaRecaudacionesD','RecaudacionesController@VistaRecaudacionesD');

/*Route::get('/contactos',function(){


  $correo= new Contactanos;
  Mail::to('geopaomarmor1325@gmail.com')->send($correo);

  return "mensaje Enviado";

}); */




//Password Reset Routes...


/*Route::get('passwords/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('passwords/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('passwords.emails');

Route::get('passwords/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('passwords.reset');
Route::post('passwords/reset', 'Auth\ResetPasswordController@reset')->name('passwords.sed');  */