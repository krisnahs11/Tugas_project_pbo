<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <?php if (session()->getFlashdata('Message')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('Message') ?>
        </div>

    <?php endif ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data pengembalian buku</h6>
            <span> <a href="/crudkembali/create" class="btn btn-primary mt-3">Tambah pengembalian baru</a></span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>

                        <tr>
                            <th>Nama buku</th>
                            <th>Nama peminjam</th>
                            <th>Tanggal pinjam</th>
                            <th>Tanggal kembali</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama buku</th>
                            <th>Nama peminjam</th>
                            <th>Tanggal pinjam</th>
                            <th>Tanggal kembali</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($kembali as $k) : ?>
                            <tr>
                                <td><?= $k['judul_buku']; ?></td>
                                <td><?= $k['nama_peminjam']; ?></td>
                                <td><?= $k['tanggal_pinjam']; ?></td>
                                <td><?= $k['tanggal_kembali']; ?></td>
                                <td><a class="btn btn-info" href="/crudkembali/detailkembali/<?= $k['id_kembali']; ?>">Detail <i class="fas fa-book"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Page level plugins -->

<?= $this->endSection(); ?>