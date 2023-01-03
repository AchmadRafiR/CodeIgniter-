<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>


<?php
if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 3;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>

<div class="row">

    <div class="col-4">
        <a class="btn btn-dark " href="<?= base_url('/admin/menu/create') ?>" role="button">TAMBAH DATA</a>
    </div>

    <div class="col">
        <h3><?= $judul; ?></h3>
    </div>

</div>
<form action="<?= base_url('/admin/menu/read') ?>" class="w-50 mt-3" method="get">
    <?= view_cell('App\Controllers\Admin\Menu::option') ?>
</form>
<table class="table mt-4">
    <tr>
        <th>No</th>
        <th>Menu</th>
        <th>Gambar</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($menu as $m) : ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $m['menu'] ?></td>
            <td><img style="width: 100px;" src="<?= base_url('/images/' . $m['gambar'] . '') ?>" alt=""></td>
            <td><?= number_format($m['harga']) ?></td>
            <td>
                <a class="me-3" href="<?= base_url() ?>/admin/menu/find/<?= $m['idmenu'] ?>"><img src="<?= base_url('/icon/pencil.svg') ?>" alt=""></a>
                <a href="<?= base_url() ?>/admin/menu/delete/<?= $m['idmenu'] ?>"><img src="<?= base_url('/icon/trash.svg') ?>"></a>
            </td>
        </tr>
    <?php endforeach ?>
</table>
<?= $pager->links('page', 'bootstrap') ?>
<?= $this->endSection() ?>