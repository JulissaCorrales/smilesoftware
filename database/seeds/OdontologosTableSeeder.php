<?php

use Illuminate\Database\Seeder;
use App\Especialidad;
use App\Odontologo;
use App\Cita;
use Carbon\Carbon;
use App\Paciente;
use App\PlanTratamiento;

class OdontologosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //  Especialidad::truncate();
        $especialidad = new Especialidad();
        $especialidad->nombreEspecialidad="Endodoncia";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->nombreEspecialidad="Ortodoncia";
        $especialidad->save();

        //Cita::truncate();
        $cita=new Cita();
        $cita->especialidad_id=1;
        $cita->odontologo_id=1;
        $cita->duracionCita="15 minutos";
        $cita->hora="12:00";
        $cita->fecha = Carbon::now();
        $cita->paciente_id=1;
        $cita->stard='2020-10-21  5:30:00';
        $cita->comentarios="Paciente con alergia al pescado";
        $cita->save();
        
        $cita=new Cita();
        $cita->especialidad_id=1;
        $cita->odontologo_id=1;
        $cita->duracionCita="15 minutos";
        $cita->hora="11:00";
        $cita->fecha = Carbon::now();
        $cita->paciente_id=2;
        $cita->stard='2020-10-21  5:30:00';
        $cita->comentarios="Paciente con alergia al camaron";
        $cita->save();
        
        /*  */

    
         //Paciente::truncate(); 
        $paciente=new Paciente;
        $paciente->nombres="Luis David";
        $paciente->apellidos="Ferrera Martinez";
        $paciente->identidad="0703199901527";
        $paciente->sexo="Masculino";
        $paciente->fechaNacimiento="19990108";
        $paciente->departamento="El Paraiso";
        $paciente->ciudad="Danli";
        $paciente->direccion="Bella vista";
        $paciente->telefonoFijo="27638852";
        $paciente->telefonoCelular="95612356";
        $paciente->profesion="Maestro";
        $paciente->empresa="Escuela Miriam Gallardo";
        $paciente->observaciones="Alergias al mani";
        $paciente->save();

        $paciente->citas()->attach([1]);

        
        $paciente=new Paciente;
        $paciente->nombres="Laura Leonela";
        $paciente->apellidos="Ferrera Martinez";
        $paciente->identidad="0703199911527";
        $paciente->sexo="Femenino";
        $paciente->fechaNacimiento="19990108";
        $paciente->departamento="El Paraiso";
        $paciente->ciudad="Danli";
        $paciente->direccion="Bella vista";
        $paciente->telefonoFijo="27638852";
        $paciente->telefonoCelular="95612356";
        $paciente->profesion="Maestro";
        $paciente->empresa="Escuela Miriam Gallardo";
        $paciente->observaciones="Alergias al mani";
        $paciente->save();

        $paciente->citas()->attach([2]);

           //PlanTratamiento::truncate();
           $plantratamiento=new PlanTratamiento;
           $plantratamiento->nombreTratamiento="Blanqueamiento dental";
           $plantratamiento->estado="activo";
           $plantratamiento->paciente_id=1;
           $plantratamiento->odontologo_id=1;
           $plantratamiento->cita_id=1;
           $plantratamiento->save();
           
           $plantratamiento=new PlanTratamiento;
           $plantratamiento->nombreTratamiento="Brakes";
           $plantratamiento->estado="activo";
           $plantratamiento->paciente_id=2;
           $plantratamiento->odontologo_id=1;
           $plantratamiento->cita_id=2;
           $plantratamiento->save();

        //Odontologo::truncate();
        $odontologo=new Odontologo;
        $odontologo->nombres="Juan Jose";
        $odontologo->apellidos="Perez Pereira";
        $odontologo->identidad="0703-1998-15123";
        $odontologo->telefonoCelular="95652356";
        $odontologo->telefonoFijo="2763-8826";
        $odontologo->email="juanperez@gmail.com";
        $odontologo->departamento="El paraiso";
        $odontologo->ciudad="Danli";
        $odontologo->direccion="Col la reforma";
        $odontologo->especialidad_id=1;
        $odontologo->intervalos="30 min";
        $odontologo->save();

        $odontologo=new Odontologo;
        $odontologo->nombres="Mercedes Dariela";
        $odontologo->apellidos="Mejia Vasquez";
        $odontologo->identidad="0703-1985-12345";
        $odontologo->telefonoCelular="95562414";
        $odontologo->telefonoFijo="2763-8826";
        $odontologo->email="mercedezmejia@gmail.com";
        $odontologo->departamento="El paraiso";
        $odontologo->ciudad="Danli";
        $odontologo->direccion="Col Nueva Esperanza";
        $odontologo->especialidad_id=1;
        $odontologo->intervalos="30 min";
        $odontologo->save();
     
        



        
    
    }
}
