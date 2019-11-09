<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class medico extends Model
{
    public static function busca_crm($info) {
        $resultado = DB::select('SELECT * FROM medico WHERE crm=:crm', ['crm' => $info]);
        print_r($resultado);
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
