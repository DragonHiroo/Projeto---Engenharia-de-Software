<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class medico extends Model
{
    public static function busca_crm($info) {
        $resultado = DB::select('SELECT crm, nome, nome_especialidade, data, corem_enfermeiro, cpf_paciente, hora_inicio, duracao from medico, cirurgia WHERE medico.crm = cirurgia.crm_medico AND medico.crm = :crm ORDER BY cirurgia.data DESC', ['crm' => $info]);
        if ($resultado) {
            return 'enc';
        }
        else {
            return 'n_enc';
        }
    }

    public static function busca_nome($info) {
        return 'n_enc';
    }
}
