<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;

class CursoController extends Controller
{
    
	public function index()
	{
		return view('admin.cursos.index');
	}


}
