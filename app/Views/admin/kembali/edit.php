<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-6">
        <form action="/crudkembali/update/<?= $kembali['id_kembali']; ?>" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="nama_peminjam" class="col-3 col-form-label">Nama peminjam</label>
                <div class="col-9">
                    <input id="nama_peminjam" name="nama_peminjam" value="<?= $kembali['nama_peminjam']; ?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_buku" class="col-3 col-form-label">Judul buku</label>
                <div class="col-9">
                    <input id="judul_buku" name="judul_buku" placeholder="<?= $kembali['judul_buku']; ?>" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_pinjam" class="col-3 col-form-label">Tanggal pinjam</label>
                <div class="col-9">
                    <input id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $kembali['tanggal_pinjam']; ?>" type="date" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="tanggal_kembali" class="col-3 col-form-label">Tanggal kembali</label>
                <div class="col-9">
                    <input id="tanggal_kembali" name="tanggal_kembali" value="<?= $kembali['tanggal_kembali']; ?>" type="date" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">status</label>
                <div class="col-8">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="status" id="status_0" type="radio" class="custom-control-input" value="Belum dikembalikan" required="required">
                        <label for="status_0" class="custom-control-label">Belum dikembalikan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="status" id="status_1" type="radio" class="custom-control-input" value="Sudah dikembalikan" required="required">
                        <label for="status_1" class="custom-control-label">Sudah dikembalikan</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="status" id="status_2" type="radio" class="custom-control-input" value="Telat dikembalikan" required="required">
                        <label for="status_2" class="custom-control-label">Telat dikembalikan</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Page level plugins -->

<?= $this->endSection(); ?>