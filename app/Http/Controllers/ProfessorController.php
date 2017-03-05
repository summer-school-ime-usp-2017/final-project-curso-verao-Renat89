<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor;

class ProfessorController extends Controller
{
  public function index()
  {
    $professors = Professor::all();
    return view('professor.index', compact('professors'));
  }

  public function cria()
  {
    return view('professor.cria');
  }

  public function armazena()
  {
    $this->validate(request(), [
      'nome' => 'required|min:2|max:255',
      'email' => 'required|email',
    ]);

    Professor::create(request()->all());

    return redirect('/professors');
  }

  public function edita($id)
  {
  $professors = Professor::find($id);
  return view('professor.edita', compact('professors'));
  }

  public function atualiza($id)
  {
  $professors = Professor::find($id);
  $professors->fill(request()->all());
  $professors->save();

  return redirect('/professors');
  }

}
