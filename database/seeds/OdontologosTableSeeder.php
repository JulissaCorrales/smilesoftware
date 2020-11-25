<?php

use Illuminate\Database\Seeder;
use App\Especialidad;
use App\Odontologo;
use App\Cita;
use Carbon\Carbon;
use App\Paciente;
use App\PlanTratamiento;
use App\Tratamiento;
use App\Producto;

class OdontologosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $especialidad = new Especialidad();
        $especialidad->Especialidad="Endodoncia";   
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->Especialidad="Ortodoncia";
        $especialidad->save();

        /*
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
        $odontologo->especialidad_id="2";
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
        $odontologo->especialidad_id="2";
        $odontologo->intervalos="30 min";
        $odontologo->save(); */

/*
        $cita=new Cita();
        $cita->odontologo_id=1;
        $cita->duracionCita="15 minutos";
        $cita->paciente_id=1;
        $cita->stard='2020-11-20  5:30:00';
        $cita->comentarios="Paciente con alergia al pescado";
        $cita->save();
        
        $cita=new Cita();
        $cita->odontologo_id=1;
        $cita->duracionCita="15 minutos";
        $cita->paciente_id=2;
        $cita->stard='2020-11-20  5:30:00';
        $cita->comentarios="Paciente con alergia al camaron";
        $cita->save(); */


       /* $tratamientos=new Tratamiento;
        $tratamientos->categoria="Extraccion Dental";
        $tratamientos->tipo="Accion Clinica";
        $tratamientos->save();

        $tratamientos=new Tratamiento;
        $tratamientos->categoria="Cambio de Placa";
        $tratamientos->tipo="Accion Clinica";
        $tratamientos->save();

        $productos=new Producto;
        $productos->nombre="Placa";
        $productos->permitedescuento="Si";
        $productos->monto=200.00;
        $productos->tratamiento_id=1;
        $productos->save();
        
        $productos=new Producto;
        $productos->nombre="Guantes";
        $productos->permitedescuento="Si";
        $productos->monto=50.00;
        $productos->tratamiento_id=1;
        $productos->save();

        $productos=new Producto;
        $productos->nombre="Anestecia";
        $productos->permitedescuento="No";
        $productos->monto=100.00;
        $productos->tratamiento_id=2;
        $productos->save();
        
        $productos=new Producto;
        $productos->nombre="Alcohol";
        $productos->permitedescuento="No";
        $productos->monto=50.00;
        $productos->tratamiento_id=2;
        $productos->save();

        $plantratamiento=new PlanTratamiento;
        $plantratamiento->tratamiento_id=1;
        $plantratamiento->estado="activo";
        $plantratamiento->paciente_id=1;
        $plantratamiento->cita_id=1;
        $plantratamiento->save();
        
        $plantratamiento=new PlanTratamiento;
        $plantratamiento->tratamiento_id=1;
        $plantratamiento->estado="activo";
        $plantratamiento->paciente_id=2;
        $plantratamiento->cita_id=2;
        $plantratamiento->save();

*/
        
    
    }
}