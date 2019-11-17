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
    public function visualizar(Request $request)
    {
        $resultado = cirurgia::agendamentos();
        return view('agendamento', ['res' => $resultado]);
    }

    public function alterar(Request $request)
    {

    }

    public function remover(Request $request)
    {
        
    }
}
