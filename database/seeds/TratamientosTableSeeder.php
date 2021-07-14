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
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Aparatos Fijos";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 
     
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Aparatos Removibles";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Cirugía";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Endodoncia";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save();
        
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Odontopediatría";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 


        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Ortodoncia";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Ortopedia";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Periodoncia";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Promociones";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Prótesis";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 

        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Estética Dental";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 
    
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Tratamiento Antirronquidos";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 
    
        
        $tratamiento=new Tratamiento;
        $tratamiento->categoria="Tratamientos";
        $tratamiento->tipo="Acción Clínica";
        $tratamiento->save(); 
    }
}
