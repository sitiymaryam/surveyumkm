<!doctype html>
<html class="no-js" lang="en">



<body>
    <!-- Start Welcome area -->
            <!-- Mobile Menu start -->
            <!-- Mobile Menu end -->
        <!-- Single pro tab review Start-->


        <div style="margin-left: 30px; margin-right: 30px" class="alert alert-info role alert">
        <strong>Selamat Datang,</strong> 
        <?php foreach ($data as $key) { ?>

        <?php echo $key->nama_umkm;?>
        <?php } ?>
        </div>
      
       <div class="widget-program-box mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div style="margin-left: 15px; margin-top: 0px" class="hpanel widget-int-shape responsive-mg-b-30">
                            <div>
                                <div class="text-center content-box">
                                    <h2 style="text-align: left; font-size: 15px" class="m-b-xs">Home</h2>
                                    <div style="background-color: #CD5C5C; width: 60px; height: 60px;">
                                        <a href="<?php echo base_url();?>user/Beranda/beranda"><img style="margin-top: 8px; height: 40px; width: 40px;" src="<?php echo base_url();?>/icon/home icon.png"> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 style="text-align: left; font-size: 15px" class="m-b-xs">Riwayat Laporan</h2>
                                    <div style="background-color: #005699; width: 60px; height: 60px;" class="m icon-box">
                                        <a href="http://localhost/surveyumkm/index.php/user/RiwayatLaporan/index">
                                        <img style="margin-top: 8px; height: 40px; width: 40px;" src="<?php echo base_url();?>/icon/history icon.png">
                                    </a>
                                        
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <div class="panel-body">
                                <div class="text-center content-box">
                                    <h2 style="text-align: left; font-size: 15px" class="m-b-xs">Isi Laporan Survei</h2>
                                    <div style="background-color: #005699; width: 60px; height: 60px;" class="m icon-box">
                                        <a href="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/index">
                                        <img style="margin-top: 8px; height: 40px; width: 40px;" src="<?php echo base_url();?>/icon/icon laporan.png">
                                    </a>
                                        
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div>
                            <div class="panel-body" style="margin-right: 18px">
                                <div class="text-center content-box">
                                    <h2 style="text-align: left; font-size: 15px" class="m-b-xs">Lihat Profil</h2>
                                    <div style="background-color: #2E8B57; width: 60px; height: 60px;" class="m icon-box">
                                        <a href="http://localhost/surveyumkm/user/Profil/index">
                                        <img style="border-color: white; margin-top: 8px; height: 40px; width: 40px;" src="<?php echo base_url();?>/icon/user icon.png"> </a>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
</body>

</html>