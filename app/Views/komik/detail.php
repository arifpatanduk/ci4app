<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Detail Komik</h5>
                </div>
                <div class="card-body">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/img/<?= $komik['sampul']; ?>" alt="..." class="card-img">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $komik['judul']; ?></h5>
                                    <p class="card-text"><b>Penulis : </b><?= $komik['penulis']; ?></p>
                                    <p class="card-text"><small class="text-muted"><b>Penerbit : </b><?= $komik['penerbit']; ?></small></p>

                                    <a href="" class="mb-2 btn btn-warning">Edit</a>
                                    <a href="" class="mb-2 btn btn-danger">Delete</a>
                                    <br>
                                    <a href="/komik" class="mb-2 btn btn-light">Kembali</a>
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