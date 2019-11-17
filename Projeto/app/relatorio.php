<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class relatorio extends Model
{
    /* retorna o numero de pacientes atendidos por cada medico*/
    public static function pacientesMedico() {
        $pacientesMedico = DB::select("SELECT medico.crm, medico.nome, count (distinct cpf_paciente) from cirurgia, medico where cirurgia.crm_medico = medico.crm  group by medico.crm order by medico.crm");    
        return $pacientesMedico;
    }

    /* retorna o numero de pacientes atendidos por especialidade*/
    public static function pacientesEspecialidade() {
        $pacientesEspecialidade = DB::select("SELECT nome_especialidade, count (cpf_paciente) from cirurgia, medico where cirurgia.crm_medico = medico.crm group by nome_especialidade order by nome_especialidade");    
        return $pacientesEspecialidade;
    }

    /*Quantidade de cirurgias realizadas por cada médico*/
    public static function cirurgiaMedico() {
        $cirurgiaMedico = DB::select("SELECT medico.nome, medico.crm, count (cpf_paciente) from cirurgia, medico where cirurgia.crm_medico = medico.crm group by medico.crm");    
        return $cirurgiaMedico;
    }
    /*media de cirirgias realizada por medico*/
    public static function media_cirurgiaMedico() {
        $media_cirurgiaMedico = DB::select("SELECT avg(medico_cirurgia.qtd) from (select medico.nome, medico.crm, count (cpf_paciente) as qtd from cirurgia, medico where cirurgia.crm_medico = medico.crm group by medico.crm) as medico_cirurgia");    
        return $media_cirurgiaMedico;
    }

}
