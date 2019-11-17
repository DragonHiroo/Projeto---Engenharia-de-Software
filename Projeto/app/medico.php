<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class medico extends Model
{
    public static function busca_crm($info) {
        $resultado = DB::select("SELECT crm, nome FROM medico WHERE crm = :crm ORDER BY crm", ['crm' => $info]);     
        return $resultado;
    }

    public static function busca_nome($info) {
        $resultado = DB::select("SELECT crm, nome FROM medico WHERE nome LIKE :name ORDER BY nome", ['name' => '%'.$info.'%']);        
        return $resultado;
    }

    public static function busca_cirurgias($info) {
        $resultado = DB::select('SELECT crm, nome, nome_especialidade, data, corem_enfermeiro, cpf_paciente, hora_inicio, duracao from medico, cirurgia WHERE medico.crm = cirurgia.crm_medico AND medico.crm = :crm ORDER BY cirurgia.data DESC', ['crm' => $info]);
        return $resultado;
    }

    public static function busca_pacientes($info) {
        $resultado = DB::select("SELECT distinct paciente.nome FROM cirurgia, paciente WHERE cirurgia.crm_medico = :crm and cpf_paciente = cpf order by paciente.nome", ['crm' => $info]);     
        return $resultado;
    }

}
