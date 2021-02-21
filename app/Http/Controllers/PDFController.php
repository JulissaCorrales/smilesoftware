<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Paciente;

class PDFController extends Controller
{
    
public function PDF(){
$pdf = PDF::loadView('prueba');
return $pdf->stream('prueba.pdf');
}

public function PDFPacientes(){
    $this->authorize('descargarPacientes', Paciente::class);
    $pacientes = Paciente::all();
    $pdf = PDF::loadView('pacientes',compact('pacientes'));
    return $pdf->download('pacientes.pdf');

}






}
