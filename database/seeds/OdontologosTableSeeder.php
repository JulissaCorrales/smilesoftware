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
use App\Dias;

class OdontologosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       $dias= new Dias();
        $dias->dias="Lunes";
        $dias->save();
        


     $dias= new Dias();
        $dias->dias="Lunes";
        $dias->save();

 $dias= new Dias();
        $dias->dias="Martes";
        $dias->save();

 $dias= new Dias();
        $dias->dias="Miércoles";
        $dias->save();

 $dias= new Dias();
        $dias->dias="Jueves";
        $dias->save();

 $dias= new Dias();
        $dias->dias="Viernes";
        $dias->save();

 $dias= new Dias();
        $dias->dias="Sábado";
        $dias->save();

 $dias= new Dias();
        $dias->dias="Domingo";
        $dias->save();

        $especialidad = new Especialidad();
        $especialidad->Especialidad="Endodoncia"; 
       $especialidad->Descripcion="La endodoncia es un tratamiento dental conocido comúnmente para “matar el nervio”. Consiste en eliminar la parte profunda del diente cuando se encuentra lesionado o infectado.";
        $especialidad->save();

        $especialidad = new Especialidad();
        $especialidad->Especialidad="Ortodoncia";
        $especialidad->Descripcion="La ortodoncia es una especialidad de la odontología que se encarga de todo el estudio, prevención, diagnóstico y tratamiento de las anomalías de forma, posición, relación y función de las estructuras dentomaxilofaciales.";
        $especialidad->save();

 $especialidad = new Especialidad();
        $especialidad->Especialidad="General";
        $especialidad->Descripcion="La medicina general brinda atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades, es responsable del paciente, para decidir su derivación a los especialistas cuando alguna patología se descompense";
        $especialidad->save();

 $especialidad = new Especialidad();
        $especialidad->Especialidad="Prostodoncia";
        $especialidad->Descripcion="Prostodoncia es la especialidad dental dedicada a la restauración y reemplazo de dientes ausentes o dañados.";
        $especialidad->save();

 $especialidad = new Especialidad();
        $especialidad->Especialidad="Periodoncia";
        $especialidad->Descripcion="Estudia la prevención, diagnóstico y tratamiento de las enfermedades y condiciones que afectan a los tejidos que dan soporte a los órganos dentarios, para el mantenimiento de la salud, función y estética de los dientes, sus tejidos adyacentes.";
        $especialidad->save();

       
$especialidad = new Especialidad();
        $especialidad->Especialidad="Odontopediatría";
        $especialidad->Descripcion="La Odontopediatría  atiende y trata las distintas enfermedades bucodentales desde la infancia más temprana hasta finalizar el crecimiento. Por tanto, el odontopediatra se encargará de explorar la cavidad oral del menor y detectar posibles anomalías";
        $especialidad->save();

$especialidad = new Especialidad();
        $especialidad->Especialidad="Radiología maxilofacial y oral";
        $especialidad->Descripcion="La radiología oral y maxilofacial, también conocida como radiología dental y maxilofacial, es la especialidad de la odontología que se ocupa del desempeño e interpretación de las imágenes de diagnóstico.";
        $especialidad->save();

$especialidad = new Especialidad();
        $especialidad->Especialidad="Cirugía maxilofacial y oral.";
        $especialidad->Descripcion="Es una especialidad quirúrgica que incluye el diagnóstico, cirugía y tratamientos relacionados de un gran espectro de enfermedades, heridas y aspectos estéticos de la boca, dientes, cara, cabeza y cuello.";
        $especialidad->save();


        //seeder para los dias de Semana
        
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