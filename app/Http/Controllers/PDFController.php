<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Paciente;
use App\Inventario;
use App\Cita;
use App\Plantratamiento;


class PDFController extends Controller
{
    
public function PDF(){
$citas = Cita::all();
$pdf = PDF::loadView('prueba',compact('citas'));
return $pdf->stream('prueba.pdf');
}
public function PDFPacientes(){
    $this->authorize('descargarPacientes', Paciente::class);
    $pacientes = Paciente::all();
    $pdf = PDF::loadView('pacientes',compact('pacientes'));
    return $pdf->download('pacientes.pdf');
}
public function PDFInventarios(){
    //$this->authorize('descargarPacientes', Paciente::class);
    $inventarios = Inventario::all();
    $pdf = PDF::loadView('inventarios_pdf',compact('inventarios'));
    return $pdf->download('inventarios_pdf.pdf');
}
public function PDFCitas(){
    $citas = Cita::all();
    $pdf = PDF::loadView('citas_pdf',compact('citas'));
    return $pdf->download('citas_pdf.pdf');
    }

/* Factura */
public function PDFfacturaplantratamiento($id,$id2){
    $pacientes = Paciente::findOrFail($id);
    $plantratamientos = Plantratamiento::findOrFail($id2);
    $totalpagar= $plantratamientos->tratamiento->productos->sum('monto'); 
    $pdf = PDF::loadView('facturaplantratamiento_pdf',compact('pacientes','plantratamientos','totalpagar'));
    return $pdf->download('facturaplantratamiento_pdf.pdf');
    }
/* Citas individuales */
public function PDFCitaindividual($id){
    $pacientes = Paciente::findOrFail($id);
    $pdf = PDF::loadView('citaindividual_pdf',compact('pacientes','citas'));
    return $pdf->download('citaindividual_pdf.pdf');
}






}

