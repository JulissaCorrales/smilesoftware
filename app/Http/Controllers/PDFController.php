<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Paciente;
use App\Inventario;
use App\Cita;
use App\Plantratamiento;
use Illuminate\Support\Facades\DB;


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
    $this->authorize('descargarinventarios', Inventario::class);


    $inventarios = Inventario::all();
$datos = DB::select('select I.id, E.cantidad,SUM(S.Cantidadsalidad) AS cantidadsalida,E.monto, I.CantidadExistente,I.precio
FROM inventarios I
LEFT JOIN 

(SELECT SUM(E.CantidadEntrante)AS cantidad, SUM(E.precio)AS monto, E.inventario_id
   FROM entradas E
   GROUP BY E.inventario_id)
	 AS E ON I.id= E.inventario_id

LEFT JOIN 

salidas S 


ON I.id = S.inventario_id
GROUP BY I.id;
');
    $pdf = PDF::loadView('inventarios_pdf',compact('inventarios','datos'));
    return $pdf->download('inventarios_pdf.pdf');
}
public function PDFCitas(){
    $this->authorize('DescargarCitas', Cita::class);
    $citas = Cita::all();
    $pdf = PDF::loadView('citas_pdf',compact('citas'));
    return $pdf->download('citas_pdf.pdf');
    }

/* Factura */
public function PDFfacturaplantratamiento($id,$id2){
    $this->authorize('descargarfacturaplantratamiento', Plantratamiento::class);

    $pacientes = Paciente::findOrFail($id);
    $plantratamientos = Plantratamiento::findOrFail($id2);
    $totalpagar= $plantratamientos->tratamiento->productos->sum('monto'); 
    $pdf = PDF::loadView('facturaplantratamiento_pdf',compact('pacientes','plantratamientos','totalpagar'))->setPaper('a4');
    return $pdf->download('facturaplantratamiento_pdf.pdf');
    }
/* Citas individuales */
public function PDFCitaindividual($id){
    $this->authorize('DescargarCitasPorPaciente', Cita::class);
    $pacientes = Paciente::findOrFail($id);
    $pdf = PDF::loadView('citaindividual_pdf',compact('pacientes'));
    return $pdf->download('citaindividual_pdf.pdf');
}






}

