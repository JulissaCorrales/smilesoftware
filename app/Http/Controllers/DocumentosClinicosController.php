<?php

namespace App\Http\Controllers;
use App\Paciente;
use App\Documento; 
use Carbon\Carbon;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DocumentosClinicosController extends Controller
{
    public function ver($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
        $pacientes = Paciente::findOrFail($id);
        return view('documentosclinicos',compact('pacientes'));
    }else{
        abort(404);
    }
    }
    public function nuevo($id){
        $this->authorize('create', Documento::class);
        $pacientes = Paciente::findOrFail($id);
        return view('formularioDocumentos',compact('pacientes'));
    }
    public function guardar(Request $request,$id){
        $this->authorize('create', Documento::class);

        $request->validate([
            'odontologo_id'=>'required',
            'observaciones'=>'required',
            'imagen1'=>'required',]);
            
        if($request->hasFile('imagen1')){
            $file = $request->file('imagen1');
            $name = time().$file->getClientOriginalName();
            $file->move(\public_path().'/documento/',$name);
        }
        $imagen1 = new Documento();
        $imagen1->paciente_id=$id;
        $imagen1->fecha = Carbon::now();
        $imagen1 ->imagen1 = $name;
        $imagen1->observaciones=$request->input('observaciones');
        $imagen1->odontologo_id=$request->input('odontologo_id');
        $creado= $imagen1->save();
        if ($creado){
           
         return redirect()->back()->with('mensaje','Archivo guardado exitosamente');

          //return redirect()('/comentarios/{id}');
       } 


    }

    public function editar($id , $iddocumento){  
        $pacientes=Paciente::findOrFail($id);
       $imagen=Documento::findOrFail($iddocumento);
       return view('editarDocumento')->with('imagen',$imagen)->with('pacientes',$pacientes);
   
   }

   public function update(Request $_request,$id, $iddocumento){

    if ($_request->hasFile('imagen')) {
        $file = $_request->file('imagen');
        //obtenemos el nombre del archivo
        $image =  time()." ".$file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        $file->move(\public_path().'/documento/',$image);


      
    
    }

    $pacientes=Paciente::findOrFail($id);
    $imagenes=Documento::findOrFail($iddocumento);
    $imagenes->paciente_id=$id;
    $imagenes->fecha = Carbon::now();
    $imagenes->imagen1= $image;
    $imagenes->observaciones=$_request->input('observaciones');
    $imagenes->odontologo_id=$_request->input('odontologo_id');
    




    $creado= $imagenes->save();
    if ($creado){
       
     return redirect()->back()->with('mensaje','Archivo clinico guardado exitosamente');

      //return redirect()('/comentarios/{id}');
   } 


    }

    public function borrar($id){
        $imagen=Documento::findOrFail($id);
        $this->authorize('delete',$imagen);

        Documento::destroy($id);
        return redirect()->back()->with('mensaje','archivo borrado satisfactoriamente');


    }
}

