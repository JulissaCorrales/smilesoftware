<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuAgendaController extends Controller
{
    public function MenuAgenda()
    {
        return view('VistaMenuAgenda');
    }
}
