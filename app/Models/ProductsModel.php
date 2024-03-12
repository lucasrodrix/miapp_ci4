<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['code', 'name','stock','id_store','status'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'entry_date';
    protected $updatedField  = 'edit_date';
    protected $deletedField  = '';
}