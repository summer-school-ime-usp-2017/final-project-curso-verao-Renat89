<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    //
    public function index()
    {
      $cursos = Curso::all();
      return view('curso.index', compact('cursos'));
    }

    public function cria()
    {
      return view('curso.cria');
    }

    public function armazena()
    {
      Curso::create(request()->all());

      return redirect('/cursos');
    }

}
