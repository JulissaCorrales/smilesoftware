<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;
use App\Paciente;
use App\PlanTratamiento;
use Illuminate\Support\Facades\Gate;


class CitaController extends Controller
{


       //vista Crear Cita Acceso a admin y secretaria
        public function crear(){
            if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
            return view('darcita');
        }
    }


      //Vista Semanal acceso a admin,secretaria, odontologo
        public function calendar(Request $request){
            if(Gate::denies('isAdmin') || Gate::denies('isSecretaria') || Gate::denies('isOdontologo')){
            $query=trim($request->get('/darcita'));
            $citas=Cita::get('id');
             return view('VistaSemanal');
         }
    }


    //Controlador de ver Calendario acceso al admin, odontologo,secretario
       public function calendario(Request $request){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria') || Gate::denies('isOdontologo')){
         $query=trim($request->get('/darcita'));
         $citas=Cita::get('id');
        return view('Calendario',['citas'=>$citas,'/darcita'=>$query]);
       }
    }


    //buscador
        public function index(Request $request){
            if($request){
            $query= trim($request->get('buscarpor'));
            $pacientes =Paciente::where('nombres','LIKE','%'. $query .'%')->orderBy('id','asc')->get();
            return view('Buscarpaciente',['pacientes' => $pacientes ,' buscarpor '=> $query] );
        }
        
    }
        

           public function mostrar(Request $request){
             if($request){
            $query= trim($request->get('buscarpor'));
            $pacientes =Paciente::where('nombres','LIKE','%'. $query .'%')->orderBy('id','asc')->get();
            return view('Buscarpaciente',['pacientes' => $pacientes ,' buscarpor '=> $query] );
        }
        
     }
        

      //funcion para gurardar el formulario cita
      //Acceso solo al admin y secretaria guardar cita
            public  function guardar(Request $request){
               if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
                $request->validate([
                'odontologo_id'=>'required',
                'duracionCita'=>'required',
                'paciente_id'=>'required',
                'comentarios'=>'required',
                'stard' =>'required',]);

            // formulario
            $nuevacita = new Cita();
            // $nuevacita->especialidad_id= $request->input('especialidad_id');
            $nuevacita->odontologo_id=$request->input('odontologo_id');
            $nuevacita->duracionCita=$request->input('duracionCita');
            $nuevacita->paciente_id=$request->input('paciente_id');
            $nuevacita->stard=$request->input('stard');
            $nuevacita->comentarios=$request->input('comentarios');    
    
            $creado = $nuevacita->save();
            //Asegurarse que fue creado
            if ($creado){
                // $paciente=Paciente::findOrFail($nuevacita->paciente_id);
                // $paciente->citas()->attach($nuevacita);
                return redirect()->back()
                    ->with('mensaje','La cita fue creado exitosamente');
    
            }else{
                //Retornar con un mensaje de error
            } 
        } 
}

        

          
     //funcion para ver cita individual
     //acceso para el admin , odontologo
     public function verCitaIndividual($id){
        if(Gate::denies('isAdmin') || Gate::denies('isOdontologo')){
            $pacientes = Paciente::findOrFail($id);
            return view('citaIndividual',compact('pacientes'));
         }
    
        }


    //funcion para eliminar
    // recibe el id del que se va eliminar
    //acceso solo el admin podra borrar la cita
    public function destroyCita($id){

        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria')){
            Cita::destroy($id);
            return redirect()->back()->with('mensaje','Cita borrada satisfactoriamente');
            
         }

            //rediccionar a la pagina index
            
            
    }

    //controlador vista diaria accseso admin, secretaria,odontologo
    public function vistadiaria(Request $request){
        if(Gate::denies('isAdmin') || Gate::denies('isSecretaria') || Gate::denies('isOdontologo')){
            $query=trim($request->get('/darcita'));
            $citas=Cita::get('id');
           return view('VistaDiaria');   
         }

        
       

    }


}
