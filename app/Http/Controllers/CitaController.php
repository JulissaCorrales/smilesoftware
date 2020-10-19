<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;

class CitaController extends Controller
{
    public function crear(){
        return view('darcita');

    }

    public function calendar(){
        return view('FullCalendar');

    }
      //funcion para gurdar el formulario cita
      public  function guardar(Request $request){

        $request->validate([
            'especialidad_id'=>'required',
            'odontologo_id'=>'required',
            'duracionCita'=>'required',
            'hora'=>'required',
            'fecha'=>'required',
            'paciente_id'=>'required',
            'comentarios'=>'required',
        ]);

        // formulario
        $nuevacita = new Cita();
        $nuevacita->especialidad_id= $request->input('especialidad_id');
        $nuevacita->odontologo_id=$request->input('odontologo_id');
        $nuevacita->duracionCita=$request->input('duracionCita');
        $nuevacita->hora=$request->input('hora');
        $nuevacita->fecha=$request->input('fecha');
       $nuevacita->paciente_id=$request->input('paciente_id');
        $nuevacita->comentarios=$request->input('comentarios');    

        $creado = $nuevacita->save();
        //Asegurarse que fue creado
        if ($creado){
            return redirect()->route("citadiaria")
                ->with('mensaje','La cita fue creado exitosamente');

        }else{
            //Retornar con un mensaje de error
        } 
}
}
