<?php namespace App\Models;

use CodeIgniter\Model;

class TesisModel extends Model
{
    protected $table      = 'tesis';
    protected $primaryKey = 'id_tesis';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['asesor', 'tesista','tema_tesis', 'area_conocimiento', 'descripcion', 'comentarios' ,'id_usuario', 'ruta_documento','nombre_documento'];

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