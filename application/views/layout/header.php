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

        <link href="<?= base_url();?>/assets/libs/chartist/chartist.min.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="<?= base_url();?>/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?= base_url();?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?= base_url();?>/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

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
                        <img src="<?= base_url();?>/assets/images/logo.svg" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url();?>/assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?= base_url();?>/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="<?= base_url();?>/assets/images/logo-light.png" alt="" height="18">
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
                    <img class="rounded-circle header-profile-user" src="<?= base_url();?>/assets/images/users/user-4.jpg"
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
                    <a class="dropdown-item text-danger" href="<?= base_url('user/logout') ?>"><i
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
                        <a class="nav-link" href="<?= base_url('user/dashboard')?>" style="color: #ffffff !important;">
                            <i class="ti-home mr-2"></i><b>Beranda</b>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/ruangkelas')?>" style="color: #ffffff !important;">
                            <i class="ti-write mr-2"></i>Ruang Kelas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/obrolan')?>" style="color: #ffffff !important;">
                            <i class="ti-email mr-2"></i>Obrolan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('user/jelajah')?>" style="color: #ffffff !important;">
                            <i class="ti-world mr-2"></i>Jelajah
                        </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>