<?php

namespace App\Models;

use CodeIgniter\Model;

class SitiosModel extends Model
{
    protected $table      = 'sitios';
    protected $primaryKey = 'id_sitio';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_sitio', 'categoria', 'descripcion', 'url', 'id_usuario'];

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