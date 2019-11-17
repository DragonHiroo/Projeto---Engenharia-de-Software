<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class cirurgia extends Model
{
    public static function home_realizadas() {
        $cirurgias_realizadas = DB::select("SELECT * FROM cirurgia WHERE data between '31/10/2019' AND CURRENT_DATE ORDER BY data");    
        return $cirurgias_realizadas;
    }

    public static function home_agendadas() {
        $cirurgias_agendadas = DB::select("SELECT * FROM cirurgia WHERE data between CURRENT_DATE AND '01/12/2019' ORDER BY data");
        return $cirurgias_agendadas;
    }
}
