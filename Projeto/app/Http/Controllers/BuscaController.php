<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscaController extends Controller
{
    public function medico() {
        return view('busca_medico');
    }
    public function enfermeiro() {
        return view('busca_enfermeiro');
    }

    public function paciente() {
        return view('busca_paciente');
    }

    public function especialidade() {
        return view ('busca_especialidade');
    }
}
