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
            <h6 class="m-0 font-weight-bold text-primary">Data peminjaman buku</h6>
            <span> <a href="/crudpinjam/create" class="btn btn-primary mt-3">Tambah peminjam baru</a></span>
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
                        <?php foreach ($pinjam as $p) : ?>
                            <tr>
                                <td><?= $p['judul_buku']; ?></td>
                                <td><?= $p['nama_peminjam']; ?></td>
                                <td><?= $p['tanggal_pinjam']; ?></td>
                                <td><?= $p['tanggal_kembali']; ?></td>
                                <td><a class="btn btn-info" href="/crudpinjam/detailpinjam/<?= $p['id_pinjam']; ?>">Detail <i class="fas fa-book"></i></a></td>
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