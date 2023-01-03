<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>
<h1>Form Insert</h1>
<form action="<?= base_url('/admin/menu/insert') ?>" method="post" enctype="multipart/form-data">
    Gambar : <input type="file" name="gambar" id="">
    <br>
    <?= view_cell('App\Controllers\Admin\Menu::option') ?>
    <br>
    <input type="submit" value="simpan" name="simpan">
</form>
<?= $this->endSection() ?>