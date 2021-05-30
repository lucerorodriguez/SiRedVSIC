<?php namespace App\Controllers;

use App\Models\TesisModel;

class Tesis extends BaseController
{
    public function __construct(){
        helper('form');
    }
	public function index()
	{
        $tesisModel = new TesisModel($db);
        $all_tesis = $tesisModel->findAll();
        $tesis = array('tesis' => $all_tesis);
		return view('estructura/header').view('acciones/ListaTesis', $tesis).view('estructura/footer');
    }
    public function ver($id)
	{
        $tesisModel = new TesisModel($db);
        $all_info = $tesisModel->find($id);
        $tesis = array('tesis' => $all_info);
		return view('estructura/header').view('acciones/VerTesis', $tesis).view('estructura/footer');
    }


}

