<?php

namespace App\Models;

use CodeIgniter\Model;

class ArchivosModel extends Model
{
    protected $table      = 'archivos';
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['id_investigacion', 'ruta', 'nombre'];

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
