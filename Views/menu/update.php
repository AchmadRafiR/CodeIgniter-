<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h1>Form Update</h1>
<form action="<?= base_url() ?>/admin/menu/update" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label class="form-label" for="">Kategori :</label>
        <select class="form-control w-50" name="idkategori" id="idkategori">
            <?php foreach ($kategori as $k) : ?>
                <option <?php if ($menu['idkategori'] == $k['idkategori']) {
                            echo "selected";
                        } ?> value="<?= $k['idkategori'] ?>"><?= $k['kategori'] ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <br>
    <label class="form-label" for="">Menu :</label>
    <input class="form-control w-50" type="text" value="<?= $menu['menu'] ?>" name="menu" id="" required>
    <br>
    <label class="form-label" for="">Harga :</label>
    <input class="form-control w-50" type="number" value="<?= $menu['harga'] ?>" name="harga" id="" required>
    <br>
    <label class="form-label" for="">Gambar :</label>
    <input class="form-control w-50" type="file" name="gambar" id="">
    <input class="form-control w-50" type="hidden" value="<?= $menu['gambar'] ?>" name="gambar" id="" required>
    <input class="form-control w-50" type="hidden" value="<?= $menu['idmenu'] ?>" name="idmenu" id="" required>
    <br>

    <?php
    // if (!empty(session()->getFlashdata('info'))) {
    //     echo '<div class="alert alert-danger" role="alert">';
    //     echo session()->getFlashdata('info');
    //     echo '</div>';
    // }
    ?>
    <input class="btn btn-primary" type="submit" value="simpan" name="simpan">
</form>

<?= $this->endSection() ?>