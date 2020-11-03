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
            return redirect('/pantallainicio/odontologo')->with('mensaje', 'el paciente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        } 
    }

}
