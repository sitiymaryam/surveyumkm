<div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <?php foreach ($data as $key) { ?>
                                <img src="<?php echo base_url();?>icon/<?php echo $key->gambar; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                        
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Detail Profil</a></li>
                                <li><a href="#reviews"> Edit Profil</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															 <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message" style="background-color: #edf0f7">
                                                            <table>
                                                                <?php foreach ($data as $key) { ?>
                                                                <tr height ="40px">
                                                                    <td width="250">Nama UMKM</td>
                                                                    <td width="20"> : </td>
                                                                    <td> <?php echo $key->nama_umkm;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Email UMKM</td>
                                                                    <td width="20"> : </td>
                                                                    <td> <?php echo $key->email;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Nama Pemilik Usaha/Ketua Kelompok</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->nama_pemilik;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Kategori UMKM</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->kategori_umkm;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Tahun Dimulainya Usaha</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->tahun_mulai;?></td> 
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Bulan Dimulainya Usaha</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->bulan_mulai;?></td> 
                                                                </tr>
                                                                <tr height ="80px">
                                                                    <td width="250">Tahun Dimulainya Fasilitasi oleh BI/Lembaga Pendamping Lainnya</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->tahun_fasilitas;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Triwulan Dimulainya Fasilitasi oleh BI/Lembaga pendamping lainnya</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->triwulan_fasilitas;?></td>  
                                                                </tr>
                                                                <tr height ="80px">
                                                                    <td width="250">Nomor KTP Pemilik Usaha/Ketua Kelompok</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->nomor_ktp;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Nomor NPWP Pemilik Usaha/Ketua Kelompok</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->no_npwp;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Nomor HP</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->no_hp;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Alamat</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->alamat;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Kabupaten/Kota</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->kabupaten;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Provinsi</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->provinsi;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Sektor Ekonomi</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->sektor_ekonomi;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Produk/Komoditas Utama</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->produk_utama;?></td>
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Produk/Komoditas Lainnya</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->produk_lainnya;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Jumlah SDM (Tenaga Kerja)</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->jumlah_sdm;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Total Aset (tidak termasuk tanah dan bangunan)</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->total_aset;?></td>  
                                                                </tr>

                                                            <?php } ?>
                                                            </table>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form action="http://localhost/surveyumkm/user/Profil/update_profil" method="post" class="addcourse" id="demo1-upload" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <?php foreach ($data as $key) { ?>
                                                        <input name="username" type="hidden" class="form-control" value="<?php echo $key->username;?>">
                                                        <div class="form-group">
                                                            <label>Nama UMKM</label>                   
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nama_umkm" type="text" class="form-control" value="<?php echo $key->nama_umkm;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Email UMKM</label>
                                                        </div>
                                                        <div class="form-group">
                                                             <input name="email" type="email" class="form-control" value="<?php echo $key->email;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama Pemilik Usaha/Ketua Kelompok</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="nama_pemilik" class="form-control" value="<?php echo $key->nama_pemilik;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Kategori UMKM</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="kategori_umkm" class="form-control">
                                                                <option value="<?php echo $key->kategori_umkm ;?>"><?php echo $key->kategori_umkm ;?></option>
                                                                <?php foreach ($data3 as $key) { ?>
                                                                <option value="<?php echo $key->nama_kategori;?>"><?php echo $key->nama_kategori;?> </option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                        <?php foreach ($data as $key) { ?>
                                                        <div class="form-group">
                                                            <label>Tahun Dimulainya Usaha</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tahun_mulai" type="text" class="form-control" value="<?php echo $key->tahun_mulai;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Bulan Dimulainya Usaha</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" name="bulan_mulai" class="form-control" value="<?php echo $key->bulan_mulai;?>" >
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tahun Dimulainya Fasilitasi oleh BI/Lembaga Pendamping Lainnya</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="tahun_fasilitas" type="text" class="form-control" value="<?php echo $key->tahun_fasilitas;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Triwulan Dimulainya Fasilitasi oleh BI/Lembaga pendamping lainnya</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="triwulan_fasilitas" type="text" class="form-control" value="<?php echo $key->triwulan_fasilitas;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor KTP Pemilik Usaha/Ketua Kelompok</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nomor_ktp" type="number" class="form-control" value="<?php echo $key->nomor_ktp;?>">
                                                        </div>
                                                        <div class="form-group">
                                                           <label>Alamat</label>
                                                        </div>
                                                        <div style="margin-bottom: 30px">
                                                            <textarea class="form-control" rows="4"  type="text" name="alamat"> <?php echo $key->alamat;?></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <label>Nomor HP</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="no_hp" value="<?php echo $key->no_hp;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nomor NPWP Pemilik Usaha/Ketua Kelompok</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="no_npwp" type="number" class="form-control" value="<?php echo $key->no_npwp;?>">
                                                        </div>
                                                        <div  class="form-group">
                                                            <label>Kabupaten/Kota</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="kabupaten" value="<?php echo $key->kabupaten;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Provinsi</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="provinsi" value="<?php echo $key->provinsi;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Jumlah SDM</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="jumlah_sdm" value="<?php echo $key->jumlah_sdm;?>">
                                                        </div>
                                                        <?php } ?>
                                                        <div class="form-group">
                                                            <label>Sektor Ekonomi</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="sektor_ekonomi" class="form-control">
                                                                <option value="<?php echo $key->sektor_ekonomi;?>"><?php echo $key->sektor_ekonomi;?></option>
                                                                <?php foreach ($data1 as $key) { ?>
                                                                
                                                                <option value="<?php echo $key->nama_sektor;?>"><?php echo $key->nama_sektor;?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Produk/Komoditas Utama</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="produk_utama" class="form-control">
                                                                <?php foreach ($data as $key) { ?>
                                                                <option value="<?php echo $key->produk_utama;?>"><?php echo $key->produk_utama;?></option> <?php } ?>
                                                                <?php foreach ($data2 as $key) { ?>
                                                                <option value="<?php echo $key->nama_produk;?>"> <?php echo $key->nama_produk;?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Produk/Komoditas Lainnya</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <select name="produk_lainnya" class="form-control">
                                                                <?php foreach ($data as $key) { ?>
                                                                <option value="<?php echo $key->produk_lainnya;?>"><?php echo $key->produk_lainnya;?></option> <?php } ?>
                                                                <?php foreach ($data2 as $key) { ?>
                                                                <option value="<?php echo $key->nama_produk;?>"> <?php echo $key->nama_produk;?></option>
                                                            <?php } ?>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Total Aset</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control" name="total_aset">
                                                                <?php foreach ($data as $key) { ?>
                                                                
                                                                <option><?php echo $key->total_aset;?></option>
                                                            <?php } ?>
                                                            <option>Sampai dengan Rp50 juta</option>
                                                            <option>Lebih dari Rp50 juta s.d Rp500 juta</option>
                                                            <option>Lebih dari Rp500 juta s.d Rp10 miliar</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Upload Foto Profil (Max size : 100kb)</label>
                                                        </div>
                                                        <div class="form-group">
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-big-btn">
                                                                <label class="icon-right" for="prepend-big-btn">
                                                                        <i class="fa fa-download"></i>
                                                                    </label>
                                                                <div class="file-button">
                                                                    Browse
                                                                    <input style="background-color: brown" type="file" value="<?php echo $key->gambar;?>" name="gambar">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <?php } ?>
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

     <script src="<?php echo base_url();?>asset3/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/wow.min.js"></script>

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