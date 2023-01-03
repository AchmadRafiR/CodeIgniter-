<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h1>Form Insert</h1>
<form action="<?= base_url() ?>/admin/menu/insert" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label" for="">Kategori :</label>
        <select class="form-control w-50" name="idkategori" id="idkategori">
            <?php foreach ($kategori as $k) : ?>
                <option value="<?= $k['idkategori'] ?>"><?= $k['kategori'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <br>
    <label class="form-label" for="">Menu :</label>
    <input class="form-control w-50" type="text" name="menu" id="" required>
    <br>
    <label class="form-label" for="">Harga :</label>
    <input class="form-control w-50" type="number" name="harga" id="" required>
    <br>
    <label class="form-label" for="">Gambar :</label>
    <input class="form-control w-50" type="file" name="gambar" id="" required>
    <br>

    <?php
    if (!empty(session()->getFlashdata('info'))) {
        echo '<div class="alert alert-danger" role="alert">';
        echo session()->getFlashdata('info');
        echo '</div>';
    }
    ?>
    <input class="btn btn-dark" type="submit" value="simpan" name="simpan">
</form>

<?= $this->endSection() ?>