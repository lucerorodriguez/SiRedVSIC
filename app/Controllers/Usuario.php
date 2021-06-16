<?php
namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\PublicacionModel;
use App\Models\InvestigacionModel;
use App\Models\MensajesModel;
use App\Models\SitiosModel;
use App\Models\TesisModel;
use CodeIgniter\I18n\Time;

use App\Models\ArchivosModel;
use App\Models\AutoresModel;


class Usuario extends BaseController
{
    public $session = null;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function crear()
    {
        return view('estructura/header') . view('acciones/RegistroUsuario') . view('estructura/footer');
    }
    public function guardar()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();
        $data = array(
            'nombre' => $request->getPostGet('nombre'),
            'lgac' => $request->getPostGet('lgac'),
            'linea_investigacion' => $request->getPostGet('linea_investigacion'),
            'institucion' => $request->getPostGet('institucion'),
            'proyectos_vigentes' => $request->getPostGet('proyectos_vigentes'),
            'correo' => $request->getPostGet('correo'),
            'telefono' => $request->getPostGet('telefono'),
            'rol' => 2,
            'contrasena' => 'pendiente',
            'estado' => 'pendiente',
            'foto_perfil' => '',
            'area_adscripcion' => $request->getPostGet('area_adscripcion'),
            'formacion_academica' => $request->getPostGet('formacion_academica'),
            'area_conocimiento' => $request->getPostGet('area_conocimiento'),
            'sni_nivel' => $request->getPostGet('sni_nivel'),
            'perfil_deseable' => $request->getPostGet('perfil_deseable')
        );
        $usuariosModel->insert($data);
        return view('estructura/header') . view('estructura/inicio') . view('estructura/footer');
    }

    public function auth()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();

        $data = array(
            'email' => $request->getPostGet('correo'),
            'contrasena' => $request->getPostGet('contrasena')
        );
        $usuario = $usuariosModel->where('correo', $data['email'])->findAll();
        $data_user = array('data_user' => $usuario);

        $datos_usuario = array(
            'id_usuario' => 'vacio',
            'email' => 'vacio',
            'contrasena' => 'vacio',
            'nombre' => 'vacio',
            'rol' => 'rol'
        );
        foreach ($usuario as $user) {
            $datos_usuario['id_usuario'] = $user['id_usuario'];
            $datos_usuario['email'] = $user['correo'];
            $datos_usuario['contrasena'] = $user['contrasena'];
            $datos_usuario['nombre'] = $user['nombre'];
            $datos_usuario['rol'] = $user['rol'];
            $datos_usuario['estado'] = $user['estado'];
        }

        if ($data['email'] == $datos_usuario['email'] && $datos_usuario['estado'] == 'miembro') {
            if ($data['contrasena'] == $datos_usuario['contrasena']) {
                $this->session->set($datos_usuario);
                return view('estructura/header') . view('estructura/inicio') . view('estructura/footer');
            } else {
                return view('estructura/header') . view('estructura/inicio') . view('estructura/footer');
            }
        } else {
            return view('estructura/header') . view('estructura/inicio') . view('estructura/footer');
        }
    }
    public function cerrar()
    {
        $this->session->destroy();
        return redirect()->to('/SiRedVSIC/');
    }
    public function modificar()
    {
        $usuariosModel = new UsuariosModel($db);
        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('usuario/updateperfil', $data_user) . view('estructura/footer');
    }
    public function update()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();
        $id_usuario = $this->session->get('id_usuario');
        $data = array(
            'nombre' => $request->getPostGet('nombre'),
            'lgac' => $request->getPostGet('lgac'),
            'linea_investigacion' => $request->getPostGet('linea_investigacion'),
            'proyectos_vigentes' => $request->getPostGet('proyectos_vigentes'),
            'telefono' => $request->getPostGet('telefono'),
            'area_adscripcion' => $request->getPostGet('area_adscripcion'),
            'formacion_academica' => $request->getPostGet('formacion_academica'),
            'area_conocimiento' => $request->getPostGet('area_conocimiento'),
            'sni_nivel' => $request->getPostGet('sni_nivel'),
            'perfil_deseable' => $request->getPostGet('perfil_deseable')
        );
        
        $usuariosModel->update($id_usuario, $data);
        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('usuario/perfil', $data_user) . view('estructura/footer');
    }

    public function updatePerfil()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();
        $id_usuario = $this->session->get('id_usuario');
        $data = array(
            'lgac' => $request->getPostGet('lgac'),
            'linea_investigacion' => $request->getPostGet('linea_investigacion'),
            'proyectos_vigentes' => $request->getPostGet('proyectos_vigentes'),
            'telefono' => $request->getPostGet('telefono'),
            'area_adscripcion' => $request->getPostGet('area_adscripcion'),
            'formacion_academica' => $request->getPostGet('formacion_academica'),
            'area_conocimiento' => $request->getPostGet('area_conocimiento'),
            'sni_nivel' => $request->getPostGet('sni_nivel'),
            'perfil_deseable' => $request->getPostGet('perfil_deseable')
        );
        
        $usuariosModel->update($id_usuario, $data);
        
        return $this->response->setJSON("1");
    }

    public function verPerfil()
    {
        $usuariosModel = new UsuariosModel($db);
        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('usuario/perfil', $data_user) . view('estructura/footer');
    }
    public function AgregarFoto(){
        $usuariosModel = new usuariosModel($db);
        $request = \Config\Services::request();
        $id_usuario = $this->session->get('id_usuario');
        $repositorio = './uploads/users_photos/';
        if (!file_exists($repositorio)) {
            mkdir($repositorio, 0777, true);
        }
        $ruta = '';
        $file = $this->request->getFile('archivo');
        if ($file->isValid() && ! $file->hasMoved()  && $file != "")
        {
            $newName = $file->getRandomName();
            $nombre = strval($id_usuario).'_'.$newName;
            $file->move($repositorio, $nombre);
            $ruta = '/uploads/users_photos/'.$nombre;
            $data = array(
                'foto_perfil'=> $ruta
            );
            $usuariosModel->update( $id_usuario, $data);

            $ruta_vieja = ".".$request->getPostGet('archivo_viejo');
            if (file_exists($ruta_vieja) && $ruta_vieja !="./uploads/users_photos/user_default.jpg") {
                unlink($ruta_vieja);
            }
        }
       

        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        $respuesta = "1";
        return $this->response->setJSON($respuesta);
        }
    
    public function listaPublicaciones()
    {
        $publicacionModel = new PublicacionModel($db);
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $publicacionModel->where('id_usuario', $id_usuario)->findAll();
        $publicaciones = array('publicaciones' => $all_info);
        return view('estructura/header').view('usuario/listapublicaciones', $publicaciones).view('estructura/footer');
    }
    public function listaInvestigaciones()
    {
        $investigacionModel = new InvestigacionModel($db);
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $investigacionModel->where('id_usuario', $id_usuario)->findAll();
        $investigaciones = array('investigaciones' => $all_info);
        return view('estructura/header').view('usuario/listainvestigaciones', $investigaciones).view('estructura/footer');
    }
    ////Apartado de Tesis
    public function listaTesis(){
        $tesisModel = new TesisModel($db);
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $tesisModel->where('id_usuario', $id_usuario)->findAll();
        $tesis = array('tesis' => $all_info);
        return view('estructura/header').view('usuario/listatesis', $tesis).view('estructura/footer');
        }
    public function crearTesis(){
        return view('estructura/header').view('usuario/crearTesis').view('estructura/footer');
        }
    public function verTesis($id){
        $tesisModel = new TesisModel($db);
        $all_info = $tesisModel->find($id);
        $tesis = array('tesis' => $all_info);
		return view('estructura/header').view('usuario/VerTesis', $tesis).view('estructura/footer');
        }

    public function saveTesis(){
            $id_usuario = $this->session->get('id_usuario');
            $repositorio = './uploads/tesis_'.$id_usuario."/";
            if (!file_exists($repositorio)) {
                mkdir($repositorio, 0777, true);
            }
            $fecha = date("Y-m-d H:i:s");
            $tesisModel = new TesisModel($db);
            $request = \Config\Services::request();
            $id_usuario = $this->session->get('id_usuario');
            $ruta = '';
            $name = '';
            $file = $this->request->getFile('archivo');
            if ($file->isValid() && ! $file->hasMoved())
            {
                $name = $file->getName();
                $newName = $file->getRandomName();
                $nombre = strval($id_usuario).'_'.$newName;
                $file->move($repositorio, $nombre);
                $ruta = $repositorio.$nombre;
            }
            $data = array(
                'asesor'=>$request->getPostGet('asesor'),
                'tesista'=>$request->getPostGet('tesista'),
                'tema_tesis'=>$request->getPostGet('tema_tesis'),
                'area_conocimiento'=>$request->getPostGet('area_conocimiento'),
                'descripcion'=>$request->getPostGet('descripcion'),
                'comentarios'=>$request->getPostGet('comentarios'),
                'id_usuario'=> $id_usuario,
                'ruta_documento'=> $ruta,
                'nombre_documento'=> $name
            );
            $tesisModel->insert($data);
    
            return $this->response->setJSON("1");
        }

    public function eliminarTesis(){
        $tesisModel = new TesisModel($db);
        $request = \Config\Services::request();
        $id = $request->getPostGet('id_tes');
        $ruta = $request->getPostGet('r_archivo');
        if (file_exists($ruta)) {
            unlink($ruta);
            $tesisModel->where('id_tesis', $id)->delete();
        }
        return $this->response->setJSON("1");
        }

    public function updateTesis(){
        $TesisModel = new TesisModel($db);

        $request = \Config\Services::request();

        $id_usuario = $this->session->get('id_usuario');
        $repositorio = './uploads/tesis_'.$id_usuario."/";
        if (!file_exists($repositorio)) {
            mkdir($repositorio, 0777, true);
        }
        $ruta = '';
        $name = '';
        $file = $this->request->getFile('archivo');
        if ($file->isValid() && ! $file->hasMoved())
        {
            $name = $file->getName();
            $newName = $file->getRandomName();
            $nombre = strval($id_usuario).'_'.$newName;
            $file->move($repositorio, $nombre);
            $ruta = $repositorio.$nombre;
            $ruta_documentoViejo = $request->getPostGet('ruta_documento_actual');
            if (file_exists($ruta_documentoViejo)) {
                unlink($ruta_documentoViejo);
            }
        }
        $Nueva_Ruta = $request->getPostGet('ruta_documento_actual');
        $Nueva_Nombre = $request->getPostGet('nombre_documento_actual');
        if($ruta != ''){
            $Nueva_Ruta = $ruta;
            $Nueva_Nombre = $name;
        };
        $data = array(
            'asesor'=>$request->getPostGet('asesor'),
            'tesista'=>$request->getPostGet('tesista'),
            'tema_tesis'=>$request->getPostGet('tema_tesis'),
            'area_conocimiento'=>$request->getPostGet('area_conocimiento'),
            'descripcion'=>$request->getPostGet('descripcion'),
            'comentarios'=>$request->getPostGet('comentarios'),
            'ruta_documento'=> $Nueva_Ruta,
            'nombre_documento'=> $Nueva_Nombre
        );
        $id_tesis = $request->getPostGet('id_tesis');
        $TesisModel->update( $id_tesis, $data);

        return $this->response->setJSON("1");
        }

    public function getAutores(){
        $autoresModel = new AutoresModel($db);
        $all_Autores = $autoresModel->findAll();
        $autores = array('autores' => $all_Autores);
		return $this->response->setJSON($autores);
        }

    public function autorPorNombre(){
        $request = \Config\Services::request();
        $nombre = $request->getPostGet('nombre');

        $autoresModel = new AutoresModel($db);
        $datos_autor = $autoresModel->where('nombre', $nombre)->findAll();
        $autor = array('autor' => $datos_autor);
		return $this->response->setJSON($datos_autor);
        }
    
    public function crearPublicacion(){
    return view('estructura/header').view('usuario/crearPublicacion').view('estructura/footer');
    }
    public function crearInvestigacion(){
        return view('estructura/header').view('usuario/crearInvestigacion').view('estructura/footer');
    }
    


    ////insertar en la base de datos la publicacion
    public function guardarPublicacion(){
        $publicacionModel = new PublicacionModel($db);

        $request = \Config\Services::request();
        $cadena_nombres = $request->getPostGet('autores');
        $array_nombres = explode(",", $cadena_nombres);
        $autoresModel = new AutoresModel($db);
        for ($i = 0; $i < count($array_nombres); $i++) {
            $datos_autor = $autoresModel->where('nombre', $array_nombres[$i])->findAll();
            if($datos_autor == null){
                $data = array(
                    'nombre'=>$array_nombres[$i]
                );
                $autoresModel->insert($data);
            }
        }

        $id_usuario = $this->session->get('id_usuario');
        $data = array(
            'autores'=>$cadena_nombres,
            'titulo'=>$request->getPostGet('titulo'),
            'tema'=>$request->getPostGet('tema'),
            'albitraje'=>$request->getPostGet('albitraje'),
            'indexacion'=>$request->getPostGet('indexacion'),
            'descripcion'=>$request->getPostGet('descripcion'),
            'url'=>$request->getPostGet('url'),
            'id_usuario'=>$id_usuario,
            'fecha'=>$request->getPostGet('fecha')
        );
        $publicacionModel->insert($data);
        $all_info = $publicacionModel->where('id_usuario', $id_usuario)->findAll();
        $publicaciones = array('publicaciones' => $all_info);
        return view('estructura/header').view('usuario/listapublicaciones', $publicaciones).view('estructura/footer');
    }
        ////insertar en la base de datos la investigación
    public function guardarInvestigacion(){
        $id_usuario = $this->session->get('id_usuario');
        $repositorio = './uploads/'.$id_usuario."/";
        if (!file_exists($repositorio)) {
            mkdir($repositorio, 0777, true);
        }
        $fecha = date("Y-m-d H:i:s");
        $investigacionModel = new InvestigacionModel($db);
        $request = \Config\Services::request();
        $id_usuario = $this->session->get('id_usuario');
        $data = array(
            'nombre_proyecto'=>$request->getPostGet('nombre_proyecto'),
            'objetivos'=>$request->getPostGet('objetivos'),
            'descripcion'=>$request->getPostGet('descripcion'),
            'programas'=>$request->getPostGet('programas'),
            'requisitos'=>$request->getPostGet('requisitos'),
            'id_usuario'=>$id_usuario,
            'fecha'=> $fecha
        );
        $value = 0;
        $investigacionModel->insert($data);
        $basedatos = \Config\Database::connect();
        $builder = $basedatos->table('investigaciones');
        $query = $builder->select('id_investigacion')
                 ->where('id_usuario', $id_usuario)
                 ->orderBy('fecha', 'DESC')
                 ->limit(1)
                 ->get();
                 foreach ($query->getResult() as $row)
                {
                    $value = $row->id_investigacion;
                }
        if($files = $this->request->getFiles())
        {
           foreach($files['archivo'] as $arc)
           {
              if ($arc->isValid() && ! $arc->hasMoved())
              {
                $name = $arc->getName();
                $newName = $arc->getRandomName();
                $nombre = strval($value).'_'.$newName;
                $arc->move($repositorio, $nombre);
                $ruta = $repositorio.$nombre;
                $ArchivosModel = new ArchivosModel($db);
                $data = array(
                    'id_investigacion'=>$value,
                    'ruta'=>$ruta,
                    'nombre'=>$name
                );
                 $ArchivosModel->insert($data);
              }
           }
        }

        $all_info = $investigacionModel->where('id_usuario', $id_usuario)->findAll();
        $investigaciones = array('investigaciones' => $all_info);
        return view('estructura/header').view('usuario/listainvestigaciones', $investigaciones).view('estructura/footer');
        }
 public function guardarArchivos(){
    $ArchivosModel = new ArchivosModel($db);

        $request = \Config\Services::request();
        $id = $request->getPostGet('id_investigacion');

        $id_usuario = $this->session->get('id_usuario');
        $repositorio = './uploads/'.$id_usuario."/";
        if (!file_exists($repositorio)) {
            mkdir($repositorio, 0777, true);
        }
        
        if($files = $this->request->getFiles())
        {
           foreach($files['archivo'] as $arc)
           {
              if ($arc->isValid() && ! $arc->hasMoved())
              {
                $name = $arc->getName();
                $newName = $arc->getRandomName();
                $nombre = strval($id).'_'.$newName;
                $arc->move($repositorio, $nombre);
                $ruta = $repositorio.$nombre;
                
                $data = array(
                    'id_investigacion'=>$id,
                    'ruta'=>$ruta,
                    'nombre'=>$name
                );
                 $ArchivosModel->insert($data);
              }
           }
        }
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $data['id_investigacion'] = $id;
        $data['archivos'] = $list_archivos;
        return view('estructura/header').view('usuario/gestionarArchivos', $data).view('estructura/footer');
        }

    public function verPublicacion($id)
    {
        $publicacionModel = new PublicacionModel($db);
        $all_info = $publicacionModel->find($id);
        $publicacion = array('publicacion' => $all_info);
		return view('estructura/header').view('usuario/VerPublicacion', $publicacion).view('estructura/footer');
    }

    public function verInvestigacion($id)
    {
        $investigacionModel = new InvestigacionModel($db);
        $all_info = $investigacionModel->find($id);
        $investigacion = array('investigacion' => $all_info);
        $data['investigacion'] = $all_info;
        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $archivos = array('archivos' => $list_archivos);
        $data['archivos'] = $list_archivos;
		return view('estructura/header').view('usuario/VerInvestigacion', $data).view('estructura/footer');
    }

    

    public function gestionarArchivos($id)
    {
        $data['id_investigacion'] = $id;
        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $data['archivos'] = $list_archivos;
        return view('estructura/header').view('usuario/gestionarArchivos', $data).view('estructura/footer');
    }

    public function downloadArchivo()
    {
        $request = \Config\Services::request();
        $ruta = $request->getPostGet('ruta');
        return $this->response->download($ruta, null);
    }
    public function eliminarArchivo()
    {
        $ArchivosModel = new ArchivosModel($db);
        $request = \Config\Services::request();
        $ruta = $request->getPostGet('ruta');
        if (file_exists($ruta)) {
            unlink($ruta);
            $ArchivosModel->where('ruta', $ruta)->delete();
        }
        $id = $request->getPostGet('id_in');
        $data['id_investigacion'] = $id;
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $data['archivos'] = $list_archivos;
        return view('estructura/header').view('usuario/gestionarArchivos', $data).view('estructura/footer');
    }
    public function modificarPublicacion($id)
    {
        $publicacionModel = new PublicacionModel($db);
        $all_info = $publicacionModel->find($id);
        $publicacion = array('publicacion' => $all_info);
		return view('estructura/header').view('usuario/updatePublicacion', $publicacion).view('estructura/footer');
    }

    public function modificarInvestigacion($id)
    {
        $investigacionModel = new InvestigacionModel($db);
        $all_info = $investigacionModel->find($id);
        $data['investigacion'] = $all_info;
        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id)->findAll();
        $data['archivos'] = $list_archivos;
		return view('estructura/header').view('usuario/updateInvestigacion', $data).view('estructura/footer');
    }

    public function updatePublicacion()
    {
        $publicacionModel = new PublicacionModel($db);

        $request = \Config\Services::request();

        $cadena_nombres = $request->getPostGet('autores');
        $array_nombres = explode(",", $cadena_nombres);
        $autoresModel = new AutoresModel($db);
        for ($i = 0; $i < count($array_nombres); $i++) {
            $datos_autor = $autoresModel->where('nombre', $array_nombres[$i])->findAll();
            if($datos_autor == null){
                $data = array(
                    'nombre'=>$array_nombres[$i]
                );
                $autoresModel->insert($data);
            }
        }

        $data = array(
            'autores'=>$cadena_nombres,
            'titulo'=>$request->getPostGet('titulo'),
            'tema'=>$request->getPostGet('tema'),
            'albitraje'=>$request->getPostGet('albitraje'),
            'indexacion'=>$request->getPostGet('indexacion'),
            'descripcion'=>$request->getPostGet('descripcion'),
            'url'=>$request->getPostGet('url'),
            'fecha'=>$request->getPostGet('fecha')
           
        );
        $id_publicacion = $request->getPostGet('id_publicacion');
        $publicacionModel->update( $id_publicacion, $data);
        $publicacionModel = new PublicacionModel($db);
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $publicacionModel->where('id_usuario', $id_usuario)->findAll();
        $publicaciones = array('publicaciones' => $all_info);
        return view('estructura/header').view('usuario/listapublicaciones', $publicaciones).view('estructura/footer');
    }

    public function updateInvestigacion()
    {
        $investigacionModel = new InvestigacionModel($db);

        $request = \Config\Services::request();
        $data = array(
            'objetivos'=>$request->getPostGet('objetivos'),
            'descripcion'=>$request->getPostGet('descripcion'), 
            'programas'=>$request->getPostGet('programas'),
            'requisitos'=>$request->getPostGet('requisitos')
        );
        $id_investigacion = $request->getPostGet('id_investigacion');
        $investigacionModel->update( $id_investigacion, $data);

        $id_usuario = $this->session->get('id_usuario');
        $repositorio = './uploads/'.$id_usuario."/";
        if (!file_exists($repositorio)) {
            mkdir($repositorio, 0777, true);
        }
        $fecha = date("Y-m-d H:i:s");
        if($files = $this->request->getFiles())
        {
           foreach($files['archivo'] as $arc)
           {
              if ($arc->isValid() && ! $arc->hasMoved())
              {
                $name = $arc->getName();
                $newName = $arc->getRandomName();
                $nombre = strval($id_investigacion).'_'.$newName;
                $arc->move($repositorio, $nombre);
                $ruta = $repositorio.$nombre;
                $ArchivosModel = new ArchivosModel($db);
                $data = array(
                    'id_investigacion'=>$id_investigacion,
                    'ruta'=>$ruta,
                    'nombre'=>$name
                );
                 $ArchivosModel->insert($data);
              }
           }
        }
        $all_info = $investigacionModel->find($id_investigacion);
        $data['investigacion'] = $all_info;
        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id_investigacion)->findAll();
        $data['archivos'] = $list_archivos;
        return view('estructura/header').view('usuario/VerInvestigacion', $data).view('estructura/footer');
    }
    public function eliminar($id)
    {
        $publicacionModel = new PublicacionModel($db);
        $publicacionModel->where('id_publicacion', $id)->delete();
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $publicacionModel->where('id_usuario', $id_usuario)->findAll();
        $publicaciones = array('publicaciones' => $all_info);
        return view('estructura/header').view('usuario/listapublicaciones', $publicaciones).view('estructura/footer');

    }

    public function eliminarInvestigacion()
    {
        $request = \Config\Services::request();
        $id_investigacion = $request->getPostGet('id_in');
        $investigacionModel = new InvestigacionModel($db);
        $investigacionModel->where('id_investigacion', $id_investigacion)->delete();

        $ArchivosModel = new ArchivosModel($db);
        $list_archivos = $ArchivosModel->where('id_investigacion', $id_investigacion)->findAll();
        foreach ($list_archivos as $archivo) {
            if (file_exists($archivo['ruta'])) {
            unlink($archivo['ruta']);
            $ArchivosModel->where('ruta', $archivo['ruta'])->delete();
            }
        }

        $id_usuario = $this->session->get('id_usuario');
        $all_info = $investigacionModel->where('id_usuario', $id_usuario)->findAll();
        $investigaciones = array('investigaciones' => $all_info);
        return view('estructura/header').view('usuario/listainvestigaciones', $investigaciones).view('estructura/footer');

    }

    public function mensaje()
    {
        $mensajesModel = new MensajesModel($db);
        $request = \Config\Services::request();
        $data = array(
            'nombre_usuario' => $request->getPostGet('nombre_usuario'),
            'email' => $request->getPostGet('email'),
            'telefono' => $request->getPostGet('telefono'),
            'mensaje' => $request->getPostGet('mensaje')
        );
        $mensajesModel->insert($data);
        return view('estructura/header') . view('estructura/inicio') . view('estructura/footer');
    }


    //Vista Sitios de Interes//
    public function listaSitios()
    {
        $sitiosModel = new SitiosModel($db);
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $sitiosModel->where('id_usuario', $id_usuario)->findAll();
        $sitios = array('sitios' => $all_info);
        return view('estructura/header').view('usuario/listasitios', $sitios).view('estructura/footer');
    }
    public function crearSitio(){
        return view('estructura/header').view('usuario/crearSitio').view('estructura/footer');
    }
    public function guardarSitio(){
        $sitiosModel = new SitiosModel($db);

        $request = \Config\Services::request();
        $id_usuario = $this->session->get('id_usuario');
        $data = array(
            'nombre_sitio'=>$request->getPostGet('nombre_sitio'),
            'categoria'=>$request->getPostGet('categoria'),
            'descripcion'=>$request->getPostGet('descripcion'),
            'url'=>$request->getPostGet('url'),
            'id_usuario'=>$id_usuario
        );
        $sitiosModel->insert($data);
        return $this->response->setJSON("1");
    }
    public function verSitio($id)
    {
        $sitioModel = new SitiosModel($db);
        $all_info = $sitioModel->find($id);
        $sitio = array('sitio' => $all_info);
		return view('estructura/header').view('usuario/VerSitio', $sitio).view('estructura/footer');
    }
    public function eliminarSitio($id)
    {
        $sitiosModel = new SitiosModel($db);
        $sitiosModel->where('id_sitio', $id)->delete();
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $sitiosModel->where('id_usuario', $id_usuario)->findAll();
        $sitios = array('sitios' => $all_info);
        return view('estructura/header').view('usuario/listasitios', $sitios).view('estructura/footer');

    }
    public function modificarSitio($id)
    {
        $sitioModel = new SitiosModel($db);
        $all_info = $sitioModel->find($id);
        $sitio = array('sitio' => $all_info);
		return view('estructura/header').view('usuario/updateSitio', $sitio).view('estructura/footer');
    }
    public function updateSitio()
    {
        $sitioModel = new SitiosModel($db);

        $request = \Config\Services::request();
        $data = array(
            'nombre_sitio'=>$request->getPostGet('nombre_sitio'),
            'categoria'=>$request->getPostGet('categoria'), 
            'descripcion'=>$request->getPostGet('descripcion'),
            'url'=>$request->getPostGet('url')
           
        );
        $id_sitio = $request->getPostGet('id_sitio');
        $sitioModel->update( $id_sitio, $data);
        $sitioModel = new SitiosModel($db);
        $id_usuario = $this->session->get('id_usuario');
        $all_info = $sitioModel->where('id_usuario', $id_usuario)->findAll();
        $sitios = array('sitios' => $all_info);
        return view('estructura/header').view('usuario/listasitios', $sitios).view('estructura/footer');
    }

}
