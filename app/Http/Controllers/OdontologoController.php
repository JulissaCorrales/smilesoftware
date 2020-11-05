<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Odontologo;

class OdontologoController extends Controller
{
    

    public function vistaodontologo(){
        //return "texto de contacto desde el controlador ";
        $odontologos=Odontologo::All();
        return view('Odontologo')->with ('odontologos',$odontologos);
     } 


     public function nuevoodontologo(){
        //return "texto de contacto desde el controlador ";
        return view('nuevoDoctor');
     }
    

     public function GuardarNuevo(Request $request){
        

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
        $nuevo->especialidad = $request->input('especialidad');
        $nuevo->intervalos = $request->input('intervalo');
        
        

       $creado = $nuevo->save();

         if ($creado){
            return redirect('/pantallainicio/odontologo')->with('mensaje', 'El Odontologo fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }




    public function editarodontologo($id){
        $odontologos = Odontologo::findOrFail($id);
        return view('FormularioOdontologo')->with('odontologos',$odontologos);

    }

    public function updateodontologo(Request $_request,$id){
        
        $odontologos = Odontologo::findOrFail($id);

        $odontologos->nombres = $_request->input('nombres');
        $odontologos->apellidos = $_request->input('apellidos');
        $odontologos->identidad = $_request->input('identidad');
        $odontologos->telefonoCelular = $_request->input('telefonoCelular');
        $odontologos->telefonoFijo = $_request->input('telefonoFijo');
        $odontologos->email = $_request->input('email');
        $odontologos->departamento = $_request->input('departamento');
        $odontologos->ciudad = $_request->input('ciudad');
        $odontologos->direccion = $_request -> input('direccion');
        $odontologos->especialidad = $_request->input('especialidad');
        $odontologos->intervalos = $_request->input('intervalo');

        $create = $odontologos->save();

        
        if($create){
            return redirect('/pantallainicio/odontologo')->with('mensaje','El Odontologo ha sido modifcado exitosamente');
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
    public function destroy($id){
        Odontologo::destroy($id);
        return redirect()->back()->with('mensaje','Odontologo borrado satisfactoriamente');


       
    }


}
