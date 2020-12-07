<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Plantratamiento;
use App\Cita;
use App\Comentario;
use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
   //Paciente vista solo acceso admin,secretario,odontologo
    public function vistapaciente(){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria') || Gate::denies('isOdontologo')){
        $pacientes=Paciente::All();
        return view('vistapaciente')->with ('pacientes',$pacientes);
        }
     } 


    //Nuevo Paciente acceso el admin y la secretaria
    public function nuevo(){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        return view('nuevopaciente');
            }
    }
     //Vista de Paciente acceso admin ,odontologo,secretaria
     /*
    public function vistaprincipal(){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria') || Gate::denies('isOdontologo')){
        $pacientes = Paciente::findOrFail();
        return view('Plantilla.Plantilla')->with('pacientes',$pacientes);
        }
    } */


    //Fichero Paciente acceso admin,secretaria,odontologo
    public function datosVer($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo') || Gate::denies('isSecretaria')){
        $pacientes = Paciente::findOrFail($id);
        return view('datospersonales')->with('pacientes',$pacientes);
        }
    }

    //Editar el paciente acceso solo el admin y secretaria

    public function editar($id){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        $pacientes = Paciente::findOrFail($id);
        return view('FormularioEditarPaciente')->with('pacientes',$pacientes);
        }
    }


    //actualizar Paciente acceso  solo el admin y secretaria

    public function update(Request $_request,$id){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        
        $pacientes = Paciente::findOrFail($id);

        $pacientes->nombres=$_request->input('nombres');
        $pacientes->apellidos=$_request->input('apellidos');
        $pacientes->identidad=$_request->input('identidad');
        $pacientes->sexo=$_request->input('sexo');
        $pacientes->fechaNacimiento=$_request->input('fechaNacimiento');
        $pacientes->departamento=$_request->input('departamento');
        $pacientes->ciudad=$_request->input('ciudad');
        $pacientes->direccion=$_request->input('direccion');
        $pacientes->telefonoFijo=$_request->input('telefonoFijo');
        $pacientes->telefonoCelular=$_request->input('telefonoCelular');
        $pacientes->profesion=$_request->input('profesion');
        $pacientes->empresa=$_request->input('empresa');
        $pacientes->observaciones=$_request->input('observaciones');

        $create = $pacientes->save();
        if($create){
            return redirect('/pantallainicio/vista')->with('mensaje','El paciente ha sido modifcado exitosamente');
        }else{

        }
           
        }
    
        //validar
        $_request->validate([     'nombres'=>'required',
        'apellidos'=>'required',
        'identidad'=>'required|unique:pacientes,identidad',
        'sexo'=>'required',
        'fechaNacimiento'=>'required',
        'departamento'=>'required',
        'ciudad'=>'required',
        'direccion'=>'required',
        'telefonoFijo'=>'required',
        'telefonoCelular'=>'required',
        'profesion'=>'required',
        'empresa'=>'required',
        'observaciones'=>'required'

        ]);

    }

   //Guardar Paciente solo el admin y secretaria
    public function guardar(Request $request){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'identidad'=>'required|unique:pacientes,identidad',
            'sexo'=>'required',
            'fechaNacimiento'=>'required',
            'departamento'=>'required',
            'ciudad'=>'required',
            'direccion'=>'required',
            'telefonoFijo'=>'required',
            'telefonoCelular'=>'required',
            'profesion'=>'required',
            'empresa'=>'required',
            'observaciones'=>'required'
        ]);

        $nuevoPaciente = new Paciente();

        //formulario
        $nuevoPaciente->nombres = $request->input('nombres');
        $nuevoPaciente->apellidos = $request->input('apellidos');
        $nuevoPaciente->identidad = $request->input('identidad');
        $nuevoPaciente->sexo = $request->input('sexo');
        $nuevoPaciente->fechaNacimiento = $request -> input('fechaNacimiento');
        $nuevoPaciente->departamento = $request->input('departamento');
        $nuevoPaciente->ciudad = $request->input('ciudad');
        $nuevoPaciente->direccion = $request -> input('direccion');
        $nuevoPaciente->telefonoFijo = $request->input('telefonoFijo');
        $nuevoPaciente->telefonoCelular = $request->input('telefonoCelular');
        $nuevoPaciente->profesion = $request->input('profesion');
        $nuevoPaciente->empresa = $request -> input('empresa');
        $nuevoPaciente->observaciones = $request->input('observaciones');
    
       $creado = $nuevoPaciente->save();

         if ($creado){
            return redirect('/pantallainicio/vista')->with('mensaje', 'el paciente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
    }

    //funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        Paciente::destroy($id);
        Cita::where('paciente_id','=',$id)->delete();
        return redirect()->back()->with('mensaje','Paciente borrado satisfactoriamente');


       
    }


    /*
    public function GuardarNuevo(Request $request){
        $request->validate([
            'nombres'=>'required',
            'apellidos'=>'required',
            'identidad'=>'required|unique:pacientes,identidad',
            'sexo'=>'required',
            'fechaNacimiento'=>'required',
            'departamento'=>'required',
            'ciudad'=>'required',
            'direccion'=>'required',
            'telefonoFijo'=>'required',
            'telefonoCelular'=>'required',
            'profesion'=>'required',
            'empresa'=>'required',
            'observaciones'=>'required'
        ]);

        $nuevoPaciente = new Paciente();

        //formulario
        $nuevoPaciente->nombres = $request->input('nombres');
        $nuevoPaciente->apellidos = $request->input('apellidos');
        $nuevoPaciente->identidad = $request->input('identidad');
        $nuevoPaciente->sexo = $request->input('sexo');
        $nuevoPaciente->fechaNacimiento = $request -> input('fechaNacimiento');
        $nuevoPaciente->departamento = $request->input('departamento');
        $nuevoPaciente->ciudad = $request->input('ciudad');
        $nuevoPaciente->direccion = $request -> input('direccion');
        $nuevoPaciente->telefonoFijo = $request->input('telefonoFijo');
        $nuevoPaciente->telefonoCelular = $request->input('telefonoCelular');
        $nuevoPaciente->profesion = $request->input('profesion');
        $nuevoPaciente->empresa = $request -> input('empresa');
        $nuevoPaciente->observaciones = $request->input('observaciones');
        

       $creado = $nuevoPaciente->save();

         if ($creado){
            return redirect('/pantallainicio/vista')->with('mensaje', 'el paciente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }
    */

    
        // Configuracion del Buscador Principal acceso al admin.secretaria,odontologo
                public function index(Request $request){
            if(Gate::denies('isAdmin') || Gate::denies('isSecretaria') || Gate::denies('isOdontologo')){
        
                if($request){
                $query= trim($request->get('buscarpor'));
                $pacientes =Paciente::where('nombres','LIKE','%'. $query .'%')->orderBy('id','asc')->get();
                return view('Buscarpaciente',['pacientes' => $pacientes ,' buscarpor '=> $query] );

                }
           }
        
        }

      // Crear comentario acceso al admin y al secretario
        public function comentarios($id){
            if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
            //$comentarios= Comentarios::All();
            //return "texto de contacto desde el controlador ";
            $pacientes = Paciente::findOrFail($id);
            return view('comentarios')->with('pacientes',$pacientes);
         }

        }  
    
         //Guardar Comentario acceso al admin y a la secretaria
         public function GuardarComentario(Request $request,$id){
            if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
            $paciente=Paciente::findOrFail($id);

            $nuevocomentario = new Comentario();
            $nuevocomentario->paciente_id= $id;
            $nuevocomentario->comentarios= $request->input('caja');
            $creado= $nuevocomentario->save();
             if ($creado){
                
              return redirect()->back()->with('mensaje','Comentario Administrativo guardado exitosamente');
    
               //return redirect()('/comentarios/{id}');
            } 

        }
        }
        
       
    

     

}
