<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Platform Learning Management System - STIP - Jakarta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="STIP JAKARTA" name="description" />
        <meta content="STIP JAKARTA" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?= base_url();?>/assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="<?= base_url();?>/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url();?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url();?>/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('<?= base_url();?>/assets/images/bg-login.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                    <?php if ($this->session->flashdata('success')) { ?>
                                <div class="alert alert-success alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h3 class="alert-heading font-size-h4 font-w400">Success</h3>
                                    <p class="mb-0"><?= $this->session->flashdata('success') ?> </p>
                                </div>
                            <?php } ?>

                            <?php if ($this->session->flashdata('failed')) { ?>
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h3 class="alert-heading font-size-h4 font-w400">Failed</h3>
                                    <p class="mb-0"><?= $this->session->flashdata('failed') ?> </p>
                                </div>
                            <?php } ?>

                            
                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center">
                                    <a href="index.html"><img src="<?= base_url();?>/assets/images/logo.png" height="100" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 text-center">LEARNING MANAGEMENT SYSTEM</h4>
                                <p class="text-muted text-center">Daftar sekarang</p>

                              <form class="mt-4" action="<?= base_url('welcome/proses_register')?>" method="POST">

                                <div class="form-group">
                                    <label for="useremail">Alamat Email</label>
                                    <input type="email" class="form-control" id="useremail" name="email" placeholder="Contoh : email@contoh.com">
                                </div>

                                <div class="form-group">
                                    <label for="username">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="username" name="full_name" placeholder="Masukkan nama lengkap">
                                </div>
    

                                <div class="form-group">
                                    <label for="userpassword">Kata Sandi</label>
                                    <input type="password" class="form-control" id="userpassword" name="password" placeholder="Minimal 6 karakter">
                                </div>

                                <div class="form-group">
                                    <label for="userpassword">Ketik Ulang Kata Sandi</label>
                                    <input type="password" class="form-control" id="userpassword" name="password2" placeholder="Minimal 6 karakter">
                                </div>

                                <div class="form-group row">
                                    <div class="col-12 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">DAFTAR</button>
                                    </div>
                                </div>

                            </form>

                            <div class="text-center">
                                <p>Sudah mempunyai akun ? <a href="<?= base_url();?>" class="font-weight-medium text-primary"> Klik Untuk Masuk </a> </p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- JAVASCRIPT -->
        <script src="<?= base_url();?>/assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url();?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url();?>/assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url();?>/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url();?>/assets/libs/node-waves/waves.min.js"></script>

        <script src="<?= base_url();?>/assets/js/app.js"></script>

    </body>
</html>
