@extends('layouts.master')

@section('title', 'Edição do professor')

@section('page-header-content', 'Edição do professor')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/professors">
            <span class="glyphicon glyphicon-th-list"></span> professors
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
      <form action="/professors/{{$professors->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}} <!-- gambiarra do laravel pois o browser não entende o tipo PUT/PATCH-->

        <div class="form-group">
          <label for="nome">Nome</label>
          <input value="{{$professors->nome}}" name="nome" id="nome" type="text" class="form-control"> <!-- novo -->
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input value="{{$professors->email}}" name="email" id="email" type="text" class="form-control"> <!-- novo -->
        </div>


        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
