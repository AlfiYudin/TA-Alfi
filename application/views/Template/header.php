<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Penerimaan Mahasiswa Baru Cerdas</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="<?= base_url() ?>assets/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css" />
    <!-- Icon -->
    <link rel="icon" href="assets/images/logo/logo1.png">
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div class="sidebar_blog_1">
                    <div class="sidebar-header">
                        
                    </div>
                    <div class="sidebar_user_info">
                        <div class="icon_setting"></div>
                        <div class="user_profle_side">
                            <div class="user_img"><img class="img-responsive" src="<?= base_url() ?>assets/images/layout_img/user_img.jpg" alt="#" /></div>
                            <div class="user_info">
                                <h6>Administrator</h6>
                                <p><span class="online_animation"></span> Online</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar_blog_2">
                    <h4>PMB Cerdas</h4>
                    <ul class="list-unstyled components">
                        <li class="active"><a href="/welcome"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a>
                        </li>
                        <li><a href="/trafic"><i class="fa fa-bar-chart orange_color"></i> <span>Traffic Hari Ini</span></a></li>
                        <li>
                            <a href="/Tahunmasuk" ><i class="fa fa-calendar"></i> <span>Tahun Masuk</span></a>
                        </li>
                        <li><a href="/import"><i class="fa fa-upload"></i> <span>Import Camaba</span></a></li>
                        
                        <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-group"></i> <span>Jalur Pendaftaran</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="/semua_calon">> <span>Semua Calon</span></a></li>
                           <li><a href="#">> <span>Aktivasi Pendaftar</span></a></li>
        
                        </ul>
                        </li>

                        <li>
                        <a href="#media"><i class="fa fa-folder"></i> <span>Media Promosi</span></a>
                    
                        </li>

                        <li>
                        <a href="#jadwal" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-check-circle"></i> <span>Jadwal</span></a>
                        <ul class="collapse list-unstyled" id="jadwal">
                           <li><a href="#">> <span>Test Potensi Akademik</span></a></li>
                         </ul>
                        </li>

                        <li>
                        <a href="#datapembayaran" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-money"></i> <span>Data Pembayaran</span></a>
                        <ul class="collapse list-unstyled" id="datapembayaran">
                           <li><a href="#">> <span>Sudah Bayar Pendaftaran</span></a></li>
                           <li><a href="#">> <span>Belum Bayar Pendaftaran</span></a></li>
                           <li><a href="#">> <span>Sudah Bayar SSP</span></a></li>
                           <li><a href="#">> <span>Belum Bayar SSP</span></a></li>
                           <li><a href="#">> <span>Download Data Dispensasi</span></a></li>
                         </ul>
                        </li>

                        <li>
                        <a href="#whatsapp" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-phone-square"></i> <span>Whatsapp</span></a>
                        <ul class="collapse list-unstyled" id="whatsapp">
                           <li><a href="/Auto_reply">> <span>Auto Reply</span></a></li>
                           <li><a href="/Wa_blast">> <span>Wa Blast</span></a></li>
                         </ul>
                        </li>

                        <li><a href="/ubah_password"><i class="fa fa-key"></i> <span>Ubah Password</span></a></li>
                        <li><a href="#"><i class="fa fa-download"></i> <span>Download Data Final</span></a></li>
                        <li><a href="#"><i class="fa fa-dashboard"></i> <span>Logout</span></a></li>
                    </ul>
                </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?= base_url() ?>assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">Administrator</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">My Profile</a>
                                                <a class="dropdown-item" href="#">Settings</a>
                                                <a class="dropdown-item" href="#">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard Content -->
                <div class="midde_cont">