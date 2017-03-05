@extends('layouts.master')

@section('title', 'Cadastro de turma')

@section('page-header-content', 'Cadastro de turma')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/turmas">
            <span class="glyphicon glyphicon-th-list"></span> Turmas
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/turmas" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="periodo">Período</label>
          <input name="periodo" id="periodo" type="text" class="form-control">
        </div>

        <div class="form-group">
         <label for="nome_curso">Curso</label>
         <select name="nome_curso" id="nome_curso" type="text" class="selectpicker" >
           @foreach ($cursos->all() as $curso)
           <option>{{ $curso->nome }}</option>
             @endforeach
         </select>
       </div>

       <div class="form-group">
         <label for="nome_professor">Professor</label>
         <select name="nome_professor" id="nome_professor" type="text" class="selectpicker" >
           @foreach ($professors->all() as $professor)
           <option>{{ $professor->nome }}</option>
             @endforeach
           </select>
         </div>


        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
