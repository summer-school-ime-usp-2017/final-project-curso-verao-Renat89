@extends('layouts.master')

@section('title', 'Turmas')

@section('page-header-content', 'Turmas')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/turmas/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Turma
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Período</th>
            <th>Professor</th>
            <th>Curso</th>
          </tr>
        </thead>
        <tbody>
          @foreach($turmas as $turma)
            <tr>
              <td>{{ $turma->id }}</td>
              <td>{{ $turma->periodo }}</td>
              <td>{{ $turma->nome_professor }}</td>
              <td>{{ $turma->nome_curso }}</td>
              <td>
                <a href="/turmas/edita/{{$turma->id}}"><span class="glyphicon glyphicon-edit-"></span>Editar</a>
              <td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
