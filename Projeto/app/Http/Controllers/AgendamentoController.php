<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\paciente;
use App\especialidade;
use App\cirurgia;

class AgendamentoController extends Controller
{
    public function especialidades(Request $request)
    {
        return view('agendamento');
    }
}
