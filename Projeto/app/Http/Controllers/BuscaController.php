<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\enfermeiro;
use App\paciente;
use App\especialidade;
use App\cirurgia;

class BuscaController extends Controller
{
    public function medico(Request $request)
    {
        $busca = $request->busca;
        $op = $request->op;
        $visualiza = $request->crm;

        if ($busca && $op) { //Parâmetros da busca corretos
            if ($op == 'CRM') { //Busca por CRM
                $resultado = medico::busca_crm($busca);
                return view('busca_medico_resultado', ['busca' => $busca, 'res' => $resultado]);

            } else if ($op == 'nome' && !$visualiza) { //Busca por nome, listar nomes
                $resultado = medico::busca_nome($busca);
                return view('busca_medico_resultado', ['busca' => $busca, 'res' => $resultado]);

            }
        } else if (!($busca)) { //Não houve busca, redireciona para a página inicial
            return view('busca_medico');
        }
    }

    public function visualiza_cirurgias_medico(Request $request)
    {
        $crm = $request->crm;
        $resultado = medico::busca_cirurgias($crm);
        return view('busca_medico_visualizacao', ['res' => $resultado]);
    }


    public function enfermeiro(Request $request)
    {
        $busca = $request->busca;
        if ($busca) {
            $resultado = enfermeiro::busca($busca);
            return view('busca_enfermeiro_resultado', ['busca' => $busca, 'res' => $resultado]);
        } else {
            return view('busca_enfermeiro');
        }
    }

    public function visualiza_cirurgias_enfermeiro(Request $request)
    {
        $corem = $request->corem;
        $resultado = enfermeiro::busca_cirurgias($corem);
        return view('busca_enfermeiro_visualizacao', ['res' => $resultado]);
    }

    public function paciente(Request $request)
    {
        $busca = $request->busca;
        if ($busca) {
            $resultado = paciente::busca($busca);
            return view('busca_paciente_resultado', $resultado);
        } else {
            return view('busca_paciente');
        }
    }

    public function especialidade(Request $request)
    {
        $busca = $request->busca;
        if ($busca) {
            $resultado = cirurgia::busca_crm($busca);
            return view('busca_medico_resultado', $resultado);
        } else {
            return view('busca_especialidade');
        }
    }
}
