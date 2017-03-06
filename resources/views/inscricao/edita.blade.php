@extends('layouts.master')

@section('title', 'Edição de Inscrições')

@section('page-header-content', 'Edição de Inscrições')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/inscricaos">
            <span class="glyphicon glyphicon-th-list"></span> Inscrições
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/inscricaos/{{$inscricaos->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}} <!-- gambiarra do laravel pois o browser não entende o tipo PUT/PATCH-->

        <div class="form-group">
         <label for="nome_aluno">Aluno</label>
         <select name="nome_aluno" id="nome_aluno" type="text" class="selectpicker">
           @foreach ($alunos->all() as $aluno)
            <option> {{$aluno->nome}}</option>
            @endforeach
         </select>
       </div>

       <div class="form-group">
         <label for="id_turma">ID Turma</label>
         <select name="id_turma" id="id_turma" type="number" class="selectpicker" >
           @foreach ($turmas->all() as $turma)
                <option> {{$turma->id}}</option>
         @endforeach
           </select>
         </div>

        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
