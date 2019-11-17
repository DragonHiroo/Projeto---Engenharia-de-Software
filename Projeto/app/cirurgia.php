<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;


class cirurgia extends Model
{
    public static function home_realizadas() {
        $cirurgias_realizadas = DB::select("SELECT * FROM cirurgia WHERE data between '31/10/2019' AND CURRENT_DATE ORDER BY data");    
        return $cirurgias_realizadas;
    }

    public static function home_agendadas() {
        $cirurgias_agendadas = DB::select("SELECT * FROM cirurgia WHERE cirurgia.agenda = '1' AND data > CURRENT_DATE ORDER BY data");
        return $cirurgias_agendadas;
    }

    /*Cirurgias de acordo com uma especialidade*/
    public static function cirurgia_especialidade($busca) {
        $cirurgias_especialidade = DB::select("SELECT * from cirurgia, medico where cirurgia.crm_medico = medico.crm and medico.nome_especialidade like :name",['name' => '%'.$busca.'%']);
        return $cirurgias_especialidade;
    }

    /*Cirurgias de acordo com uma especialidade dentro de um periodo*/
    public static function cirurgia_especialidadeData($info, $data_ini, $data_fim) {
        $cirurgias_especialidadeData = DB::select("SELECT * from cirurgia, medico where cirurgia.data between :date_ini and :date_fim and medico.crm = cirurgia.crm_medico and medico.nome_especialidade  like :name ",['name' => '%'.$info.'%', 'date_ini' => $data_ini, 'date_fim' => $data_fim]);
        return $cirurgias_especialidadeData;
    }

    /*Cirurgias realizadas dentro de um periodo */
    public static function cirurgia_Data($info, $data_ini, $data_fim) {
        $cirurgias_especialidadeData = DB::select("SELECT * from cirurgia where cirurgia.data between data_ini and  'data_fim' order by data",['name' => '%'.$info.'%', 'date_ini' => $data_ini, 'date_fim' => $data_fim]);
        return $cirurgias_especialidadeData;
    }


    public static function cadastro($dados)
    {
        /*

        Inserir dados aqui

        try {
            
            //query de inserção no banco:
            $sucesso = DB::insert();

            if ($sucesso == true)
                return 1;
            else
                return -1;
        }
        catch(QueryException $excecao) {
            if ($excecao->getMessage() == 23505)
                return 23505; //Chave duplicada
            else if ($excecao->getMessage() == 42830)
                return 42830; //Chave estrangeira inválida
            else
                return -1;
            
        }*/
    }
}