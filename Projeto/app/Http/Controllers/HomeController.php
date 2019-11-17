<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\medico;
use App\paciente;
use App\especialidade;
use App\cirurgia;

class HomeController extends Controller
{
    public function index(){
        $cirurgias_realizadas = cirurgia::home_realizadas();
        $cirurgias_agendadas = cirurgia::home_agendadas();
        
        return view('home', ['realizadas' => $cirurgias_realizadas, 'agendadas' => $cirurgias_agendadas]);
    }
}
