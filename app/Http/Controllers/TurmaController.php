<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Turma;
use App\Professor;
use App\Curso;

class TurmaController extends Controller
{
  public function index()
  {
    $turmas = Turma::all();
    return view('turma.index', compact('turmas'));
  }

  public function cria()
  {
    $professors = Professor::all();
    $cursos = Curso::all();
    return view('turma.cria', compact('professors'), compact('cursos'));
  }

  public function armazena()
  {
    Turma::create(request()->all());

    return redirect('/turmas');
  }

  public function edita($id)
  {
  $professors = Professor::all();
  $cursos = Curso::all();
  $turmas = Turma::find($id);
  return view('turma.edita', compact('turmas', 'professors', 'cursos'));
  }

  public function atualiza($id)
  {
  $turmas = Turma::find($id);
  $turmas->fill(request()->all());
  $turmas->save();

  return redirect('/turmas');
  }

}
