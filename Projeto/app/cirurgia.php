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