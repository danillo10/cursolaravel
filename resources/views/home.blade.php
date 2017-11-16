@extends('layout.site')

@section('titulo','Contatos')

@section('conteudo')

<div class="container">
    <h1>Lista de Cursos</h1>
    <div class="row">
        @foreach($cursos as $curso)
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="{{asset($curso->image)}}">
            </div>
            <div class="card-content">
              <span class="card-title">{{$curso->titulo}}</span>
              <p>{{$curso->descricao}}</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        @endforeach
    </div>

    <ul class="pagination">
        <li class="waves-effect">{{$cursos->links()}}</li>
    </ul>
            
</div>

@endsection 