<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container pt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar Komik</h5>
                    <div class="row">
                        <div class="col-2">
                            <a href="/komik/create" class="btn btn-primary my-2 ">Tambah Data</a>
                        </div>
                        <?php if (session()->getFlashData('pesan')) : ?>
                            <div class="col-10 py-2 my-2 alert alert-success alert-dismissible fade show" role="alert">
                                <?= session()->getFlashData('pesan'); ?>
                                <button type="button" class="btn-sm btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php endif; ?>

                    </div>

                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sampul</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($komik as $k) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><img src="/img/<?= $k['sampul']; ?>" alt="" class="sampul"></td>
                                    <td><?= $k['judul']; ?></td>
                                    <td>
                                        <a href="komik/<?= $k['slug']; ?>" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>