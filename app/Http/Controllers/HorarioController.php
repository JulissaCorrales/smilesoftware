<?php

namespace App\Http\Controllers;

use App\horarios;
use App\Dias;
use App\Odontologo;
use Illuminate\Http\Request;


class HorarioController extends Controller
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
/*Crear un Horario */
     //

    public function create($id)
    {
        $this->authorize('crearHorario', Odontologo::class); //si tiene el permiso de crear 
        $dias= Dias::All(); 
        $horario=horarios::all();
        $odontologos = Odontologo::findOrFail($id);
        return view('horario')->with('odontologos',$odontologos)->with('dias',$dias)->with('horario',$horario);
     
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*Guardar un Horario */
    public function store(Request $request, $odontologo_id)
    {


        $request->validate([     'horainicio'=>'required',
           'Día'=>'required',
        'horafinal'=>'required'
        
        
        ]);
    
        $this->authorize('crearHorario', Odontologo::class); //si tiene el permiso de crear 
        $horario = new horarios();
        $odontologo=Odontologo::findOrFail($odontologo_id);

        //formulario
       
        //$horario->odontologo_id= $id;
        $horario->HoraInicio= $request->input('horainicio');
        //$horario->HoraInicio= $request->input('hoini');
        $horario->HoraFinal= $request->input('horafinal');
        $horario->Descanso= $request->input('descanso');
        $horario->DescansoInicial= $request->input('horadescansoini');
        $horario->DescansoFinal= $request->input('horadescansofin');

        $create = $horario->save();

        $lista = explode(',',  $request->dias_horarios); 
        
         
        foreach ($lista as  $dias) {
            $dias= new Dias();
            $dias->dias=$request->input('Día');
            $dias->save();

             $horario->dias()->attach($dias->id);
             $horario->odontologos()->attach($odontologo_id);
             $horario->save();
        }    

         if ($create){
            return redirect("create/$odontologo_id/nuevo")->with('mensaje', 'El Horario fue guardado correctamente!');
        }else{
            //retornar con un msj de error
        } 


    }



    /*Borrar un horario*/



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horario  $horario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $horarios=horarios::findOrFail($id);
        $horarios->dias()->delete();
        $horarios->delete();
        $horarios->dias()->detach();

        
        return redirect()->back()->with('mensaje','Horario  borrado satisfactoriamente');

    }
}
