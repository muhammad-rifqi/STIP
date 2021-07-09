<?php error_reporting(0); ?>
<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Platform Learning Management System - STIP - Jakarta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="STIP JAKARTA" name="description" />
        <meta content="STIP JAKARTA" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('assets/images/bg-login.jpg');background-size: cover;background-position: center;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card shadow-none">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box shadow-none p-4">
                            <div class="p-2">
                                <div class="text-center">
                                    <a href="index.html"><img src="assets/images/logo.png" height="100" alt="logo"></a>
                                </div>

                                <h4 class="font-size-18 text-center">LEARNING MANAGEMENT SYSTEM</h4>
                                <p class="text-muted text-center">Daftar sekarang</p>


                                <?php
                                if($_GET['act']=='registererror'){
                                    echo'
                                    <div class="alert alert-danger" role="alert">
                                        Password not Match!
                                    </div>
                                    ';
                                }else{
                                ?>

                               
                              <form class="mt-4" action="account.php?act=register" method="POST">

                                <div class="form-group">
                                    <label for="useremail">Alamat Email</label>
                                    <input type="email" class="form-control" id="useremail" name="email" placeholder="Contoh : email@contoh.com">
                                </div>

                                <div class="form-group">
                                    <label for="username">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name" placeholder="Masukkan nama lengkap">
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

                            <?php
                                }
                            ?>

                            <div class="text-center">
                                <p>Sudah mempunyai akun ? <a href="fix-login.php" class="font-weight-medium text-primary"> Klik Untuk Masuk </a> </p>
                            </div>

                        </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
