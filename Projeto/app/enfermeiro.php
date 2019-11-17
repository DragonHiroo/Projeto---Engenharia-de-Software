<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class enfermeiro extends Model
{
    public static function busca($info) {
        $resultado = DB::select("SELECT corem, nome FROM enfermeiro WHERE corem = :corem ORDER BY corem", ['corem' => $info]);     
        return $resultado;
    }

    public static function busca_nome($info) {
        $resultado = DB::select("SELECT corem, nome FROM enfermeiro WHERE nome LIKE :name ORDER BY nome", ['name' => '%'.$info.'%']);        
        return $resultado;
    }

    public static function busca_cirurgias($info) {
        $resultado = DB::select('SELECT corem, nome, data, cpf_paciente, hora_inicio, duracao from enfermeiro, cirurgia WHERE enfermeiro.corem = cirurgia.corem_enfermeiro AND enfermeiro.corem = :corem ORDER BY cirurgia.data DESC', ['corem' => $info]);
        return $resultado;
    }
}
