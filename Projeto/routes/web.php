<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

//Rota home
Route::get('/', 'HomeController@index');

//Rotas cadastro
Route::post('/cadastro/paciente', 'CadastroController@cadastroP');
Route::get('/cadastro/paciente', 'CadastroController@paciente');
Route::post('/cadastro/cirurgia', 'CadastroController@cadastroC');
Route::get('/cadastro/cirurgia', 'CadastroController@cirurgia');

//Rotas busca
Route::get('/busca/medico', 'BuscaController@medico');
Route::get('/busca/enfermeiro', 'BuscaController@enfermeiro');
Route::get('/busca/paciente', 'BuscaController@paciente');
Route::get('/busca/especialidade', 'BuscaController@especialidade');

//Rotas relatório
Route::get('/relatorio/cirurgias', 'RelatorioController@cirurgia');
Route::get('/relatorio/pacientes', 'RelatorioController@pacientes');
Route::get('/relatorio/especialidades', 'RelatorioController@especialidades');

//Rotas agendamento
Route::get('/agendamento', 'AgendamentoController@visualizar');
