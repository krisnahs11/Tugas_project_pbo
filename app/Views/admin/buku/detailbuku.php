<?= $this->extend('templates/index'); ?>
<?= $this->section('page-content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src=<?= $buku['sampul']; ?> class="sampul-card">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $buku['judul']; ?></h5>
                    <p class="card-text"><?= $buku['sinopsis']; ?></p>
                    <hr class="sidebar-divider">
                    </hr>

                    <p class="card-text"><b>Pengarang</b> : <?= $buku['pengarang']; ?></p>
                    <p class="card-text"><b>Penerbit</b> : <?= $buku['penerbit']; ?></p>
                </div>
                <div class="col-lg-12">
                    <div class="card-footer">
                        <form action="/admin/detailbuku<?= $buku['id']; ?>" method="POST" class="d-inline">

                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus data?')">Delete</button>
                        </form>

                        <a href="/crudbuku/edit/<?= $buku['id']; ?>" class="btn btn-info  mx-1">edit</a>
                        <a href="/admin/" class="btn btn-success my-2 ">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>