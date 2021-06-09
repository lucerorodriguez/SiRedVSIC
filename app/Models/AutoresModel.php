<?php namespace App\Models;

use CodeIgniter\Model;

class AutoresModel extends Model
{
    protected $table      = 'autores';
    protected $primaryKey = 'id_autor';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'apellidos'];

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