<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;

class paciente extends Model
{
    public static function cadastro($dados)
    {
        try {
            $laudo = $dados->laudo;
            $nome = $dados->nome;
            $telefone = $dados->telefone;
            $cpf = $dados->cpf;
            $info = array($cpf, $nome, $cpf);
            $sucesso = DB::insert('insert into paciente (identificadorPaciente, nome, cpf) values (?, ?, ?)', $info);
            if ($sucesso == true)
                return 1;
            else
                return -1;
        }
        catch(QueryException $excecao) {
            if ($excecao->getMessage() == 1062)
                return 1062; //Chave duplicada
            else
                return -1;

        }
    }
}
