<?php namespace App\Controllers;

use App\Models\InvestigacionModel;
use App\Models\ArchivosModel;
class Investigaciones extends BaseController
{
    public function __construct(){
        helper('form');
    }
	public function index()
	{
        $investigacionModel = new InvestigacionModel($db);
        $all_investigaciones = $investigacionModel->findAll();
        $investigaciones = array('investigaciones' => $all_investigaciones);
		return view('estructura/header').view('acciones/ListaInvestigaciones', $investigaciones).view('estructura/footer');
    }
    public function ver($id)
	{
        $investigacionModel = new InvestigacionModel($db);
        $all_info = $investigacionModel->find($id);
        $data['id_investigacion'] = $id;
        $investigacion = array('investigacion' => $all_info);
        $data['investigacion'] = $all_info;
        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $data['archivos'] = $list_archivos;
		return view('estructura/header').view('acciones/VerInvestigacion', $data).view('estructura/footer');
    }
    public function busqueda()
	{
        $investigacionModel = new InvestigacionModel($db);

        $request = \Config\Services::request();
        $data = array(
            'oracion'=>$request->getPostGet('oracion'),
            'filtro'=>$request->getPostGet('filtro')
        );
        if($data['filtro'] == 'nombre_proyecto'){
            $all_investigaciones = $investigacionModel->where('nombre_proyecto', $data['oracion'] )->findAll();
            $investigaciones = array('investigaciones' => $all_investigaciones);
            return view('estructura/header').view('acciones/ListaInvestigaciones', $investigaciones).view('estructura/footer');
        } if($data['filtro'] == 'objetivos'){
            $all_investigaciones = $investigacionModel->where('objetivos', $data['oracion'] )->findAll();
            $investigaciones = array('investigaciones' => $all_investigaciones);
            return view('estructura/header').view('acciones/ListaInvestigaciones', $investigaciones).view('estructura/footer');
            
        }if($data['filtro'] == 'descripcion'){
            $all_investigaciones = $investigacionModel->where('descripcion', $data['oracion'] )->findAll();
            $investigaciones = array('investigaciones' => $all_investigaciones);
            return view('estructura/header').view('acciones/ListaInvestigaciones', $investigaciones).view('estructura/footer');
        
    }
    }
    public function gestionarArchivos()
    {
        $request = \Config\Services::request();
        $id = $request->getPostGet('id_investigacion');
        $data['id_investigacion'] = $id;
        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $data['archivos'] = $list_archivos;
        return view('estructura/header').view('usuario/gestionarArchivos', $data).view('estructura/footer');
    }
}
