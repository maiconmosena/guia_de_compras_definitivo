<?php

namespace App\Models;

use App\Entities\Departamento;
use CodeIgniter\Model;

class DepartamentoModel extends Model
{
    protected $table            = 'departamentos';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = Departamento::class;
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nome_dep', 'descricao'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

}
