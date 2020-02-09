 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Survei UMKM</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>asset2/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>asset2/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>asset2/vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>asset2/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">       
        <!-- /top navigation -->

        <!-- page content -->
        <div style="background-color: white" class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div>
                                <img style="width: 180px; margin-top: 15px; margin-left: 20px" src="<?php echo base_url();?>/asset1/images/logo BI.png" alt="">
                                <h2><span class="counter"></span> <span class="tuition-fees"></span></h2>
                                <span class="text-success"></span>
                        </div>
                    </div>
                    <div style="text-align: right; margin-right:35px; margin-top: 20px" 
                    class="">
                        <div>
                                <h3 style="color: #005699"><strong> Sistem Survei UMKM </strong></h3>
                        </div>
                    </div>


        <div class="breadcome-area" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome"
                            style="background-color: #005699; padding: 3px; margin-top: 10px">
                                <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="http://localhost/surveyumkm/index.php/user/Beranda/beranda" class="nav-link"><span style="color: white; font-size: 15px">Home </span></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="http://localhost/surveyumkm/index.php/user/RiwayatLaporan/index" class="nav-link"><span style="color: white; font-size: 15px">Riwayat Laporan </span></a>
                                                </li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span style="color: white; font-size: 15px">Laporan Survei UMKM </span> <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/index" class="dropdown-item">Isi Laporan</a>
                                                        <a href="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/lihat_laporan" class="dropdown-item">Lihat Laporan</a>
                                                    </div>
                                                </li>
                                                <!--<li class="nav-item">
                                                    <a href="http://localhost/surveyumkm/index.php/user/LaporanFull/index" class="nav-link">Isi Laporan Survei</a>
                                                </li>-->
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span style="color: white; font-size: 15px">Profil </span><span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">
                                                        <a href="http://localhost/surveyumkm/user/Profil/index" class="dropdown-item">Lihat Profil</a>
                                                        <a href="<?php echo base_url();?>index.php/user//Login/logout" class="dropdown-item">Keluar</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
              <div>
                
              </div>

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <p style="font-size: 18px"><strong>Isi Survey UMKM </strong></p>

                    <form action="<?= base_url() ?>user/IsiLaporan/tambah_data" method="POST">
                      <div id="wizard" class="form_wizard wizard_horizontal">
                        <ul class="wizard_steps">
                          <!-- <li>
                            <a href="#step-1">
                              <span class="step_no">1</span>
                              <span class="step_descr">
                                                Step 1<br />
                                                <small>Data Kelembagaan</small>
                                            </span>
                            </a>
                          </li> -->
                          <li>
                            <a href="#step-2">
                              <span class="step_no">2</span>
                              <span class="step_descr">
                                                Step 2<br />
                                                <small>Data Keuangan</small>
                                            </span>
                            </a>
                          </li>
                          <li>
                            <a href="#step-3">
                              <span class="step_no">3</span>
                              <span class="step_descr">
                                                Step 3<br />
                                                <small>Data Produksi</small>
                                            </span>
                            </a>
                          </li>
                          <li>
                            <a href="#step-4">
                              <span class="step_no">4</span>
                              <span class="step_descr">
                                                Step 4<br />
                                                <small>Data Pemasaran</small>
                                            </span>
                            </a>
                          </li>
                        </ul>
                        <!-- <div id="step-1">
                          <div style="margin-bottom: 60px" class="form-horizontal form-label-left">

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama UMKM <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step1[id_umkm]" class="form-control col-md-7 col-xs-12" required="">
                                  <?php foreach ($data3 as $key) { ?>
                                  <option value="<?php echo $key->ID;?>">
                                  <?php echo $key->nama_umkm;?></option>
                                  <?php }?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Periode Penginputan Data <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="form-control"><?php $tanggal= date('Y-m-d'); echo $tanggal;?></label>
                                <input name="step1[tanggal]" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Legalitas Usaha<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step1[id_legalitas_usaha]" class="form-control col-md-7 col-xs-12" required="">
                                  <option value="">Pilih...</option>
                                    <?php foreach ($data1 as $key) {?>
                                  <option value="<?php echo $key->id;?>">
                                    <?php echo $key->legalitas_usaha;?></option>  
                                     <?php } ?>                                            
                                </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Struktur Organisasi <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step1[id_struktur_organisasi]" class="form-control col-md-7 col-xs-12" required="">
                                <option value="">Pilih...</option>
                                  <?php foreach ($data2 as $key) { ?>
                                <option value="<?php echo $key->id;?>">
                                  <?php echo $key->struktur_organisasi;?></option><?php } ?>
                                </select>
                              </div>
                            </div>


                          </div>

                        </div> -->

                        <div id="step-2">
                          <div style="margin-bottom: 60px" class="form-horizontal form-label-left">

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama UMKM <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step2[lembaga_id]" class="form-control col-md-7 col-xs-12" required="">
                                  <?php foreach ($data3 as $key) { ?>
                                  <option value="<?php echo $key->ID;?>">
                                  <?php echo $key->nama_umkm;?></option>
                                  <?php }?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Periode Penginputan Data <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="form-control"><?php $tanggal= date('Y-m-d'); echo $tanggal;?></label>
                                <input name="step2[periode]" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Laporan Keuangan<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step2[laporan_id]" class="form-control" required="">
                                                                        <option value="">Pilih...</option>        
                                                                        <?php foreach ($data13 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kepemilikan Rekening Bank <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step2[rekening_id]" id="list-kategori3" class="form-control" onclick="kategoris3()" required="">
                                                                        <option value="">Pilih</option>
                                                                        <option value="Belum Punya">Belum Punya</option>                              
                                                                        <option id="lainnya-kategori" value="lain3">Sudah Punya tetapi tidak aktif (Sebutkan nama bank</option> 
                                                                        <option value="Sudah punya dan aktif [Bank Mandiri dan BRI]">Sudah punya dan aktif [Bank Mandiri dan BRI]</option>
                                                                    </select>
                                                                    <input id="text-kategori3" class="form-control" type="text" name="rekening_id" placeholder="Sebutkan Nama Bank" disabled>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Transaksi Pembayaran <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                  <input type="checkbox" name="step2[tunai]" class="transaksi" value="1">Tunai
                                  <input type="checkbox" name="step2[non_tunai]" class="transaksi" value="2">Non Tunai
                                <div class="col-sm-12" id="transaksi_sub"></div>
                                <div class="col-sm-12" id="transaksi_sub_sub"></div>
                                <div class="col-sm-12" id="transaksi_sub_sub_sub"></div>
                                <div class="col-sm-12" id="transaksi_sub_sub_sub_sub"></div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Akses terhadap Pembayaran Tradisional <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php foreach ($data16 as $key) { ?>
                                                                        <p>
                                                                            <input type="radio" name="ptradisional" class="ptradisional" value="<?= $key->id ?>"><?= $key->nama ?>
                                                                        </p>
                                                                        <?php } ?>
                              </div>
                            </div>

                          </div>
                            <div class="form-group" id="ptradisional_sub"></div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Akses terhadap Pembayaran Non Tradisional <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <?php foreach ($data15 as $key) { ?>
                                                                        <p>
                                                                            <input type="radio" name="pnontradisional" class="pnontradisional" value="<?= $key->id ?>"><?= $key->name ?>
                                                                        </p>
                                                                        <?php } ?>
                              </div>
                            </div>
                             <div class="form-group" id="pnontradisional_sub">
                                                                </div>


                        </div>
                        <div id="step-3">
                          
                          <div style="margin-left:100px; margin-top: 40px" class="form-horizontal form-label-left">
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama UMKM <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step3[id_umkm]" class="form-control col-md-7 col-xs-12" required="">
                                  <?php foreach ($data3 as $key) { ?>
                                  <option value="<?php echo $key->ID;?>">
                                  <?php echo $key->nama_umkm;?></option>
                                  <?php }?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Periode Penginputan Data <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="form-control"><?php $tanggal= date('Y-m-d'); echo $tanggal;?></label>
                                <input name="step3[tanggal]" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kemampuan Produksi <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select class="form-control" required="" name="step3[id_kproduksi]">
                                                                          <option value="">Pilih...</option>
                                                                          <?php foreach ($data5 as $key ) { ?>
                                                                          <option value="<?php echo $key->id;?>">
                                                                              <?php echo $key->nama;?>
                                                                          </option>                                     
                                                                      <?php } ?>
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Pemasok Bahan Baku <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step3[id_pemasok]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>        
                                                                          <?php foreach ($data6 as $key) {?>
                                                                          <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                          <?php }?>                               
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Proses Ramah Lingkungan<span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step3[id_proses]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>        
                                                                          <?php foreach ($data7 as $key) {?>
                                                                          <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                          <?php }?>                               
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kepemilikan Izin/Sertifikasi Produk dan Dokumen Ekspor<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step3[id_izin]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>        
                                                                          <?php foreach ($data8 as $key) {?>
                                                                          <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                          <?php }?>                               
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Pernah Mengikuti Kurasi Produk oleh BI dan/atau Lembaga Lain<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step3[id_kurasi]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>        
                                                                          <?php foreach ($data9 as $key) {?>
                                                                          <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                          <?php }?>                               
                                                                      </select>
                              </div>
                            </div>

                          </div>

                        </div>
                        <div id="step-4">
                          <div style="margin-left:100px; margin-top: 40px" class="form-horizontal form-label-left">

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama UMKM <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step4[id_umkm]" class="form-control col-md-7 col-xs-12" required="">
                                  <?php foreach ($data3 as $key) { ?>
                                  <option value="<?php echo $key->ID;?>">
                                  <?php echo $key->nama_umkm;?></option>
                                  <?php }?>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" >Periode Penginputan Data <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <label class="form-control"><?php $tanggal= date('Y-m-d'); echo $tanggal;?></label>
                                <input name="step4[tanggal]" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Omzet Pertahun<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step4[id_omzet]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>
                                                                          <?php foreach ($data10 as $key ) { ?>
                                                                          <option value="<?php echo $key->id;?>">
                                                                              <?php echo $key->nama;?>
                                                                          </option>                                     
                                                                      <?php } ?>
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Jangkauan Pasar (langsung maupun melalui perantara) <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step4[id_pasar]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>
                                                                          <?php foreach ($data11 as $key ) { ?>
                                                                          <option value="<?php echo $key->id;?>">
                                                                              <?php echo $key->nama;?>
                                                                          </option>                                     
                                                                      <?php } ?>
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Pemanfaatan Internet <span class="required">*</span></label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step4[internet]" id="list-kategori" class="form-control" onclick="kategoris()" required="">
                                                                          <option value="">Pilih...</option>
                                                                          <option value="Belum memiliki akses internet">Belum memiliki akses internet</option>
                                                                          <option id="lainnya-kategori" value="lain">Memiliki akses internet (Mohon Tuliskan Alamat Email)</option>
                                                                          <option value="">Memiliki akses internet dan telah dimanfaatkan untuk usaha</option>
                                                                      </select> 
                                                                      <input id="text-kategori" class="form-control" type="email" name="internet" placeholder="Mohon Tuliskan Alamat Email" disabled>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Penjualan Offline atau online <span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step4[id_penjualan]" class="form-control" required="">
                                                                          <option value="">Pilih...</option>
                                                                          <?php foreach ($data12 as $key ) { ?>
                                                                          <option value="<?php echo $key->id;?>">
                                                                              <?php echo $key->nama;?>
                                                                          </option>                                     
                                                                      <?php } ?>
                                                                      </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sebutkan Nominal Penjualan Online melalui Media Sosial per tahun 
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" class="form-control" name="step4[nominal]" placeholder="Kosongkan jika tidak ada">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3 col-sm-3 col-xs-12">Kontrak/pre-order dengan mitra pemasaran (industri pengolahan, pasar modern, hotel, travel agent, restoran, dll)<span class="required">*</span>
                              </label>
                              <div class="col-md-6 col-sm-6 col-xs-12">
                                <select name="step4[kontrak]" id="list-kategori2" class="form-control" onclick="kategoris2()" required="">
                                  <option value="">Pilih...</option>
                                  <option value="Belum memiliki akses internet">Belum memiliki mitra pasar dan kontrak</option>
                                  <option id="lainnya-kategori" value="lain2">Sudah memiliki mitra pemasaran tetapi belum menggunakan kontrak (Sebutkan nama mitra pemasaran)</option>
                                </select> 
                                <input id="text-kategori2" class="form-control" type="text" name="kontrak" placeholder="Sebutkan nama mitra pemasaran" disabled>
                              </div>
                            </div>

                          </div>
                          
                          
                        </div>

                      </div>
                    </form>
                    <!-- End SmartWizard Content -->





                    
                    <!-- Tabs -->
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <!-- /footer content -->
      </div>
    </div>

      <script src="<?php echo base_url();?>asset3/jquery.js"></script>

    <script type="text/javascript">
        let site_api = "<?= base_url("api") ?>";
        $(".transaksi").on("click", function() {
            if (this.checked && this.value === "2") {
               $("#transaksi_sub").html("");
               $("#transaksi_sub_sub").html("");
               $("#transaksi_sub_sub_sub").html("");
               $("#transaksi_sub_sub_sub_sub").html("");

               $.ajax({
                  url: site_api+"/transaksi/sub/2",
                  dataType: "json",
                  type: "GET",
                  success: function(response) {
                    if (response.meta.code === 200) {
                      var pilihan = ``;

                      for (var i = 0; i<response.data.length; i++) {
                        pilihan = pilihan+`<input name="transaksi_sub[]" type="checkbox" class="transaksi_sub" value="`+response.data[i].id+`">`+response.data[i].name+`<br />`
                      }

                      $("#transaksi_sub").append(pilihan);
                    }
                  }
              });
            }
            else if (this.value === "2") {
               $("#transaksi_sub").html("");
               $("#transaksi_sub_sub").html("");
               $("#transaksi_sub_sub_sub").html("");
               $("#transaksi_sub_sub_sub_sub").html("");
            }
        });

        $(document).on("click", ".transaksi_sub", function () {
          if (this.checked && this.value === "2") {
            $("#transaksi_sub_sub").html("");
            $("#transaksi_sub_sub_sub").html("");
            $("#transaksi_sub_sub_sub_sub").html("");

            $.ajax({
              url: site_api+"/transaksi/sub/2/"+this.value,
              dataType: "json",
              type: "GET",
              success: function(response) {
                if (response.meta.code === 200) {
                  var pilihan = `<select name="step2[transaksi_sub_sub]" class="form-control" required="">
                  <option value="">Pilih...</option>`;

                  for (var i = 0; i<response.data.length; i++) {
                    pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                  }

                  pilihan = pilihan+`</select>`;
                  $("#transaksi_sub_sub").append(pilihan);
                }
              }
            });
          }
          else if (this.value === "2") {
            $("#transaksi_sub_sub").html("");
            $("#transaksi_sub_sub_sub").html("");
            $("#transaksi_sub_sub_sub_sub").html("");
          }
        });
        

        $("#transaksi_sub_sub").change("click", function() {
             let transaksi          = $(".transaksi:checked").val();
             let transaksi_sub      = $("#transaksi_sub option:selected").val();
             let transaksi_sub_sub  = $("#transaksi_sub_sub option:selected").val();

             $("#transaksi_sub_sub_sub").html("");
             $("#transaksi_sub_sub_sub_sub").html("");

             $.ajax({
                url: site_api+"/transaksi/sub/"+2+"/"+2+"/"+transaksi_sub_sub,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = ``;
                    if (transaksi_sub_sub === "1") {
                      pilihan = `<select name="step2[transaksi_sub_sub_sub]" class="form-control" required="">
                      <option value="">Pilih...</option>`;

                      for (var i = 0; i<response.data.length; i++) {
                        pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                      }

                      pilihan = pilihan+`</select>`;
                    }
                    else if (transaksi_sub_sub === "2") {
                      for (var i = 0; i<response.data.length; i++) {
                        pilihan = pilihan+`<input name="step2[transaksi_sub_sub_sub][]" class="transaksi_sub_sub_sub" type="checkbox" value="`+response.data[i].id+`">`+response.data[i].name+` `;
                      }
                    }

                    $("#transaksi_sub_sub_sub").append(pilihan);
                  }
                }
            });
        });


        $(document).on("click", ".transaksi_sub_sub_sub", function () {
          if (this.checked) {
            if (this.value === "6") {
               $.ajax({
                  url: site_api+"/transaksi/sub/"+2+"/"+2+"/"+2+"/"+this.value,
                  dataType: "json",
                  type: "GET",
                  success: function(response) {
                    if (response.meta.code === 200) {
                      var pilihan = `<div id="alvri"><select name="step2[transaksi_sub_sub_sub_sub]" class="form-control" required="">
                      <option value="">Pilih...</option>`;

                      for (var i = 0; i<response.data.length; i++) {
                        pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                      }

                      pilihan = pilihan+`</select></div>`;
                      $("#transaksi_sub_sub_sub_sub").append(pilihan);
                    }
                  }
              });
            }
            else if (this.value === "11") {
              $("#transaksi_sub_sub_sub_sub").append(`<div id="riyan"><input type="text" name="transaksi_sub_sub_sub_sub" class="form-control"></div>`);
            }
          }
          else {
            if (this.value === "6") {
              $("#alvri").remove();
            }
            else if (this.value === "11") {
              $("#riyan").remove();
            }
          }
        });

        $("#transaksi_sub_sub_sub").change("click", function() {
            
             /*let transaksi              = $(".transaksi:checked").val();
             let transaksi_sub          = $("#transaksi_sub option:selected").val();
             let transaksi_sub_sub      = $("#transaksi_sub_sub option:selected").val();
             let transaksi_sub_sub_sub  = $("#transaksi_sub_sub_sub option:selected").val();

             $("#transaksi_sub_sub_sub_sub").html("");

             $.ajax({
                url: site_api+"/transaksi/sub/"+transaksi+"/"+transaksi_sub+"/"+transaksi_sub_sub+"/"+transaksi_sub_sub_sub,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = `<select name="step2[transaksi_sub_sub_sub_sub]" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                    }

                    pilihan = pilihan+`</select>`;
                    $("#transaksi_sub_sub_sub_sub").append(pilihan);
                  }
                }
            });*/
        });


        $(".pnontradisional").on("click", function() {
             let pnontradisional = $(".pnontradisional:checked").val();

             $("#pnontradisional_sub").html("");

             $.ajax({
                url: site_api+"/pnontradisional/sub/"+pnontradisional,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = `<select name="pnontradisional_sub" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                    }

                    pilihan = pilihan+`</select><input type="number" placeholder="Sebutkan Nominal Pembiayaan yang Diberikan (dalam Rupiah)" name="nominal_pnontradisional" class="form-control" required="" />`;
                    $("#pnontradisional_sub").append(pilihan);
                  }
                }
            });
        });

        $(".ptradisional").on("click", function() {
             let ptradisional = $(".ptradisional:checked").val();

             $("#ptradisional_sub").html("");

             $.ajax({
                url: site_api+"/ptradisional/sub/"+ptradisional,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = `<select name="ptradisional_sub" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].nama+`</option>`;
                    }

                    pilihan = pilihan+`</select><input type="text" placeholder="Sebutkan Nama Lembaga" name="nama_lembaga" class="form-control" required="" />`;
                    $("#ptradisional_sub").append(pilihan);
                  }
                }
            });
        });


      </script>


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
                    <script type="text/javascript">
                          function kategoris3(){
                       var e = document.getElementById("list-kategori3");
                      var strUser = e.options[e.selectedIndex].value;
                      if(strUser == 'lain3'){
                        document.getElementById('text-kategori3').disabled = false;
                      }else{
                        document.getElementById('text-kategori3').disabled = true;

                      }
                    }
                      </script>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>asset2/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();?>asset2/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>asset2/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>asset2/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url();?>asset2/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>asset2/build/js/custom.min.js"></script>

  
  </body>
</html>