<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\paciente;
use App\especialidade;
use App\cirurgia;
use App\relatorio;

class RelatorioController extends Controller
{
    public function cirurgias(Request $request)
    {
        //Total de cirurgias para cada médico
        $total = relatorio::cirurgiaMedico();

        //Média de cirurgias para cada médico
        $media = relatorio::media_cirurgiaMedico();

        //Número de pacientes atendidos pelo médico
        $pacientes = relatorio::pacientesEspecialidade();

        return view('relatorio_cirurgias', ['total' => $total, 'media' => $media, 'pacientes' => $pacientes]);
    }

    public function pacientes(Request $request)
    {
        return view('relatorio_pacientes'); //Relatório 2
    }
}
