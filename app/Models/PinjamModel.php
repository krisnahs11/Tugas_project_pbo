<?php

namespace App\Models;

use CodeIgniter\Model;

class PinjamModel extends Model
{
    protected $table      = 'pinjam';
    protected $primaryKey = 'id_pinjam';

    protected $allowedFields = ['judul_buku', 'nama_peminjam', 'tanggal_pinjam', 'tanggal_kembali', 'kontak'];

    public function getPinjam($id_pinjam = false)
    {
        if ($id_pinjam == false) {
            return $this->findAll();
        }
        return $this->where(['id_pinjam' => $id_pinjam])->first();
    }
    public function getPinjamCount()
    {
        return $this->countAllResults();
    }
};
