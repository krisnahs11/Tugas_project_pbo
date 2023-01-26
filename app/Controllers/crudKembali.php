<?php

namespace App\Controllers;

use App\models\KembaliModel;

class CrudKembali extends BaseController
{
    protected $KembaliModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->KembaliModel = new KembaliModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('pinjam');
    }
    public function list_kembali()
    {

        $data = [
            'title' => 'Daftar kembali',
            'kembali' => $this->KembaliModel->getKembali()
        ];
        return view('admin/kembali/list_kembali', $data);
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah data pengembalian baru',

        ];
        return view('admin/kembali/create', $data);
    }

    public function delete($id_kembali)
    {
        $this->KembaliModel->delete($id_kembali);
        session()->setFlashdata('Message', "Data pengembalian berhasil dihapus");
        return redirect()->to('/crudkembali/list_kembali');
    }


    public function detailkembali($id_kembali)
    {

        $data = [
            'title' => 'Detail pengembalian',
            'kembali' => $this->KembaliModel->getKembali($id_kembali),


        ];

        return view('admin/kembali/detailkembali', $data);
    }

    public function save()
    {
        // $this->request->getVar();
        $this->KembaliModel->save([
            'judul_buku' => $this->request->getVar('judul_buku'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('Message', "Data berhasil ditambahkan");
        return redirect()->to('/crudkembali/list_kembali/');
    }

    public function edit($id_kembali)
    {
        $data = [
            'title' => 'Edit data pengembalian',
            'kembali' => $this->KembaliModel->getKembali($id_kembali)

        ];
        return view('admin/kembali/edit', $data);
    }
    public function update($id_kembali)
    {

        // $this->request->getVar();
        $this->KembaliModel->save([
            'id_kembali' => $id_kembali,
            'judul_buku' => $this->request->getVar('judul_buku'),
            'nama_peminjam' => $this->request->getVar('nama_peminjam'),
            'tanggal_pinjam' => $this->request->getVar('tanggal_pinjam'),
            'tanggal_kembali' => $this->request->getVar('tanggal_kembali'),
            'status' => $this->request->getVar('status')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil diubah");
        return redirect()->to('/crudkembali/list_kembali/');
    }
}
