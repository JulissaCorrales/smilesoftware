<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Odontologo;
use App\EspecialidadOdontologos;
use DispatchesJobs, ValidatesRequests;
use Illuminate\Support\Facades\Gate;
use App\Mail\Contactanos;
use Illuminate\Support\Facades\Mail;


use App\Dias;
use App\Horario;

class OdontologoController extends Controller
{
    

    public function vistaodontologo(){
        //return "texto de contacto desde el controlador ";
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){

        $odontologos=Odontologo::paginate(4);
        $especialidad_odontologos= EspecialidadOdontologos::all();
        return view('Odontologo')->with ('odontologos',$odontologos);

        }else{
            abort(403);
        }
     } 


     public function nuevoodontologo(){
        $this->authorize('create', Odontologo::class); //si tiene el permiso de crear: 
        return view('nuevoDoctor');  
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
        $nuevo->email = $request->input('email');
        $nuevo->departamento = $request->input('departamento');
        $nuevo->ciudad = $request->input('ciudad');
        $nuevo->direccion = $request -> input('direccion');
        $nuevo->especialidad_id = $request->input('especialidad');
        $nuevo->intervalos = $request->input('intervalo');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/Imagenes/',$image);
            $nuevo->imagen= $image;
        
        }
        
        
        $request->validate(['nombres'=>'required',
        'apellidos'=>'required|alpha',
        
        'identidad'=>'required|unique:odontologos,identidad',
        'departamento'=>'required',
        'ciudad'=>'required',
        'telefonoCelular'=>'required|numeric',
        'direccion'=>'required|',
        ]);
       $creado = $nuevo->save();





       if ($creado){
            return redirect('/pantallainicio/odontologo')->with('mensaje', 'El Odontologo fué creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }




    public function editarodontologo($id){
        $odontologos = Odontologo::findOrFail($id);
        $this->authorize('update',$odontologos); //si tiene el permiso de editar: 
        return view('FormularioOdontologo')->with('odontologos',$odontologos);
    }

    public function updateodontologo(Request $_request,$id){
        $odontologos = Odontologo::findOrFail($id);
        $this->authorize('update',$odontologos); //si tiene el permiso de editar:

        $odontologos->nombres = $_request->input('nombres');
        $odontologos->apellidos = $_request->input('apellidos');
        $odontologos->identidad = $_request->input('identidad');
        $odontologos->telefonoCelular = $_request->input('telefonoCelular');
        $odontologos->telefonoFijo = $_request->input('telefonoFijo');
        $odontologos->email = $_request->input('email');
        $odontologos->departamento = $_request->input('departamento');
        $odontologos->ciudad = $_request->input('ciudad');
        $odontologos->direccion = $_request -> input('direccion');
        $odontologos->especialidad_id= $_request->input('especialidad');
        $odontologos->intervalos = $_request->input('intervalo');
        
        if ($_request->hasFile('file')) {
            $file = $_request->file('file');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/Imagenes/',$image);
            $odontologos->imagen= $image;
        
        }

        $create = $odontologos->save();

        
        if($create){
            return redirect('/pantallainicio/odontologo')->with('mensaje','El Odontologo ha sido modifcado exitosamente');
        }else{
            //error
        }
        //validar
        $_request->validate(['nombres'=>'required|alpha',
        'apellidos'=>'required|alpha',
        'identidad'=>'required|unique:odontologos,identidad',
        'departamento'=>'required|alpha',
        'ciudad'=>'required',
        'telefonoCelular'=>'required|numeric',
        'direccion'=>'required|',
        ]);
    }

    public function destroy($id){

        if(Gate::denies('isAdmin')){
            abort(403);
         }
        Odontologo::destroy($id);
        return redirect('/pantallainicio/odontologo')->with('mensaje','Odontologo borrado satisfactoriamente');
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
