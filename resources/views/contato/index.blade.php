@extends('layout.site')

@section('titulo','Contatos')

@section('conteudo')
<h1>Essa é a view Index que está na pasta contato.</h1>

<br>

	@foreach($contatos as $contato)

	<p>{{ $contato->nome }}</p>
	<p>{{ $contato->tel }}</p>

	@endforeach

@endsection
