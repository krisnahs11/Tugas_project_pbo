<?php

namespace App\Controllers;

use App\models\BukuModel;

class Crudbuku extends BaseController
{
    protected $BukuModel;
    protected $db, $builder;

    public function __construct()
    {
        $this->BukuModel = new BukuModel();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('buku');
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah data baru',

        ];
        return view('admin/buku/create', $data);
    }

    public function delete($id)
    {
        $this->BukuModel->delete($id);
        session()->setFlashdata('Message', "Buku berhasil dihapus");
        return redirect()->to('/admin/list_buku');
    }

    public function save()
    {
        // $this->request->getVar();
        $this->BukuModel->save([
            'judul' => $this->request->getVar('judul'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('Message', "Buku berhasil ditambahkan");
        return redirect()->to('/admin/list_buku');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit data buku',
            'buku' => $this->BukuModel->getBuku($id)

        ];
        return view('admin/buku/edit', $data);
    }
    public function update($id)
    {

        // $this->request->getVar();
        $this->BukuModel->save([
            'id' => $id,
            'judul' => $this->request->getVar('judul'),
            'sinopsis' => $this->request->getVar('sinopsis'),
            'pengarang' => $this->request->getVar('pengarang'),
            'penerbit' => $this->request->getVar('penerbit'),
            'sampul' => $this->request->getVar('sampul')
        ]);
        session()->setFlashdata('Message', "Data telah berhasil diubah");
        return redirect()->to('/admin/list_buku');
    }
}
