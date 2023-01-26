<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table      = 'buku';
    protected $primaryKey = 'id';

    protected $allowedFields = ['judul', 'sinopsis', 'pengarang', 'penerbit', 'sampul'];

    public function getBuku($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
};
