<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function nuevo(){
        return view('tipoPaciente');
    }


    public function datos(){
        return view('datospersonales');
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
            'observaciones'=>'required',
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

    public function vistapaciente(){
        //return "texto de contacto desde el controlador ";
        $pacientes=Paciente::All();
        return view('vistapaciente')->with ('pacientes',$pacientes);
     } 

     public function nuevopaciente(){
        //return "texto de contacto desde el controlador ";
        return view('nuevopaciente');
     }
}
