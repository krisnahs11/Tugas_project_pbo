<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card">
        <div class="card-header">
            <?= $kembali['nama_peminjam']; ?>
        </div>
        <div class="col">
            <div class="card-body m-lg-auto">
                <h5 class="card-title"><?= $kembali['judul_buku']; ?></h5>
                <p class="card-text"> Tanggal pinjam :<?= $kembali['tanggal_pinjam']; ?></p>
                <p class="card-text"> Tanggal kembali : <?= $kembali['tanggal_kembali']; ?></p>
                <p class="card-text"> Status : <?= $kembali['status']; ?></p>
                <div class="card-footer">
                    <form action="/crudkembali/detailkembali<?= $kembali['id_kembali']; ?>" method="POST" class="d-inline">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Delete</button>
                    </form>

                    <a href="/crudkembali/edit/<?= $kembali['id_kembali']; ?>" class="btn btn-info  mx-1">Edit</a>
                    <a href="/crudkembali/list_pinjam/" class="btn btn-success my-2 ">Back</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>