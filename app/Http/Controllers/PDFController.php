<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Paciente;
use App\Inventario;
use App\Cita;

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

}

