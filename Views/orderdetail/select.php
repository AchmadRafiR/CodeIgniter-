<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<?php
if (isset($_GET['page_page'])) {
    $page = $_GET['page_page'];
    $jumlah = 4;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>

<div class="row">
    <div class="col-12">
        <form action="<?= base_url() ?>/admin/orderdetail/cari" method="post">
            <div class="form-group col-6 float-start">
                <label class="form-label" for="">Awal :</label>
                <input class="form-control" type="date" name="awal" id="" required><br>
            </div>
            <div class="form-group col-6 float-start">
                <label class="form-label" for="">Sampai :</label>
                <input class="form-control" type="date" name="sampai" id="" required><br>
            </div>
            <br>
            <div class="ml-3">
                <input class="btn btn-dark" type="submit" value="cari" name="cari">
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col mt-4">
        <h3><?= $judul; ?></h3>
    </div>
</div>


<div class="row">

    <table class="table mt-4">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Menu</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>

        <?php $no ?>
        <?php foreach ($orderdetail as $key => $value) : ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['tglorder'] ?></td>
                <td><?= $value['menu'] ?></td>
                <td><?= $value['harga'] ?></td>
                <td><?= $value['jumlah'] ?></td>
                <td><?= $value['jumlah'] * $value['harga'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $pager->links('page', 'bootstrap') ?>

</div>

<?= $this->endSection() ?>