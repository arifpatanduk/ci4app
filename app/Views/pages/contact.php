<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container pt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <h5>
                        <strong>About Pages</strong>
                    </h5>
                </div>

                <div class="card-body">
                    <?php foreach ($alamat as $a) : ?>
                        <ul>
                            <li><?= $a['tipe']; ?></li>
                            <li><?= $a['alamat']; ?></li>
                            <li><?= $a['kota']; ?></li>
                        </ul>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>