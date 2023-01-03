<?= $this->extend('template/admin') ?>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>

<?= $this->section('content') ?>
<h1 class="float-start"><?= $judul ?></h1>
<a class="btn btn-primary mt-2 float-end" href="<?= base_url('/admin/menu/create') ?>">Tambah Data</a>
<form action="<?= base_url('/admin/menu/read') ?>" class="w-50" method="get">
    <?= view_cell('App\Controllers\Admin\Menu::option') ?>
</form>
<table class="table mt-4">
    <tr>
        <th>No</th>
        <th>Menu</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Ubah</th>
        <th>Hapus</th>
    </tr>
    <?php foreach ($menu as $m) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $m['menu'] ?></td>
            <td><img style="width: 100px;" src="<?= base_url('/images/' . $m['gambar'] . '') ?>" alt=""></td>
            <td><?= number_format($m['harga']) ?></td>
            <td><a href="<?= base_url('/admin/menu/find/') ?><?= $m['idmenu'] ?>"><img src="<?= base_url('/icon/pencil.svg') ?>" alt=""></a></td>
            <td><a href="<?= base_url('/admin/menu/delete/') ?><?= $m['idmenu'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>" alt=""></a></td>
        </tr>
    <?php endforeach ?>
</table>
<?= $pager->makelinks(1, $tampil, $total, 'bootstrap') ?>
<?= $this->endSection() ?>