<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cita;

class MenuAgendaController extends Controller
{
    public function MenuAgenda()
    {
        $citas=Cita::all();
        return view('VistaMenuAgenda')->with('citas',$citas);
    }
}
