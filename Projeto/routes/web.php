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
//Rota home
Route::get('/', 'HomeController@index');

//Rotas cadastro
Route::get('/cadastro/paciente', 'CadastroController@paciente');
Route::get('/cadastro/cirurgia', 'CadastroController@cirurgia');
//Route::get('/cadastro/medico', 'CadastroController@medico');
//Route::get('/cadastro/sala', 'CadastroController@sala');

//Rotas busca
Route::get('/busca/medico', 'BuscaController@medico');
Route::get('/busca/enfermeiro', 'BuscaController@enfermeiro');
Route::get('/busca/paciente', 'BuscaController@paciente');
Route::get('/busca/especialidade', 'BuscaController@especialidade');
