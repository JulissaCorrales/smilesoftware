<?php

namespace App\Http\Controllers;

use App\Evoluciones;
use App\Tratamiento;
use App\Paciente;
use Illuminate\Http\Request;


class EvolucionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function nuevaevolucion($id){
        $pacientes = Paciente::findOrFail($id);
          return view('nuevaEvolucion')->with('pacientes',$pacientes);
    }
    

    public function GuardarEvolucion(Request $request,$id){
        $paciente=Paciente::findOrFail($id);

        $nuevoevaluacion = new  Evoluciones();
        $nuevoevaluacion->paciente_id= $id;
        $nuevoevaluacion->plantratamiento_id= $request->input('tratamiento_id');

        $nuevoevaluacion->evolucion= $request->input('caja');
        $creado= $nuevoevaluacion->save();
         if ($creado){
            
          return redirect("/pantallainicio/vista/paciente/$id/evoluciones")->with('mensaje','Evolucion guardado exitosamente');

           //return redirect()('/comentarios/{id}');
        } 
    }
    


//guardar plan de trtamiento

    


    public function EvolucionesPaciente($id){
        $evoluciones=Evoluciones::all();
        $tratamientos= Tratamiento::all();

        $pacientes = Paciente::findOrFail($id);
       return view('Evoluciones')->with ('evoluciones',$evoluciones)->with('tratamientos',$tratamientos)->with('pacientes',$pacientes);
       }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evoluciones  $evoluciones
     * @return \Illuminate\Http\Response
     */
    public function show(Evoluciones $evoluciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evoluciones  $evoluciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Evoluciones $evoluciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evoluciones  $evoluciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evoluciones $evoluciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evoluciones  $evoluciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evoluciones $evoluciones)
    {
        //
    }
}
