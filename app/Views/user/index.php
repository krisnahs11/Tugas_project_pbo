<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">List buku</h1>



    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Status data peminjaman</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Sampul</th>
                            <th>Waktu pinjam</th>
                            <th>Waktu kembali</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama buku</th>
                            <th>Pengarang</th>
                            <th>Penerbit</th>
                            <th>Sampul</th>
                            <th>Waktu pinjam</th>
                            <th>Waktu kembali</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td>Naruto vol 7</td>
                            <td>Masashi Kishimoto</td>
                            <td>Shonen jump</td>
                            <td>Bentaran</td>
                            <td>20/05/2022</td>
                            <td>25/05/2022</td>
                            <td><a class="btn btn-primary" href="">Detail <i class="fas fa-book"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>