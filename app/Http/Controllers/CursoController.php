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
      $this->validate(request(), [
        'nome' => 'required|min:2|max:255',
        'descricao' => 'required|descricao',
        'cargaHoraria' => 'required|cargaHoraria'        
      ]);

      Curso::create(request()->all());

      return redirect('/cursos');
    }

    public function edita($id)
  {
    $cursos = Curso::find($id);  //Procurar o curso
    return view('curso.edita', compact('cursos')); //pode usar curso/edita
  }

  public function atualiza($id)
  {
    $cursos = Curso::find($id);
    $cursos->fill(request()->all());
    $cursos->save();
    //$valores = collect(request()->all());
    //$valorea->pull('email');
    //dd($valores->all());
    return redirect('/cursos');
  }


}
