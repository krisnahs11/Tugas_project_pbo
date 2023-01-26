<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Custom styles for this page -->
    <link href="<?= base_url(); ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="col-6">
        <form action="/crudbuku/save" method="POST">
            <?= csrf_field(); ?>
            <div class="form-group row">
                <label for="judul" class="col-3 col-form-label">Judul</label>
                <div class="col-9">
                    <input id="judul" name="judul" placeholder="Isikan judul buku" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="sinopsis" class="col-3 col-form-label">Sinopsis</label>
                <div class="col-9">
                    <textarea id="sinopsis" name="sinopsis" cols="40" rows="5" class="form-control"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="pengarang" class="col-3 col-form-label">Pengarang</label>
                <div class="col-9">
                    <input id="pengarang" name="pengarang" placeholder="Isikan pengarang buku" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="penerbit" class="col-3 col-form-label">Penerbit</label>
                <div class="col-9">
                    <input id="penerbit" name="penerbit" placeholder="Isikan penerbit buku" type="text" required="required" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="sampul" class="col-3 col-form-label">sampul</label>
                <div class="col-9">
                    <input id="sampul" name="sampul" placeholder="isikan url sampul" type="text" class="form-control" aria-describedby="sampulHelpBlock">
                    <span id="sampulHelpBlock" class="form-text text-muted">saat ini gambar masih harus menggunakan url manual</span>
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