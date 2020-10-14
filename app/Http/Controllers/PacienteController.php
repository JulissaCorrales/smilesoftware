<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function nuevo(){
        return view('nuevopaciente');
    }

    public function vistaprincipal(){
        $pacientes = Paciente::findOrFail();
        return view('Plantilla.Plantilla')->with('pacientes',$pacientes);;
    }


    public function datosVer($id){
        $pacientes = Paciente::findOrFail($id);
        return view('datospersonales')->with('pacientes',$pacientes);

    }


    public function editar($id){
        $pacientes = Paciente::findOrFail($id);
        return view('FormularioEditarPaciente')->with('pacientes',$pacientes);

    }


    public function update(Request $_request,$id){
        
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
            return redirect()->route('paciente.vista')->with('mensaje','El paciente ha sido modifcado exitosamente');
        }else{
          
          
            //error
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


    

    public function guardar(Request $request){
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
            return redirect()->route('paciente.vista')
                ->with('mensaje', 'el paciente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }


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
            return redirect()->route('paciente.vista')->with('mensaje', 'el paciente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }

    public function vistapaciente(){
        //return "texto de contacto desde el controlador ";
        $pacientes=Paciente::All();
        return view('vistapaciente')->with ('pacientes',$pacientes);
     } 

     public function nuevopaciente(){
        //return "texto de contacto desde el controlador ";
        return view('nuevopaciente');
     }

     //funcion para eliminar
    // recibe el id del que se va eliminar
    public function destroy($id){
        Paciente::destroy($id);
        //rediccionar a la pagina index
        return redirect('/paciente/vista')->with('mensaje','Paciente borrado satisfactoriamente');
    }

// Configuracion del Buscador Principal
     public function index(Request $request){
        if($request){
            $query= trim($request->get('buscarpor'));
            $pacientes =Paciente::where('nombres','LIKE','%'. $query .'%')->orderBy('id','asc')->get();
            return view('Buscarpaciente',['pacientes' => $pacientes ,' buscarpor '=> $query] );

        }
        
        }
        
       
    

     

}
