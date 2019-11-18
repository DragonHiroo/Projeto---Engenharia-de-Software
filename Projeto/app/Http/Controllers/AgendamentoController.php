<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\enfermeiro;
use App\paciente;
use App\especialidade;
use App\cirurgia;

class AgendamentoController extends Controller
{
    public static function visualizar(Request $request)
    {
        $resultado = cirurgia::agendamentos();
        return view('agendamento', ['res' => $resultado, 'remocao' => 0, 'alterar' => 0]);
    }

    public static function remover_agendamento(Request $request)
    {
        $data = $request->data;
        $cpf = $request->cpf_paciente;
        $resultado = cirurgia::remover($data, $cpf);
        $lista = cirurgia::agendamentos();
        if ($resultado)
            return view('agendamento', ['res' => $lista, 'remocao' => 1, 'alterar' => 0]);
        else
            return view('agendamento', ['res' => $lista, 'remocao' => -1, 'alterar' => 0]);
    }

    public static function alterar_agendamento(Request $request)
    {
        $data = $request->data;
        $cpf = $request->cpf_paciente;

        return view('agendamento_alteracao', ['data' => $data, 'cpf' => $cpf]);
    }

    public static function alterar_registro(Request $request)
    {
        $data = $request->data;
        $cpf = $request->cpf_paciente;
        $resultado = cirurgia::alteracao($request, $data, $cpf);
        $lista = cirurgia::agendamentos();

        echo("                                                                        ");
        var_dump($resultado);

        if ($resultado == true)
            return view('agendamento', ['res' => $lista, 'remocao' => 0, 'alterar' => 1]);
        else
            return view('agendamento', ['res' => $lista, 'remocao' => 0, 'alterar' => -1]);
    }
}
