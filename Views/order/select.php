<?= $this->extend('template/admin') ?>
<?= $this->section('content') ?>

<div class="row">
    <div class="col">
        <h3><?= $judul ?></h3>
    </div>
</div>

<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $jumlah = 2;
    $no = ($jumlah * $page) - $jumlah + 1;
} else {
    $no = 1;
}
?>

<div class="row">
    <div class="col">
        <table class="table">
            <tr>
                <th>No</th>
                <th>ID Order</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Total</th>
                <th>Bayar</th>
                <th>Kembali</th>
                <th>Status</th>
            </tr>

            <?php foreach ($order as $value) : ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $value['idorder'] ?></td>
                    <td><?= $value['pelanggan'] ?></td>
                    <td><?= $value['tglorder'] ?></td>
                    <td><?= $value['total'] ?></td>
                    <td><?= $value['bayar'] ?></td>
                    <td><?= $value['kembali'] ?></td>
                    <?php
                    if ($value['status'] == 1) {
                        $status = "LUNAS";
                    } else {
                        $status = "<a href='" . base_url("/admin/order/find") . "/" . $value['idorder'] . "'>BAYAR</a>";
                    }
                    ?>
                    <td><?= $status ?></td>
                    <a href="<?= base_url("/admin/order/find") ?>"></a>
                </tr>
            <?php endforeach; ?>
        </table>

        <?= $pager->makelinks(1, $perPage, $total, 'bootstrap') ?>

    </div>
</div>

<?= $this->endSection() ?>