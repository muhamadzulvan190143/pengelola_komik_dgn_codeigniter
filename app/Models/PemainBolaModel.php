<?php

namespace App\Models;

use CodeIgniter\Database\MySQLi\Builder;
use CodeIgniter\Model;

class PemainBolaModel extends Model
{
    protected $table = 'pemainbola';
    protected $useTimeStamp = true;
    protected $allowedFields = ['nama', 'negara'];

    public function search($keyword)
    {
        // $builder = $this->table('pemainbola');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('pemainbola')->like('nama', $keyword);
    }
}
