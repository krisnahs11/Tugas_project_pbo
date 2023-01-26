<?= $this->extend('layout/layout'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Dapermen E-Library 📚</h1>
            <p>Data Perpustakaan blablabla</p>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <h5 class="card-header">Data Insertions</h5>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Data Buku</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Menuju halaman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Data Pinjam</h5>
                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                            <a href="#" class="btn btn-primary">Menuju halaman</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
                                        <img src="..." class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Data kembali</h5>
                                            <p class="card-text">Masukkan data pengembalian</p>
                                            <a href="#" class="btn btn-primary">Menuju halaman</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row-mt-2">
                <div class="col sm-2">
                    <div class="card">
                        <h5 class="card-header">Buku paling laris</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 18rem;">
                                    <img src="https://cdn.myanimelist.net/images/anime/5/17407.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Naruto: Shippuudene</h5>
                                        <p class="card-text">It has been two and a half years since Naruto Uzumaki left Konohagakure, the Hidden Leaf Village, for intense training following events which fueled his desire to be stronger. Now Akatsuki, the mysterious organization of elite rogue....</p>
                                        <a href="#" class="btn btn-primary">Lihat detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>