<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>">
    <title>Login Restoran Ci-4</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <span>
                    <h1>Login Admin</h1>
                </span>
                <form action="<?= base_url() ?>/admin/login" method="post">
                    <div class="form-group">
                        <label class="form-label" for="">Email :</label>
                        <input class="form-control " type="email" name="email" id="" required>
                        <br>
                        <label class="form-label" for="">Password :</label>
                        <input class="form-control " type="password" name="password" id="" required>
                        <br>
                        <?php
                        if (!empty($info)) {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo $info;
                            echo '</div>';
                        }
                        ?>
                        <input class="btn btn-dark" type="submit" value="login" name="login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>