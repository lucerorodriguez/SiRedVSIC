<?php namespace App\Controllers;

use App\Models\PublicacionModel;

class Publicaciones extends BaseController
{
    public function __construct(){
        helper('form');
    }
	public function index()
	{
        $publicacionModel = new PublicacionModel($db);
        $all_publicaciones = $publicacionModel->findAll();
        $publicaciones = array('publicaciones' => $all_publicaciones);
		return view('estructura/header').view('acciones/ListaPublicaciones', $publicaciones).view('estructura/footer');
    }
    public function ver($id)
	{
        $publicacionModel = new PublicacionModel($db);
        $all_info = $publicacionModel->find($id);
        $publicacion = array('publicacion' => $all_info);
		return view('estructura/header').view('acciones/VerPublicacion', $publicacion).view('estructura/footer');
    }
    public function busqueda()
	{
        $publicacionModel = new PublicacionModel($db);

        $request = \Config\Services::request();
        $data = array(
            'oracion'=>$request->getPostGet('oracion'),
            'filtro'=>$request->getPostGet('filtro')
        );
        if($data['filtro'] == 'titulo'){
            $all_publicaciones = $publicacionModel->where('titulo', $data['oracion'] )->findAll();
            $publicaciones = array('publicaciones' => $all_publicaciones);
            return view('estructura/header').view('acciones/ListaPublicaciones', $publicaciones).view('estructura/footer');
        } if($data['filtro'] == 'tema'){
            $all_publicaciones = $publicacionModel->where('tema', $data['oracion'] )->findAll();
            $publicaciones = array('publicaciones' => $all_publicaciones);
            return view('estructura/header').view('acciones/ListaPublicaciones', $publicaciones).view('estructura/footer');
            
        }if($data['filtro'] == 'autores'){
            $all_publicaciones = $publicacionModel->where('autores', $data['oracion'] )->findAll();
            $publicaciones = array('publicaciones' => $all_publicaciones);
            return view('estructura/header').view('acciones/ListaPublicaciones', $publicaciones).view('estructura/footer');
        
    }
       
    }

}

