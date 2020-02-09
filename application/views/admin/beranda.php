<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Survei UMKM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Header menu area -->
    <div class="left-sidebar-pro" style="margin-right: 30px; width: 150px">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img style="width: 180px; margin-right: 15px; margin-left: 10px; margin-top: 10px; margin-bottom: 20px" class="main-logo" src="<?php echo base_url();?>/asset1/images/logo BI.png" alt="" /></a>
                <strong><a href="index.html"><img src="<?php echo base_url();?>/asset3/img/logo/" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                         <li>
                            <a href="http://localhost/surveyumkm/index.php/admin/Beranda/index" title="Landing Page" href="events.html" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Home</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="http://localhost/surveyumkm/index.php/admin/Verifikasi/cetak_verif" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Verifikasi UMKM</span></a>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Profil UMKM</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a href="http://localhost/surveyumkm/index.php/admin/SektorEkonomi/cetak" title="All Professors" href="all-professors.html"><span class="mini-sub-pro">Sektor Ekonomi</span></a></li>
                                <li><a title="Add Professor" href="http://localhost/surveyumkm/index.php/admin/Kategori/cetak"><span class="mini-sub-pro">Kategori UMKM</span></a></li>
                                <li><a title="Edit Professor" href="http://localhost/surveyumkm/index.php/admin/KomoditasUtama/cetak"><span class="mini-sub-pro">Komoditas</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Kelembagaan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="http://localhost/surveyumkm/index.php/admin/LegalitasUsaha/cetak"><span class="mini-sub-pro">Legalitas Usaha</span></a></li>
                                <li><a title="Add Students" href="http://localhost/surveyumkm/index.php/admin/S_Organisasi/cetak"><span class="mini-sub-pro">Struktur Organisasi</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap"></span> <span class="mini-click-non">Keuangan</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="http://localhost/surveyumkm/index.php/admin/LaporanKeuangan/cetak"><span class="mini-sub-pro">Laporan Keuangan</span></a></li>
                                <li><a title="All Library" href="http://localhost/surveyumkm/index.php/admin/RekeningBank/cetak"><span class="mini-sub-pro">Kepemilikan Rekening Bank</span></a></li>
                                <li><a title="All Library" href="http://localhost/surveyumkm/index.php/admin/DigitalPayment/cetak"><span class="mini-sub-pro">Digital Payment</span></a></li>
                                <li><a title="Add Library" href="http://localhost/surveyumkm/index.php/admin/UangElektronik/cetak"><span class="mini-sub-pro">Uang Elektronik</span></a></li>
                                <li><a title="Edit Library" href="http://localhost/surveyumkm/index.php/admin/FintechLending/cetak_K"><span class="mini-sub-pro">Fintech Lending < 20juta</span></a></li>
                                <li><a title="Edit Library" href="http://localhost/surveyumkm/index.php/admin/FintechLending/cetak_l"><span class="mini-sub-pro">Fintech Lending > 20juta</span></a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-department icon-wrap"></span> <span class="mini-click-non">Produksi</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                               <li><a title="All Library" href="http://localhost/surveyumkm/admin/KemampuanProduksi/cetak"><span class="mini-sub-pro">Kemampuan Produksi</span></a></li>
                               <li><a title="All Library" href="http://localhost/surveyumkm/admin/BahanBaku/cetak"><span class="mini-sub-pro">Pemasok Bahan Baku</span></a></li>
                               <li><a title="All Library" href="http://localhost/surveyumkm/admin/RamahLingkungan/cetak"><span class="mini-sub-pro">Proses Ramah Lingkungan</span></a></li>
                               <li><a title="All Library" href="http://localhost/surveyumkm/admin/KepemilikanIzin/cetak"><span class="mini-sub-pro">Kepemilikan Izin</span></a></li>
                               <li><a title="All Library" href="http://localhost/surveyumkm/admin/KurasiProduk/cetak"><span class="mini-sub-pro">Kurasi Produk</span></a></li>
                               
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-message icon-wrap"></span> <span class="mini-click-non">Pemasaran</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                               <li><a title="All Library" href="http://localhost/surveyumkm/admin/OmzetPertahun/cetak"><span class="mini-sub-pro">Omzet Pertahun</span></a></li>
                               <li><a title="All Library" href="http://localhost/surveyumkm/index.php/admin/JangkauanP/cetak"><span class="mini-sub-pro">Jangkauan Pasar</span></a></li>
                               <li><a title="All Library" href="http://localhost/surveyumkm/index.php/admin/Penjualan/cetak"><span class="mini-sub-pro">Penjualan</span></a></li>                               
                            </ul>
                        </li>
                        <li>
                            <a title="Landing Page" href="http://localhost/surveyumkm/index.php/admin/DataLaporan/index" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Laporan</span></a>
                        </li>
                        <li>
                            <a title="Landing Page" href="http://localhost/surveyumkm/index.php/admin/PeriodeLaporan/index" aria-expanded="false"><span class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Periode Laporan</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Header menu area -->
  
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>

         <div class="header-advance-area" style="">
            <div class="header-top-area" style=" background-color: #005699;">
                <div class="container-fluid">
                    <div class="row" >
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                    <i class="educate-icon educate-nav"></i>
                                                </button>
                                        </div>
                                    </div>

                                    <div style="margin-left: 45%" class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                            <img src="img/product/pro4.jpg" alt="" />
                                                            <span class="admin-name">
                                                                    <?php echo $this->session->userdata('NIP');?>
                                                                

                                                            </span>
                                                            <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                        </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="http://localhost/surveyumkm/admin/Profil/index"><span class="edu-icon edu-user-rounded author-log-ic"></span>Lihat Profil</a>
                                                        </li>
                                                        <li><a href="http://localhost/surveyumkm/admin/Login/Logout"><span class="edu-icon edu-locked author-log-ic"></span>Keluar</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <!-- Mobile Menu end -->

        </div>

    <!-- jquery
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/counterup/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/morrisjs/raphael-min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/morrisjs/morris.js"></script>
    <script src="<?php echo base_url();?>asset3/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url();?>asset3/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/tawk-chat.js"></script>
</body>

</html>