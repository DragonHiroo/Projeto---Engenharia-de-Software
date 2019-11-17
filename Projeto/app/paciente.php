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
            $nome = $dados->nome;
            $telefone = $dados->telefone;
            $cpf = $dados->cpf;
            $sucesso = DB::insert("INSERT INTO paciente (nome,cpf) VALUES (:nome , :cpf );", ['nome' => $nome, 'cpf' => $cpf]);
            $sucessotel = DB::insert("INSERT into telefone(cpf_paciente, numero) values (:cpf, :telefone);", ['telefone' => $telefone, 'cpf' => $cpf]);
            if ($sucesso == true && $sucessotel == true){
                    return 1;
            }
            else
                return -1;
        }
        catch(QueryException $excecao) {
            if ($excecao->getMessage() == 23505)
                return 23505; //Chave duplicada
            else
                return -1;
        }
    }

    public static function busca($info) {
        $resultado = DB::select("SELECT cpf, nome FROM paciente WHERE cpf = :cpf ORDER BY cpf", ['cpf' => $info]);     
        return $resultado;
    }
    
    public static function busca_cirurgias($info) {
        $resultado = DB::select("SELECT * from cirurgia, paciente where cirurgia.cpf_paciente = paciente.cpf and paciente.cpf = :cpf ORDER By data", ['cpf' => $info]);     
        return $resultado;
    }

    public static function cirurgias_pacienteNome(Request $request) {
        $resultado = DB::select("SELECT * from cirurgia, paciente where cirurgia.cpf_paciente = paciente.cpf and paciente.nome like :nome ORDER By data", ['nome' => '%'.$info.'%']);     
        return $resultado;
    }

    public static function busca_pacienteTel(Request $request) {
        $resultado = DB::select("SELECT numero from paciente, telefone where paciente.cpf = :cpf and paciente.cpf = telefone.cpf_paciente", ['cpf' => $info]);     
        return $resultado;
    }

}