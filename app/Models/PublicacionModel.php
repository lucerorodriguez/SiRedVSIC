<?php namespace App\Models;

use CodeIgniter\Model;

class PublicacionModel extends Model
{
    protected $table      = 'publicaciones';
    protected $primaryKey = 'id_publicacion';

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['autores', 'titulo', 'tema', 'albitraje', 'indexacion', 'descripcion', 'url','id_usuario','fecha'];

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