<?php

namespace App\Http\Controllers;
use App\Paciente;
use App\Archivo; 


use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function ver($id){
        $pacientes = Paciente::findOrFail($id);
        return view('imagenesYarchivos',compact('pacientes'));
    }

    public function nuevo(){
        return view('formularioImagenesYarchivos');
    }

    

    public function guardar(Request $request){
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(\public_path().'/images/',$name);
        }
        $imagen = new Archivo();
        $imagen ->$name = $request->input('name');
        $imagen ->imagen = $name;
        $imagen -> save();
    }
}
