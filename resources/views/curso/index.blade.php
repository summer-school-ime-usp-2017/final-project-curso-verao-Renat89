@extends('layouts.master')

@section('title', 'Cursos')

@section('page-header-content', 'Cursos')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/cursos/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Curso
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Carga Horária</th>
            <th>Edita</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cursos as $curso)
            <tr>
              <td>{{ $curso->id }}</td>
              <td>{{ $curso->nome }}</td>
              <td>{{ $curso->descricao }}</td>
              <td>{{ $curso->cargaHoraria }}</td>
              <td>
                <a href="/cursos/edita/{{$curso->id}}"><span class="glyphicon glyphicon-edit-"></span>Editar</a>
              <td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
