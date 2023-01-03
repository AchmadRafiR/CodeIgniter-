<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Aplikasi Restoran Ci-4</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="mt-2">
            <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
                <div class="container-fluid">
                    <h2> <a href="<?= base_url('/admin') ?>">Admin Page</a> </h2>
                    <ul class="navbar-nav gap-5">
                        <li class="navbar-item"> User : <?php if (!empty(session()->get('user'))) {
                                                            echo session()->get('user');
                                                        } ?></li>
                        <li class="navbar-item"> Email : <?php if (!empty(session()->get('email'))) {
                                                                echo session()->get('email');
                                                            } ?></li>
                        <li class="navbar-item"> Posisi : <?php if (!empty(session()->get('level'))) {
                                                                echo session()->get('level');
                                                            }
                                                            $level = session()->get('level'); ?></li>
                        <li class="navbar-item"><a href="<?= base_url('admin/login/logout') ?>">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="row">
            <div class="col-2 mt-3">

                <ul class="list-group">
                    <?php if ($level === "Admin") : ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/kategori') ?>">Kategori</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/menu') ?>">Menu</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/pelanggan') ?>">Pelanggan</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/user') ?>">User</a></li>
                    <?php endif; ?>

                    <?php if ($level === "Kasir") : ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/order') ?>">Order</a></li>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                    <?php endif; ?>

                    <?php if ($level === "Koki") : ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                    <?php endif; ?>

                    <?php if ($level === "Gudang") : ?>
                        <li class="list-group-item"><a href="<?= base_url('/admin/orderdetail') ?>">Order Detail</a></li>
                    <?php endif; ?>
                </ul>
            </div>


            <div class="col-10 mt-3">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
</body>

</html>