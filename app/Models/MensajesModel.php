<?php

namespace App\Models;

use CodeIgniter\Model;

class MensajesModel extends Model
{
    protected $table      = 'mensajes';
    protected $primaryKey = 'id_mensaje';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_usuario', 'email', 'telefono', 'mensaje'];

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