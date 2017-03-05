@extends('layouts.master')

@section('title', 'alunos')

@section('page-header-content', 'alunos')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/alunos/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> aluno
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
            <th>Email</th>
            <th>Edita</th>
          </tr>
        </thead>
        <tbody>
          @foreach($alunos as $aluno)
            <tr>
              <td>{{ $aluno->id }}</td>
              <td>{{ $aluno->nome }}</td>
              <td>{{ $aluno->email }}</td>
              <td>
                <a href="/alunos/edita/{{$aluno->id}}"><span class="glyphicon glyphicon-edit-"></span>Editar</a>
              <td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
