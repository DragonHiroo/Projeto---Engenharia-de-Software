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
Route::get('/busca/medico/{crm}', 'BuscaController@visualiza_cirurgias_medico');
Route::get('/busca/enfermeiro', 'BuscaController@enfermeiro');
Route::get('/busca/enfermeiro/{corem}', 'BuscaController@visualiza_cirurgias_enfermeiro');
Route::get('/busca/paciente', 'BuscaController@paciente');
Route::get('/busca/paciente/{cpf}', 'BuscaController@visualiza_cirurgias_paciente');
Route::get('/busca/especialidade', 'BuscaController@especialidade');

//Rotas agendamento
Route::get('/agendamento', 'AgendamentoController@visualizar');
Route::get('/agendamento/remocao/{cpf_paciente}/{data}', 'AgendamentoController@remover_agendamento');
Route::get('/agendamento/alteracao/{cpf_paciente}/{data}', 'AgendamentoController@alterar_agendamento');
Route::post('/agendamento/alteracao/{cpf_paciente}/{data}', 'AgendamentoController@alterar_registro');
//Route::get('/agendamento/remover/', 'AgendamentoController@lixo');
//Route::get('/agendamento/lixo', 'AgendamentoController@visualizar');

//Rotas relatório
Route::get('/relatorio/cirurgias', 'RelatorioController@cirurgias');
Route::get('/relatorio/especialidades', 'RelatorioController@especialidades');
