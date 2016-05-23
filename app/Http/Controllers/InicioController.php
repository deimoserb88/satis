<?php

namespace SATIS\Http\Controllers;

use Illuminate\Http\Request;

use SATIS\Http\Requests;

class InicioController extends Controller
{
   
	public function inicio(){
		$activo = true;//esto activara o desactivara la encuesta
		return view('welcome')->with('activo',$activo);
	}

}
