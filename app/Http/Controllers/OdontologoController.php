<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Odontologo;
use App\Especialidad;
use DispatchesJobs, ValidatesRequests;
use Illuminate\Support\Facades\Gate;
use App\Mail\Contactanos;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;


use App\Dias;
use App\Horario;

class OdontologoController extends Controller
{
    

    public function vistaodontologo(){
        //return "texto de contacto desde el controlador ";
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){

        $odontologos=Odontologo::all();
        $especialidades= Especialidad::all();
        //$especialidad_odontologos= EspecialidadOdontologos::all();
        return view('Odontologo')->with ('odontologos',$odontologos)->with('especialidades',$especialidades);

        }else{
            abort(403);
        }
     } 



     public function GuardarNuevo(Request $request){
        $this->authorize('create', Odontologo::class); //si tiene el permiso de crear: 
        $nuevo = new Odontologo();
        
        //formulario
        $nuevo->nombres = $request->input('nombres');
        $nuevo->apellidos = $request->input('apellidos');
        $nuevo->identidad = $request->input('identidad');
        $nuevo->telefonoCelular = $request->input('telefonoCelular');
        $nuevo->telefonoFijo = $request->input('telefonoFijo');
        $nuevo->departamento = $request->input('departamento');
        $nuevo->ciudad = $request->input('ciudad');
        $nuevo->direccion = $request -> input('direccion');
       // $nuevo->especialidad_id = $request->input('especialidad');
        $nuevo->user_id = $request->input('user_id');


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/Imagenes/',$image);
            $nuevo->imagen= $image;
        
        }
      
        
        $request->validate(['nombres'=>'required||regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)|max:65',
        'apellidos'=>'required||regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)|max:65',
        'identidad' => ['required', 'numeric', Rule::unique('odontologos')->ignore($nuevo->id), 'digits:13'],

        'departamento'=>'required||regex:/^[\pL\s\-]+$/u',
        'ciudad'=>'required||regex:/^[\pL\s\-]+$/u',
       
        'telefonoCelular'=>'required|numeric|digits:8',
        'direccion'=>'required|',
        'user_id'=>'required|unique:App\Odontologo'
        ]);
       $creado = $nuevo->save();
          

     
    
     /*     $listOfPermissions = explode(',',  $request->especialidad_odontologo); //crear matriz a partir de permisos separados/coma
        
         
        foreach ($listOfPermissions as  $permiso) {
             $permisos= new Especialidad();
             $permisos->Especialidad= $permiso;
            
             $permisos->save();

             $nuevo->especialidades()->attach($permisos->id);
             $nuevo->save();
        }    
*/

    if($request->especialidades != null){            
        foreach ($request->especialidades as $especialidad) {
            $nuevo->especialidades()->attach($especialidad);
            $nuevo->save();
        }
    }
 


    



       if ($creado){
            return redirect('/pantallainicio/odontologo')->with('mensaje', 'El Odontólogo fué creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }




    public function updateodontologo(Request $_request,$id){
        $odontologos = Odontologo::findOrFail($id);
        $this->authorize('update',$odontologos); //si tiene el permiso de editar:
        $odontologos->nombres = $_request->input('nombres');
        $odontologos->apellidos = $_request->input('apellidos');
        $odontologos->identidad = $_request->input('identidad');
        $odontologos->telefonoCelular = $_request->input('telefonoCelular');
        $odontologos->telefonoFijo = $_request->input('telefonoFijo');
        $odontologos->departamento = $_request->input('departamento');
        $odontologos->ciudad = $_request->input('ciudad');
        $odontologos->direccion = $_request -> input('direccion');
        //$odontologos->especialidad_id= $_request->input('especialidad');
        $odontologos->user_id = $_request->input('user_id');
        
        if ($_request->hasFile('file')) {
            $file = $_request->file('file');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/Imagenes/',$image);
            $odontologos->imagen= $image;
        
        }
        //validar
        $_request->validate(['nombres'=>'required||regex:/^[\pL\s\-]+$/u|max:255',
        'apellidos'=>'required||regex:/^[\pL\s\-]+$/u|max:255',
        'identidad' => ['required','digits:13','numeric', Rule::unique('odontologos')->ignore($odontologos->id)],
        'departamento'=>'required|regex:/^[\pL\s\-]+$/u',
        'ciudad'=>'required|regex:/^[\pL\s\-]+$/u',
        
        'telefonoCelular'=>'required|numeric|digits:8',
        'direccion'=>'required|',
        'user_id' => ['required', Rule::unique('odontologos')->ignore($odontologos->id)]
        ]);
            
    
      // $odontologos->especialidades()->delete();
     // $odontologos->especialidades()->detach();

        //$listOfPermissions = explode(',',  $_request->especialidades); //crear matriz a partir de permisos separados/coma
        
         
       /* foreach ($listOfPermissions as  $permiso) {
             $especialidad= new Especialidad();
             $especialidad->Especialidad= $permiso;
             $especialidad->save();
             $odontologos->especialidades()->attach($especialidad->id);
             $create = $odontologos->save();
        }   */

     
    if($_request->especialidades != null){            

  
          $odontologos->especialidades()->sync($_request->especialidades);
            $odontologos->save();

    }





        $create = $odontologos->save();

        if($create){
            return redirect('/pantallainicio/odontologo')->with('mensaje','El Odontólogo ha sido modificado correctamente');
        }else{
            //error
        }
    
    }
    public function destroy($id){

        if(Gate::denies('isAdmin')){
            abort(403);
         }
        Odontologo::destroy($id);
        return redirect('/pantallainicio/odontologo')->with('mensaje','El Odontólogo ha sido  borrado correctamente');
    }



    

    

    public function updateHorario(Request $_request,$id){
        
        
        
        $horario = Horario::All();
        $odontologos = Odontologo::findOrFail($id);

        $horario->dia_id = $_request->input('hoini');
        $horario->odontologo_id= $id;
        $horario->HoraInicio= $_request->input('hoini');
        $horario->HoraFinal= $_request->input('hofin');
        $horario->Descanso= $_request->input('descanso');
        $horario->DescansoInicial= $_request->input('descaini');
        $horario->DescansoFinal= $_request->input('descfin');

        $create = $horario->save();

        
        if($create){
            return redirect('/pantallainicio/odontologo')->with('mensaje','El Odontologo ha sido modifcado exitosamente');
        }else{
          
          
            //error
        }
        
        
    }

    public function enviar(){
        $correo= new Contactanos;
        
        Mail::to('geopaomarmor1325@gmail.com')->send($correo);

        return "mensaje Enviado";


    }


    public function login(){
        return View('auth.passwords.iniciar');


    }


    public function nu(){
        return View('auth.passwords.georgina');


    }



}
