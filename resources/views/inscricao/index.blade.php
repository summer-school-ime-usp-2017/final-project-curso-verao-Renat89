@extends('layouts.master')

@section('title', 'Inscrições')

@section('page-header-content', 'Inscrições')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/inscricaos/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Inscrição
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Aluno</th>
            <th>ID da Turma</th>
          </tr>
        </thead>
        <tbody>
          @foreach($inscricaos as $inscricao)
            <tr>
              <td>{{ $inscricao->id }}</td>
              <td>{{ $inscricao->nome_aluno }}</td>
              <td>{{ $inscricao->id_turma }}</td>
              <td>
                <a href="/inscricaos/edita/{{$inscricao->id}}"><span class="glyphicon glyphicon-edit-"></span>Editar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
