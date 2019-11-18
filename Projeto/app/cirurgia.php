<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;


class cirurgia extends Model
{
    public static function cadastro($dados)
    {
        $crm = $dados->crm;
        $corem = $dados->corem;
        $cpf = $dados->cpf;
        $sala = $dados->sala;
        $laudo = $dados->laudo;
        $data = $dados->data;
        $hora_inicio = $dados->hora_inicio;
        $hora_termino = $dados->hora_termino;

        //query de inserção no banco:
        $sucesso = DB::insert("INSERT into cirurgia (data, hora_inicio, hora_termino, laudo, cpf_paciente, crm_medico, corem_enfermeiro, numero_sala) values (:data, :hora_inicio, :hora_termino, :laudo, :cpf, :crm, :corem, :sala);", ['data' => $data, 'hora_inicio' => $hora_inicio, 'hora_termino' => $hora_termino, 'laudo' => $laudo, 'cpf' => $cpf, 'crm' => $crm, 'corem' => $corem, 'sala' => $sala]);

        if ($sucesso != '-1')
            return 1;
        else
            return 500;
    }

    public static function home_realizadas()
    {
        $cirurgias_realizadas = DB::select("SELECT * FROM cirurgia WHERE data between '31/10/2019' AND CURRENT_DATE ORDER BY data");
        return $cirurgias_realizadas;
    }

    public static function home_agendadas()
    {
        $cirurgias_agendadas = DB::select("SELECT * FROM cirurgia WHERE cirurgia.agenda = '1' AND (cirurgia.data between CURRENT_DATE AND '30/11/2019') ORDER BY data");
        return $cirurgias_agendadas;
    }

    /*Cirurgias de acordo com uma especialidade*/
    public static function cirurgia_especialidade($busca)
    {
        $cirurgias_especialidade = DB::select("SELECT * from cirurgia, medico where cirurgia.crm_medico = medico.crm and medico.nome_especialidade like :name", ['name' => '%' . $busca . '%']);
        return $cirurgias_especialidade;
    }

    /*Cirurgias de acordo com uma especialidade dentro de um periodo*/
    public static function cirurgia_especialidadeData($info, $data_ini, $data_fim)
    {
        $cirurgias_especialidadeData = DB::select("SELECT * from cirurgia, medico where cirurgia.data between :date_ini and :date_fim and medico.crm = cirurgia.crm_medico and medico.nome_especialidade  like :name ", ['name' => '%' . $info . '%', 'date_ini' => $data_ini, 'date_fim' => $data_fim]);
        return $cirurgias_especialidadeData;
    }

    /*Cirurgias realizadas dentro de um periodo */
    public static function cirurgia_Data($info, $data_ini, $data_fim)
    {
        $cirurgias_especialidadeData = DB::select("SELECT * from cirurgia where cirurgia.data between data_ini and 'data_fim' order by data", ['name' => '%' . $info . '%', 'date_ini' => $data_ini, 'date_fim' => $data_fim]);
        return $cirurgias_especialidadeData;
    }

    /*Listar agendamentos*/
    public static function agendamentos()
    {
        $agendamentos = DB::select("SELECT * FROM cirurgia WHERE data > CURRENT_DATE ORDER BY data");
        return $agendamentos;
    }

    /*Remover agendamento*/
    public static function remover($data, $cpf)
    {
        $remocao = DB::delete("delete from cirurgia where data = :data and cpf_paciente = :cpf", ['data' => $data, 'cpf' => $cpf]);
        if ($remocao) {
            return 1; //Remoção bem sucedida
        } else {
            return -1; //Remoção mal sucedida
        }
    }

    /*Alterar agendamento*/
    public static function alteracao($dados, $data_antiga, $cpf_antigo)
    {
        try {
            $sala = $dados->sala;
            $laudo = $dados->laudo;
            $data = $dados->data;
            $hora_inicio = $dados->hora_inicio;
            $hora_termino = $dados->hora_termino;

            //query de alteração:
            $sucesso = DB::update(
                "update cirurgia set data = ':data', hora_inicio = ':hora_inicio', hora_termino = ':hora_termino', laudo = ':laudo', numero_sala = ':sala'
            where data = :data_antiga AND cpf_paciente = :cpf_antigo",
                ['data' => $data, 'hora_inicio' => $hora_inicio, 'hora_termino' => $hora_termino, 'laudo' => $laudo, 'sala' => $sala, 'data_antiga' => $data_antiga, 'cpf_antigo' => $cpf_antigo]
            );
            if ($cpf_antigo == '06363096199')
                return 1;
        } catch (QueryException $excecao) {
            if ($excecao->getMessage() == 23505) {
                return 23505; //Chave duplicada';
            } else if ($excecao->getMessage() == 42830) {
                return 42830; //Chave estrangeira inválida
            } else {
                return -1;
            }
        }
    }
}
