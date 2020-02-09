<!doctype html>
<html class="no-js" lang="en">


<body>
     <div class="alert alert-info" style=" margin-top: 70px; margin-left: 15px; width: 98%; text-align: right; padding :2px">
        <a href="http://localhost/surveyumkm/admin/DataLaporan/lihat_laporan" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
            <strong style="margin-right: 10px">Tutup</strong>
    </div>
     <a href="http://localhost/surveyumkm/user/LaporanFull/cetak/<?php echo $id;?>">
                                        <button style=" margin-left: 89%" class="btn btn-primary">Cetak Laporan</button>
                                    </a>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Welcome area -->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Kelembagaan</a></li>
                                <li><a href="#Keuangan">Keuangan</a></li>
                                <li><a href="#Produksi">Produksi</a></li>
                                <li><a href="#Pemasaran">Pemasaran</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="" method="post" class="addcourse" id="demo1-upload">
                                                        <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                                <table style="margin-left: 50px">
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Periode Penginputan Data</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $periode;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Legalitas Usaha</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $legalitas_usaha;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Struktur Organisasi</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $struktur_organisasi;?></td>
                                                                </tr>
                                                               
                                                                </table>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-tab-list tab-pane fade" id="Keuangan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form action="<?= base_url("user/LaporanKeuangan/insert") ?>" method="POST">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                                <table style="margin-left: 50px">
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Periode Penginputan Data</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $periode;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Laporan Keuangan</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $l_keuangan;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Rekening Bank</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $rekening_id;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jenis Transaksi Pembayaran <br> yang diterima</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $transaksi;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Transaksi Non Tunai</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub ==0)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo  $transaksi_sub ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub ==0)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo  $transaksi_sub_sub ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kerjasama dengan Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub_sub <'2')
                                                                    {?>
                                                                    <?php echo $transaksi_sub_sub_sub;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo "-" ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jenis Digital Payment Yang digunakan</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub_sub >'2')
                                                                    {?>
                                                                    <?php echo $transaksi_sub_sub_sub;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo "-" ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Uang Elektronik</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub_sub_sub=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $transaksi_sub_sub_sub_sub ;?>
                                                                        <?php } ?>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $ptradisional;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $ptradisional_sub;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Lembaga Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($ptradisional_nama=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $ptradisional_nama ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $pnontradisional;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Fintech Lending</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_pnontradisional_sub=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $pnontradisional_sub ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($pnontradisional_nominal=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $pnontradisional_nominal ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                               
                                                                </table>
                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="Produksi">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form action="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/tambah_produksi" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                                <table style="margin-left: 50px">
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Periode Penginputan Data</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $periode;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kemampuan Produksi</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $k_produksi;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemasok Bahan Baku</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $bahan_baku;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Proses Ramah Lingkungan</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $proses;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Izin/Sertifikasi Produk <br> dan Dokumen ekspor</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $izin;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pernah Mengikuti Kurasi Produk <br> oleh BI dan/atau Lembaga lain</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $kurasi;?></td>
                                                                </tr>
                                                               
                                                                </table>
                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                  <div class="product-tab-list tab-pane fade" id="Pemasaran">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form action="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/tambah_pemasaran" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                                <table style="margin-left: 50px">
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Periode Penginputan Data</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $periode;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Omzet Pertahun</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $omzet;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jangkauan Pasar</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $pasar;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemanfaatan Internet</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $internet;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Penjualan Offline/Online</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $penjualan;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Penjualan Online <br> melalui Media Sosial Per Tahun</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nominal;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kontrak/pre-order dengan mitra pemasaran</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $kontrak;?></td>
                                                                </tr>
                                                               
                                                                </table>
                                                            </div>
                                                        </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <script type="text/javascript">
                          function kategoris(){
                       var e = document.getElementById("list-kategori");
                      var strUser = e.options[e.selectedIndex].value;
                      if(strUser == 'lain'){
                        document.getElementById('text-kategori').disabled = false;
                      }else{
                        document.getElementById('text-kategori').disabled = true;

                      }
                    }
                      </script>

                    <script type="text/javascript">
                          function kategoris2(){
                       var e = document.getElementById("list-kategori2");
                      var strUser = e.options[e.selectedIndex].value;
                      if(strUser == 'lain2'){
                        document.getElementById('text-kategori2').disabled = false;
                      }else{
                        document.getElementById('text-kategori2').disabled = true;

                      }
                    }
                      </script>

    <script src="<?php echo base_url();?>asset3/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/wow.min.js"></script> 
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
    <script src="<?php echo base_url();?>asset3/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/jquery.maskedinput.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/masking-active.js"></script>
    <!-- datepicker JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/datepicker/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/form-validation/jquery.form.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/form-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/form-validation/form-active.js"></script>
    <!-- dropzone JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/dropzone/dropzone.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/tawk-chat.js"></script>
    


      <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

  
      
</body>

</html>