<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<?php
echo session()->getFlashdata('info');
?>

<div class="col">
    <h1> UPDATE DATA</h1>
</div>

<div class="col-8">
    <form action="<?= base_url() ?>/admin/kategori/update" method="post">
        <div class="form-group mt-2">
            <label for="kategori">Kategori :</label>
            <input type="text" name="kategori" value="<?= $kategori['kategori'] ?>" required class="form-control">
        </div>

        <div class="form-group mt-2 ">
            <label for="keterangan">Keterangan :</label>
            <input type="text" name="keterangan" value="<?= $kategori['keterangan'] ?>" required class="form-control">
        </div>

        <input type="hidden" name="idkategori" value="<?= $kategori['idkategori'] ?>" id="">

        <div class="form-group mt-3">
            <input type="submit" name="simpan" value="Simpan">
        </div>
    </form>
</div>

<?= $this->endSection() ?>