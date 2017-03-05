@extends('layouts.master')

@section('title', 'Edição do curso')

@section('page-header-content', 'Edição do curso')

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
      @if(count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $message)
          <li>{{ $message }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action="/cursos/{{$cursos->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}} <!-- gambiarra do laravel pois o browser não entende o tipo PUT/PATCH-->

        <div class="form-group">
          <label for="nome">Nome</label>
          <input value="{{$cursos->nome}}" name="nome" id="nome" type="text" class="form-control"> <!-- novo -->
        </div>
        <div class="form-group">
          <label for="descricao">Descrição</label>
          <input value="{{$cursos->descricao}}" name="descricao" id="descricao" type="text" class="form-control"> <!-- novo -->
        </div>
        <div class="form-group">
          <label for="cargaHoraria">Carga Horária</label>
          <input value="{{$cursos->cargaHoraria}}" name="cargaHoraria" id="cargaHoraria" type="number" class="form-control"> <!-- novo -->
        </div>

        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
