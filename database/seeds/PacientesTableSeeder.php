<?php

use Illuminate\Database\Seeder;
use App\Paciente;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
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

        

        
        $paciente=new Paciente;
        $paciente->nombres="Laura Leonela";
        $paciente->apellidos="Ferrera Martinez";
        $paciente->identidad="0703199911528";
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
       
    }
}
