<?php

namespace App\Models;

use CodeIgniter\Model;

class KembaliModel extends Model
{
    protected $table      = 'kembali';
    protected $primaryKey = 'id_kembali';

    protected $allowedFields = ['judul_buku', 'nama_peminjam', 'tanggal_pinjam', 'tanggal_kembali', 'statuds'];

    public function getKembali($id_kembali = false)
    {
        if ($id_kembali == false) {
            return $this->findAll();
        }
        return $this->where(['id_kembali' => $id_kembali])->first();
    }
    public function getKembaliCount()
    {
        return $this->countAllResults();
    }
};
