<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\paciente;
use App\cirurgia;

class CadastroController extends Controller
{
    public function paciente(Request $request) {
        return view('cadastro_paciente', ['res' => 0]);
    }

    public function cadastroP(Request $request) {
        $sucesso = paciente::cadastro($request);
        return view('cadastro_paciente', ['res' => $sucesso]); //Sucesso na inserção
    }
    
    public function cirurgia(Request $request) {
        return view('cadastro_cirurgia', ['res' => 0]);
    }
}
