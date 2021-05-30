<?php namespace App\Controllers;

class Inicio extends BaseController
{
	public function index()
	{
		return view('estructura/header').view('estructura/inicio').view('estructura/footer');
	}

	//--------------------------------------------------------------------

}
