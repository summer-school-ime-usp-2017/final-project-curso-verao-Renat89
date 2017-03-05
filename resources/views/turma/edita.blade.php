@extends('layouts.master')

@section('title', 'Edição do turma')

@section('page-header-content', 'Edição do turma')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>
        <div class="panel-body">
          <a href="/turmas">
            <span class="glyphicon glyphicon-th-list"></span> turmas
          </a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <form action="/turmas/{{$turmas->id}}" method="POST">
        {{csrf_field()}}
        {{method_field('PATCH')}} <!-- gambiarra do laravel pois o browser não entende o tipo PUT/PATCH-->

        <div class="form-group">
          <label for="periodo">Período</label>
          <input value="{{$turmas->periodo}}" name="periodo" id="periodo" type="text" class="form-control"> <!-- novo -->
        </div>

        <div class="form-group">
         <label for="nome_curso">Curso</label>
         <select name="nome_curso" id="nome_curso" type="text" class="selectpicker">
           @foreach ($cursos->all() as $curso)
             if ({{ $curso->nome }}==={{$turmas->nome_curso}})
              <option selected ="selected"> {{$curso->nome}}</option>
             else
              <option> {{$curso->nome}}</option>
            @endforeach
         </select>
       </div>

       <div class="form-group">
         <label for="nome_professor">Professor</label>
         <select name="nome_professor" id="nome_professor" type="text" class="selectpicker" >
           @foreach ($professors->all() as $professor)
           if ({{ $professor->nome }}==={{$turmas->nome_curso}})
           <option selected ="selected"> {{$professor->nome}}</option>
          else
           <option> {{$professor->nome}}</option>
         @endforeach
           </select>
         </div>


        <button class="btn btn-primary">Salvar</button>
      </form>
    </div>
  </div>
@endsection
