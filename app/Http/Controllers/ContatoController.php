<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contato;

class ContatoController extends Controller
{
    
	public function index()
	{

		$contatos = [
			(object)['nome'=>'Danillo Leão Lopes', 'tel'=>'99991026245'],
			(object)['nome'=>'Samuel Fernandes Leão', 'tel'=>'00000000000']
		];
		
		$contato = new Contato();

		dd($contato->lista());
	}

	public function criar(Request $request)
	{
		dd($request->all());
		return "Esse é o criar do ContatoController";
	}

	public function editar()
	{
		return "Esse é o editar do ContatoController";
	}

}
