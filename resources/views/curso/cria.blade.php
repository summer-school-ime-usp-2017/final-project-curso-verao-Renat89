@extends('layouts.master')

@section('title', 'Cadastro do curso')

@section('page-header-content', 'Cadastro do curso')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/cursos">
            <span class="glyphicon glyphicon-th-list"></span> Cursos
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/cursos" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="nome">Nome</label>
          <input name="nome" id="nome" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input name="descricao" id="descricao" type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="cargaHoraria">Carga Horária</label>
          <input name="cargaHoraria" id="cargaHoraria" type="number" class="form-control">
        </div>
        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
