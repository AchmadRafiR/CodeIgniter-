<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="col">
    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }
    ?>
</div>

<div class="col">
    <h3><?= $judul ?></h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/user/ubah') ?>" method="post">
        <div class="form-group mt-2">
            <input type="hidden" value="<?= $user['iduser'] ?>" name="iduser" required class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="kategori">Email :</label>
            <input type="email" value="<?= $user['email'] ?>" name="email" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label" for="harga">Level :</label>
            <select class="form-control w-50" name="level" id="idkategori">
                <?php foreach ($level as $key) : ?>
                    <option <?php if ($user['level'] == $key) {
                                echo "selected";
                            } ?> value="<?= $key ?>"><?= $key ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group mt-3">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>