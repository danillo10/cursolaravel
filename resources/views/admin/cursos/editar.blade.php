@extends('layout.site')

@section('titulo','Cursos')

@section('conteudo')

<div class="container">
	<h1>Editando Cursos</h1>
	<div class="row">
		<form action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multiplat/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="put">
			@include('admin.cursos._form');
			<button class="btn deep-orange">Atualizar</button>
		</form>
	</div>
</div>

@endsection