<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\paciente;
use App\especialidade;
use App\cirurgia;

class RelatorioController extends Controller
{
    public function cirurgias(Request $request)
    {
        return view('relatorio_cirurgias');
    }

    public function pacientes(Request $request)
    {
        return view('relatorio_pacientes');
    }

    public function especialidades(Request $request)
    {
        return view('relatorio_especialidades');
    }
}
