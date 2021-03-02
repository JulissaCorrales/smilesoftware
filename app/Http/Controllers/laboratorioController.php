<?php

namespace App\Http\Controllers;

use App\Laboratorio;
use Illuminate\Http\Request;

class laboratorioController extends Controller
{
    public function VistaLaboratorio(){
        
        $laboratorios=Laboratorio::All();
        return view('VistaLaboratorio')->with ('laboratorios',$laboratorios);
    }

    public function nuevo(){
        return view('LaboratorioNuevo');
    }

    public function guardar(Request $request){
        $request->validate([
            'nombreLaboratorio'         =>  'required',
            'detalle'         =>  'required',
            'porPagar'         =>  'required',
        ]);

    $nuevo = new Laboratorio();
    $nuevo->nombreLaboratorio=$request->input('nombreLaboratorio');
    $nuevo->detalle=$request->input('detalle');
    $nuevo->porPagar=$request->input('porPagar');

    $creado = $nuevo->save();
    //Asegurarse que fue creado
    if ($creado){
        return redirect()->back()->with('mensaje','El registro de este laboratorio fue creado exitosamente');
    }else{ 
    }
    
    }
}
