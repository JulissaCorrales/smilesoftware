<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function nuevo(){
        return view('tipoPaciente');
    }

    public function guardar(Request $request){

        $nuevoPaciente = new Paciente();

        //formulario
        $nuevoPaciente->nombres = $request->input('nombres');
        $nuevoPaciente->apellidos = $request->input('apellidos');
        $nuevoPaciente->identidad = $request->input('identidad');
        $nuevoPaciente->sexo = $request->input('sexo');
        $nuevoPaciente->fecha_nacimiento = $request -> input('fecha_de_nacimiento');
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
            return redirect()->route('pantallainiciomenuagenda')
                ->with('mensaje', 'el paciente fue creado exitosamente!');
        }else{
            //retornar con un msj de error
        }
    }

    public function vistapaciente(){
        //return "texto de contacto desde el controlador ";
        return view('vistapaciente');
     } 

     public function nuevopaciente(){
        //return "texto de contacto desde el controlador ";
        return view('nuevopaciente');
     }
}
