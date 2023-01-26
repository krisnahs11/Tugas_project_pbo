<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-6">
        <form action="/crudkembali/update/<?= $pinjam['id_pinjam']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="nama_peminjam" class="col-4 col-form-label">Nama peminjam</label>
                <div class="col-8">
                    <input id="nama_peminjam" name="nama_peminjam" placeholder="Isikan nama peminjam" type="text" value="<?= $pinjam['nama_peminjam']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_buku" class="col-4 col-form-label">Judul buku</label>
                <div class="col-8">
                    <input id="judul_buku" name="judul_buku" placeholder="Isikan judul buku" type="text" value="<?= $pinjam['judul_buku']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_pinjam" class="col-4 col-form-label">Tanggal pinjam</label>
                <div class="col-8">
                    <input id="tanggal_pinjam" name="tanggal_pinjam" placeholder="Isikan tanggal pinjam" type="date" value="<?= $pinjam['tanggal_pinjam']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_kembali" class="col-4 col-form-label">Tanggal kembali</label>
                <div class="col-8">
                    <input id="tanggal_kembali" name="tanggal_kembali" placeholder="Isikan tanggal kembali" type="date" value="<?= $pinjam['tanggal_kembali']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="Kontak" class="col-4 col-form-label">Kontak</label>
                <div class="col-8">
                    <input id="Kontak" name="Kontak" placeholder="Isikan kontak" type="text" value="<?= $pinjam['kontak']; ?>" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Page level plugins -->

<?= $this->endSection(); ?>