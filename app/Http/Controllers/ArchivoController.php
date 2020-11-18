<?php

namespace App\Http\Controllers;
use App\Paciente;
use App\Archivo; 
use Carbon\Carbon;


use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function ver($id){
        $pacientes = Paciente::findOrFail($id);
        return view('imagenesYarchivos',compact('pacientes'));
    }

    public function nuevo($id){
        $pacientes = Paciente::findOrFail($id);
        return view('formularioImagenesYarchivos',compact('pacientes'));
    }

    

    public function guardar(Request $request,$id){
        
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $name = time().$file->getClientOriginalName();
            $file->move(\public_path().'/images/',$name);
        }
        $imagen = new Archivo();
        $imagen->paciente_id=$id;
        $imagen->fecha = Carbon::now();
        $imagen ->imagen = $name;
        $imagen->observaciones=$request->input('observaciones');
        $imagen->odontologo_id=$request->input('odontologo_id');
        $creado= $imagen->save();
        if ($creado){
           
         return redirect()->back()->with('mensaje','Archivo guardado exitosamente');

          //return redirect()('/comentarios/{id}');
       } 


    }
    public function borrar($id){
        Archivo::destroy($id);
        return redirect()->back()->with('mensaje','archivo borrado satisfactoriamente');
    }
}