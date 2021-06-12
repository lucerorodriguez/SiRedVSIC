<?php namespace App\Controllers;

use App\Models\UsuariosModel;

class Integrantes extends BaseController
{
    public function __construct(){
        helper('form');
    }
	public function index()
	{
        $integrantesModel = new UsuariosModel($db);
        $all_integrantes = $integrantesModel->findAll();
        $integrantes = array('integrantes' => $all_integrantes);
		return view('estructura/header').view('acciones/VerIntegrantes', $integrantes).view('estructura/footer');
    }
}