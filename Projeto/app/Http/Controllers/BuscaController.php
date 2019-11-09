<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\paciente;
use App\especialidade;
use App\cirurgia;

class BuscaController extends Controller
{
    public function medico(Request $request) {
        $busca = $request->busca;
        $op = $request->op;

        if ($busca && $op) { //Parâmetros da busca corretos
            if ($op == 'CRM') { //Busca por CRM
                $resultado = medico::busca_crm($busca);
            }
            else if ($op == 'nome') { //Busca por nome
                $resultado = medico::busca_nome($busca);
            }
            return view('busca_medico_resultado', ['busca' => $busca, 'res' => $resultado]);
        }
        else if (!($busca)) { //Não houve busca, redireciona para a página inicial
            return view('busca_medico');
        }
    }
    public function enfermeiro(Request $request) {
        $busca = $request->busca;

        if ($busca) {
            $resultado = enfermeiro::busca($busca);
            return view('busca_enfermeiro_resultado', $resultado);
        }
        else {
            return view('busca_enfermeiro');
        }
    }

    public function paciente(Request $request) {
        $busca = $request->busca;
        if ($busca) {
            $resultado = paciente::busca($busca);
                return view('busca_paciente_resultado', $resultado);
        }
        else {
            return view('busca_paciente');
        }
    }

    public function especialidade(Request $request) {
        $busca = $request->busca;
        if ($busca) {
            $resultado = medico::busca_crm($busca);
                return view('busca_medico_resultado', $resultado);
        }
        else {
            return view('busca_especialidade');
        }
    }
}
