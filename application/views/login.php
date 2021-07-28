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

                            <?php if ($this->session->flashdata('msg')) { ?>
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <h3 class="alert-heading font-size-h4 font-w400">Failed</h3>
                                    <p class="mb-0"><?= $this->session->flashdata('msg') ?> </p>
                                </div>
                            <?php } ?>

                            
                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center" style="margin-top: 0 !important;">
                                    <a href="index.html"><img src="<?= base_url();?>/assets/images/logo.png" height="100" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 text-center">LEARNING MANAGEMENT SYSTEM</h4>
                                <p class="text-muted text-center">Silahkan masuk untuk melanjutkan</p>

                              <form class="mt-4" action="<?= base_url('welcome/proses_login'); ?>" method="POST">

                                <div class="form-group">
                                    <label for="username">Alamat Email</label>
                                    <input type="email" class="form-control" id="username" name="email" placeholder="Contoh : email@contoh.com" required>
                                </div>
    

                                <div class="form-group">
                                    <label for="userpassword">Kata Sandi</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan kata sandi" required>
                                </div>
    
                                <div class="form-group row">
                                    <div class="col-sm-6">
                                        
                                    </div>
                                    <div class="col-sm-6 text-right">
                                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">MASUK</button>
                                    </div>
                                </div>

                                <div class="form-group mt-2 mb-0 row">
                                    <div class="col-12 mt-3">
                                        <a href="<?= base_url()?>forgotpassword"><i class="mdi mdi-lock"></i> Lupa Kata Sandi?</a>
                                    </div>
                                </div>

                            </form>

                            <div class="mt-5 pt-4 text-center">
                                <p>Belum punya akun ? <a href="<?= base_url();?>register" class="font-weight-medium text-primary"> Klik Disini Untuk Daftar</a> </p>
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
