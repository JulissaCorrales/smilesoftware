<?php

use Illuminate\Database\Seeder;
use App\Especialidad;
use App\Odontologo;
use App\Cita;
use Carbon\Carbon;

class OdontologosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Especialidad::truncate();
        $especialidad = new Especialidad();
        $especialidad->nombreEspecialidad="Endodoncia";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->nombreEspecialidad="Ortodoncia";
        $especialidad->save();

        Cita::truncate();
        $cita=new Cita();
        $cita->especialidad_id=1;
        $cita->odontologo_id=1;
        $cita->duracionCita="15 minutos";
        $cita->hora="12:00";
        $cita->fecha = Carbon::now();
        $cita->save();

        Odontologo::truncate();
        $odontologo=new Odontologo;
        $odontologo->nombres="Juan Jose";
        $odontologo->apellidos="perez pereira";
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
    
    }
}
