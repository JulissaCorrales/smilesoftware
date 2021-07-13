<?php

namespace App\Http\Controllers;
use App\Paciente;
use App\Archivo; 
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;


use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function ver($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){

        $pacientes = Paciente::findOrFail($id);
        return view('imagenesYarchivos',compact('pacientes'));
        
        }else{
            abort(403);
        }
    }

    // public function nuevo($id){
    //     $this->authorize('create', Archivo::class);
    //     $pacientes = Paciente::findOrFail($id);
    //     return view('formularioImagenesYarchivos',compact('pacientes'));
    // }

    

    public function guardar(Request $request,$id){
        $this->authorize('create', Archivo::class);
           $request->validate([
            'imagen'=>'required',
            'observaciones'=>'required',
            'odontologo_id'=>'required',
        
        ]);
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
        $imagen=Archivo::findOrFail($id);
        $this->authorize('delete',$imagen);

        Archivo::destroy($id);
        return redirect()->back()->with('mensaje','archivo borrado satisfactoriamente');


    }

    public function editar($id , $idarchivo){  
        $pacientes=Paciente::findOrFail($id);
        $imagen=Archivo::findOrFail($idarchivo);
        $this->authorize('update',$imagen);
        
        return view('editararchivo')->with('imagen',$imagen)->with('pacientes',$pacientes);
    
    }

    public function update(Request $_request,$id, $idarchivo){
           $_request->validate([
            'imagen'=>'required',
            'observaciones'=>'required',
            'odontologo_id'=>'required',
        
        ]);
        if ($_request->hasFile('imagen')) {
            $file = $_request->file('imagen');
            //obtenemos el nombre del archivo
            $image =  time()." ".$file->getClientOriginalName();
            //indicamos que queremos guardar un nuevo archivo en el disco local
            $file->move(\public_path().'/images/',$image);


          
        
        }

        $pacientes=Paciente::findOrFail($id);
        $imagenes=Archivo::findOrFail($idarchivo);
        $this->authorize('update',$imagenes);
        $imagenes->paciente_id=$id;
        $imagenes->fecha = Carbon::now();
        $imagenes->imagen= $image;
        $imagenes->observaciones=$_request->input('observaciones');
        $imagenes->odontologo_id=$_request->input('odontologo_id');
        


    

        $creado= $imagenes->save();
        if ($creado){
           
         return redirect()->back()->with('mensaje','Archivo guardado exitosamente');

          //return redirect()('/comentarios/{id}');
       } 


        }
    
    
    }



   



