@extends('layouts.master')

@section('title', 'professors')

@section('page-header-content', 'professors')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading"><h3 class="panel-title">Ações</h3></div>
        <div class="panel-body">
          <a href="/professors/cria">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> professor
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
          @foreach($professors as $professor)
            <tr>
              <td>{{ $professor->id }}</td>
              <td>{{ $professor->nome }}</td>
              <td>{{ $professor->email }}</td>
              <td>
                <a href="/professors/edita/{{$professor->id}}"><span class="glyphicon glyphicon-edit-"></span>Editar</a>
              <td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
