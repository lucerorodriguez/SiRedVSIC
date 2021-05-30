<?php namespace App\Controllers;

class Formacion extends BaseController
{
	public function index()
	{
		return view('estructura/header').view('opciones/formacion').view('estructura/footer');
	}

	//--------------------------------------------------------------------

}