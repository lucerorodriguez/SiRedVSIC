<?php namespace App\Models;

use CodeIgniter\Model;

class InvestigacionModel extends Model
{
    protected $table      = 'investigaciones';
    protected $primaryKey = 'id_investigacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre_proyecto', 'objetivos','descripcion', 'programas', 'requisitos', 'documentos' ,'id_usuario', 'fecha'];

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