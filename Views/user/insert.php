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
    <h3> INSERT DATA</h3>
</div>

<div class="col-8">
    <form action="<?= base_url('/admin/user/insert') ?>" method="post">
        <div class="form-group mt-2">
            <label for="kategori">User :</label>
            <input type="text" name="user" required class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="kategori">Email :</label>
            <input type="email" name="email" required class="form-control">
        </div>

        <div class="form-group mt-2">
            <label for="kategori">Password :</label>
            <input type="password" name="password" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label" for="harga">Level :</label>
            <select class="form-control w-50" name="level" id="idkategori">
                <?php foreach ($level as $key) : ?>
                    <option value="<?= $key ?>"><?= $key ?></option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="form-group mt-3">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>