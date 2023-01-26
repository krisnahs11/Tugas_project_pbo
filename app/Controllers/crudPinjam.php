<?php

namespace App\Controllers;

use App\models\PinjamModel;

class Crudpinjam extends BaseController
{
    protected $PinjamModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->PinjamModel = new PinjamModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('pinjam');
    }
    public function list_pinjam()
    {

        $data = [
            'title' => 'Daftar Pinjaman',
            'pinjam' => $this->PinjamModel->getPinjam()
        ];
        return view('admin/pinjam/list_pinjam', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah data pinjaman baru',

        ];
        return view('admin/pinjam/create', $data);
    }

    public function delete($id_pinjam)
    {
        $this->PinjamModel->delete($id_pinjam);
        session()->setFlashdata('Message', "Data pinjam berhasil dihapus");
        return redirect()->to('/crudpinjam/list_pinjam');
    }


    public function detailpinjam($id_pinjam)
    {

        $data = [
            'title' => 'Detail pinjaman',
            'pinjam' => $this->PinjamModel->getPinjam($id_pinjam),


        ];

        return view('admin/pinjam/detailpinjam', $data);
    }

    public function save()
    {
        // $this->request->getVar();
        $this->PinjamModel->save([
            'judul_buku' => $this->request->getVar('judul_buku'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'kontak' => $this->request->getVar('kontak')
        ]);
        session()->setFlashdata('Message', "pinjam berhasil ditambahkan");
        return redirect()->to('/crudpinjam/list_pinjam/');
    }

    public function edit($id_pinjam)
    {
        $data = [
            'title' => 'Edit data pinjaman',
            'pinjam' => $this->PinjamModel->getPinjam($id_pinjam)

        ];
        return view('admin/pinjam/edit', $data);
    }
    public function update($id_pinjam)
    {

        // $this->request->getVar();
        $this->PinjamModel->save([
            'id_pinjam' => $id_pinjam,
            'judul_buku' => $this->request->getVar('judul_buku'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'kontak' => $this->request->getVar('kontak')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil diubah");
        return redirect()->to('/crudpinjam/list_pinjam/');
    }
}
