<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Platform Learning Management System - STIP - Jakarta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="STIP JAKARTA" name="description" />
        <meta content="STIP JAKARTA" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url()?>/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= base_url()?>/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url()?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url()?>/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?= base_url()?>/assets/images/bg-login.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center mt-4">
                                    <a href="index.html"><img src="<?= base_url()?>/assets/images/logo.png" height="100" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 mt-5 text-center">Setel Ulang Kata Sandi</h4>

                              <form class="mt-4" action="#">

                                <div class="alert alert-success mt-4" role="alert">
                                    Masukkan email anda, dan instruksi untuk merubah sandi akan dikirimkan ke anda
                                </div>

                                <div class="form-group">
                                    <label for="useremail">Alamat Email</label>
                                    <input type="email" class="form-control" id="useremail" placeholder="Contoh : email@contoh.com">
                                </div>

                                <div class="form-group row ">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Setel Ulang</button>
                                    </div>
                                </div>

                            </form>

                            <div class="mt-5 pt-4 text-center">
                                <p>Ingat Kata Sandi ? <a href="<?= base_url()?>" class="font-weight-medium text-primary"> Klik Disini Untuk Masuk </a> </p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- JAVASCRIPT -->
        <script src="<?= base_url()?>/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url()?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url()?>/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url()?>/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url()?>/assets/libs/node-waves/waves.min.js"></script>

        <script src="<?= base_url()?>/assets/js/app.js"></script>

    </body>
</html>
