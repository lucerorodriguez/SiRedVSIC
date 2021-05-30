<?php

namespace App\Controllers;

use App\Models\UsuariosModel;
use App\Models\PublicacionModel;

class admin extends BaseController
{
    public $session = null;
    public function __construct()
    {
        $this->session = \Config\Services::session();
    }
    public function perfil()
    {
        $usuariosModel = new UsuariosModel($db);
        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('admin/perfil', $data_user) . view('estructura/footer');
    }
    public function modificar()
    {
        $usuariosModel = new UsuariosModel($db);
        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('admin/updateperfil', $data_user) . view('estructura/footer');
    }
    public function update()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();
        $id_usuario = $this->session->get('id_usuario');
        $data = array(
            'nombre' => $request->getPostGet('nombre'),
            'correo' => $request->getPostGet('correo'),
            'institucion' => $request->getPostGet('institucion'),
            'telefono' => $request->getPostGet('telefono')
        );
        $usuariosModel->update($id_usuario, $data);
        $correo = $this->session->get('email');
        $usuario = $usuariosModel->where('correo', $correo)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('admin/perfil', $data_user) . view('estructura/footer');
    }
    public function listaUsuarios()
    {
        $usuariosModel = new UsuariosModel($db);
        $all_usuarios = $usuariosModel->findAll();
        $usuarios = array('usuarios' => $all_usuarios);
        return view('estructura/header') . view('admin/listaUsuarios', $usuarios) . view('estructura/footer');
    }
    public function perfilUsuario($id)
    {
        $usuariosModel = new UsuariosModel($db);
        $usuario = $usuariosModel->where('id_usuario', $id)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('admin/perfilUsuario', $data_user) . view('estructura/footer');
    }
    public function validarUsuario($id)
    {
        $usuariosModel = new UsuariosModel($db);
        $usuario = $usuariosModel->where('id_usuario', $id)->findAll();
        $data_user = array('data_user' => $usuario);
        return view('estructura/header') . view('admin/validarUsuario', $data_user) . view('estructura/footer');
    }
    public function validar()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();
        $data = array(
            'contrasena' => $request->getPostGet('contrasena'),
            'estado' => 'miembro'
        );
        $id_usuario = $request->getPostGet('id_usuario');
        $usuariosModel->update($id_usuario, $data);
        $all_usuarios = $usuariosModel->findAll();
        $usuarios = array('usuarios' => $all_usuarios);
        return view('estructura/header') . view('admin/listaUsuarios', $usuarios) . view('estructura/footer');
    }
    public function denegar()
    {
        $usuariosModel = new UsuariosModel($db);
        $request = \Config\Services::request();
        $id = $request->getPostGet('id_usuario');
        $usuariosModel->where('id_usuario', $id)->delete();
        $all_usuarios = $usuariosModel->findAll();
        $usuarios = array('usuarios' => $all_usuarios);
        return view('estructura/header') . view('admin/listaUsuarios', $usuarios) . view('estructura/footer');
    }


    //--------------------------------------------------------------------

}
