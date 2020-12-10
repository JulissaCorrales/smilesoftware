<?php

use Illuminate\Database\Seeder;
use App\Tratamiento;


class TratamientosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE CARACTER GENERAL";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE CIRUGIA BUCAL Y MAXILOFACIAL";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 
     
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE ENDODONCIA O TRATAMIENTO DE CONDUCTO";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE ODONTOPEDIATRIA";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE OPERATORIA DENTAL";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save();
        
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE ORTODONCIA";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 


        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE PATOLOGIA BUCO MAXILO FACIAL";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE PERIODONCIA";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="ACCIONES DE PREVENCIONAL INTERCEPCION E HIGIENE";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

    }
}
