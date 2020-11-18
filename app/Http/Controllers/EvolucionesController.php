<?php

namespace App\Http\Controllers;

use App\Evoluciones;
use App\Odontologo;
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function EvolucionesPaciente($id){
        $evoluciones=Evoluciones::all();
        $odontologos= Odontologo::all();
        $pacientes = Paciente::findOrFail($id);
       return view('Evoluciones')->with ('evoluciones',$evoluciones)->with('odontologos',$odontologos)->with('pacientes',$pacientes);
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
