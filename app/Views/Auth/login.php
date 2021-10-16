<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body pb-0">
                    <div class="col-lg">
                        <h1>LOGIN</h1><br>
                        <?php if (session()->getFlashData('pesan')) :  ?>
                            <div class="alert alert-danger alert-dismissible show fade" role="alert">
                                <div class="alert-body">
                                    <button class="close" data-dismiss="alert">x</button>
                                    <b>Error!</b>
                                    <?= session()->getFlashData('error') ?>
                                </div>
                            </div>>
                        <?php endif;  ?>

                        <form method="post" action="<?= base_url(); ?>/login/cek_login">
                            <div class="form-group">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" name="id" id="id" placeholder="ID" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>
                            <div class="col text-center">
                                <button type="submit" name="login" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>