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
        $tratamiento->categoria="Acciones Generales";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Aparatos Fijos";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 
     
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Aparatos Removibles";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Ciruguia";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Endodoncia";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save();
        
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Odontopetria";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 


        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Ortodoncia";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Ortopedia";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Periodoncia";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Promociones";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Protesis";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Tratamientos";
        $tratamiento->tipo="Accion Clinica";
        $tratamiento->save(); 
    }
}
