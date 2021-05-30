<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuariosModel extends Model
{
    protected $table      = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'grado_investigacion', 'linea_investigacion', 'institucion', 'proyectos_vigentes', 'correo', 'telefono', 'rol', 'contrasena', 'estado'];

    protected $useTimestamps = false;
    /*
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
*/
    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}
