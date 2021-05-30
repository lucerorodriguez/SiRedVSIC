<?php namespace App\Controllers;

use App\Models\InvestigacionModel;
use App\Models\PublicacionModel;

class Novedades extends BaseController
{
    public function index()
	{
    return view('estructura/header').view('usuario/verNovedades').view('estructura/footer');
    }
    
}
