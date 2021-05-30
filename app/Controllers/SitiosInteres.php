<?php namespace App\Controllers;

use App\Models\SitiosModel;

class SitiosInteres extends BaseController
{
    public function __construct(){
        helper('form');
    }
	public function index()
	{
        $sitioModel = new SitiosModel($db);
        $all_sitios = $sitioModel->findAll();
        $sitios = array('sitios' => $all_sitios);
		return view('estructura/header').view('acciones/ListaSitio', $sitios).view('estructura/footer');
    }
    public function ver($id)
	{
        $sitioModel = new sitiosModel($db);
        $all_info = $sitioModel->find($id);
        $sitio = array('sitio' => $all_info);
		return view('estructura/header').view('acciones/VerSitio', $sitio).view('estructura/footer');
    }
   /* public function busqueda()
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
       
    }*/

}

