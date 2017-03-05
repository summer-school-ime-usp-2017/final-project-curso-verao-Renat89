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

Route::get('/', function () {
    return view('welcome');
});

/*Routes de cursos*/
Route::get('/cursos', 'CursoController@index');

Route::get('/cursos/cria', 'CursoController@cria');

Route::get('/cursos/edita/{id}', 'CursoController@edita');

Route::post('/cursos', 'CursoController@armazena');

Route::patch('/cursos/{id}', 'CursoController@atualiza');

/*Routes de professors*/
Route::get('/professors', 'ProfessorController@index');

Route::get('/professors/cria', 'ProfessorController@cria');

Route::get('/professors/edita/{id}', 'ProfessorController@edita');

Route::post('/professors', 'ProfessorController@armazena');

Route::patch('/professors/{id}', 'ProfessorController@atualiza');
