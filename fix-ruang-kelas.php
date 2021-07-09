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

        <link href="assets/libs/chartist/chartist.min.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <style>
            .hovericon:hover {
                background-color: #e6e6e6;
                border-radius: 25px;
            }
        </style>

    </head>

    <body data-topbar="light" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar" style="background-color: #0086c3 !important;">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo.svg" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-light.png" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm mr-2 font-size-24 d-lg-none header-item waves-effect waves-light"
                            data-toggle="collapse" data-target="#topnav-menu-content">
                            <i class="mdi mdi-menu"></i>
                        </button>

                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="mdi mdi-bell-outline" style="color: #ffffff !important;"></i>
                                <span class="badge badge-danger badge-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Pemberitahuan (258) </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="mdi mdi-cart-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Kelas sudah dimulai</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Kelas kamu untuk Matematika sudah dimulai.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                    <i class="mdi mdi-message-text-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Ada pesan dari Pak Handoyo</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Rifki tolong nanti kamu .....</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="media">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-info rounded-circle font-size-16">
                                                    <i class="mdi mdi-glass-cocktail"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Nilai anda sudah keluar untuk matkul Arsitektur</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Klik pemberitahuan ini untuk melihat nilai</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        Lihat Semua Pesan
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/user-4.jpg"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-account-circle font-size-17 align-middle mr-1"></i> Profil</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle mr-1"></i> Media Saya</a>
                                <a class="dropdown-item d-block" href="#"><i class="mdi mdi-settings font-size-17 align-middle mr-1"></i> Pengaturan</a>
                                <a class="dropdown-item" href="#"><i
                                        class="mdi mdi-lock-open-outline font-size-17 align-middle mr-1"></i> Kunci Aplikasi</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i
                                        class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Keluar</a>
                            </div>
                        </div>

                    </div>
                </div>
            </header>

            <div class="topnav" style="background-color: #29b6f6 !important;">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                                        <i class="ti-home mr-2"></i><b>Beranda</b>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                                        <i class="ti-write mr-2"></i>Ruang Kelas
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                                        <i class="ti-email mr-2"></i>Obrolan
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="index.html" style="color: #ffffff !important;">
                                        <i class="ti-world mr-2"></i>Jelajah
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <br>
                        <div class="row">
                            <h4>Kelas</h4>
                        </div>     
                        <br>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-md-12 card">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#akademik" role="tab">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">AKADEMIK</span> 
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#umum" role="tab">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">UMUM</span> 
                                        </a>
                                    </li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div class="tab-pane active p-3" id="akademik" role="tabpanel">
                                        <p class="mb-0">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h5>KELAS AKADEMIK</h5>
                                                <P>Kelas akademik ini tersinkron dengan jadwal perkuliahan sistem informasi akademik yang anda ikuti.</P>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                    <div class="tab-pane p-3" id="umum" role="tabpanel">
                                        <p class="mb-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5>KELAS YANG TELAH DIBUAT</h5>
                                                    <P>Kelas umum yang anda buat dan dapat anda kelola</P>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="#" data-toggle="modal" data-target=".modal-lainnya" style="padding: 5px; float: right; color: #616161;"><b>LAINNYA</b></a>
                                                    <a href="#" data-toggle="modal" data-target=".modal-gabung" style="padding: 5px; float: right; color: #616161;"><b>GABUNG KE KELAS&nbsp;&nbsp;|</b></a>
                                                    <a href="#" data-toggle="modal" data-target=".modal-buat" style="padding: 5px; float: right; color: #616161;"><b>BUAT KELAS&nbsp;&nbsp;|</b></a>
                                                </div>
                                            </div>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Nav tabs -->
                        </div>

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <!-- Modal Info -->
                <div class="modal fade modal-buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Buat Kelas Baru :</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Nama Mata Kuliah :</label>
                                    <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                                </div>
                                <div class="form-group">
                                    <label>Nama Kelas :</label>
                                    <input type="text" class="colorpicker-default form-control colorpicker-element" value="Pilih Kelas" data-colorpicker-id="1" data-original-title="" title="">
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi :</label>
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Jelaskan secara singkat maksud dari pembuatan kelas ini"></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="d-block mb-3">Tipe :</label>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="outer-group[0][customRadioInline1]" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Publik</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="outer-group[0][customRadioInline1]" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Pribadi</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Apa yang akan peserta pelajari :</label>
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="Jelaskan secara singkat apa yang akan peserta pelajari"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Buat</button>
                                <button type="submit" class="btn btn-secondary">Tutup</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <!-- Modal Info -->
                <div class="modal fade modal-gabung" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title mt-0">Gabung ke Kelas :</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>PIN :</label>
                                    <input type="text" class="colorpicker-default form-control colorpicker-element" data-colorpicker-id="1" data-original-title="" title="" placeholder="e.g ABCDE">
                                </div>
                                <button type="submit" class="btn btn-primary">Buat</button>
                                <button type="submit" class="btn btn-secondary">Tutup</button>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> STIP JAKARTA
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Peity chart-->
        <script src="assets/libs/peity/jquery.peity.min.js"></script>

        <!-- Plugin Js-->
        <script src="assets/libs/chartist/chartist.min.js"></script>
        <script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>

        <script src="assets/js/pages/dashboard.init.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>
