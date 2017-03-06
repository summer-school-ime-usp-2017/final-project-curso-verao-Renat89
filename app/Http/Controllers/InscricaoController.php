<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inscricao;
use App\Turma;
use App\Aluno;

class InscricaoController extends Controller
{
  public function index()
  {
    $inscricaos = Inscricao::all();
    return view('inscricao.index', compact('inscricaos'));
  }

  public function cria()
  {
    $turmas = Turma::all();
    $alunos = Aluno::all();
    return view('inscricao.cria', compact('turmas'),compact('alunos'));
  }

  public function armazena()
  {
    Inscricao::create(request()->all());

    return redirect('/inscricaos');
  }

  public function edita($id)
  {
  $turmas = Turma::all();
  $alunos = Aluno::all();
  $inscricaos = Inscricao::find($id);
  return view('inscricao.edita', compact('inscricaos', 'turmas', 'alunos'));
  }

  public function atualiza($id)
  {
  $inscricaos = Inscricao::find($id);
  $inscricaos->fill(request()->all());
  $inscricaos->save();

  return redirect('/inscricaos');
  }

}
