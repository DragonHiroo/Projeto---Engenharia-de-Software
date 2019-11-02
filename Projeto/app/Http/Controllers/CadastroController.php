<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function paciente() {
        return view('cadastro_paciente');
    }
    
    public function cirurgia() {
        return view('cadastro_cirurgia');
    }
}
