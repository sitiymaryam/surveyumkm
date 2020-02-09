<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
 
    <!-- Start Welcome area -->
        <div style="margin-top: 70px" class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Edit Data Produksi</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="http://localhost/surveyumkm/index.php/admin/DataLaporan/update_produksi" method="post" class="addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <input name="id" type="hidden" class="form-control" value="<?php echo $id_dataproduksi;?>">
                                                                <div class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_umkm" class="form-control" required="">
                                                                        <option value="<?php echo $ID;?>">
                                                                            <?php echo $nama_umkm;?></option>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <label> Periode Penginputan Data (Tahun-Bulan-Tanggal)</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-control"><?php $tanggal= date('Y-m-d'); echo $tanggal;?></label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="tanggal" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kemampuan Produksi</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control" required="" name="id_kproduksi">
                                                                        <option value="<?php echo $id_kproduksi;?>"><?php echo $k_produksi;?></option>
                                                                        <?php foreach ($data5 as $key ) { ?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->nama;?>
                                                                        </option>                                     
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pemasok Bahan Baku</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_pemasok" class="form-control" required="">
                                                                        <option value="<?php echo $id_pemasok;?>"><?php echo $bahan_baku;?></option>        
                                                                        <?php foreach ($data6 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>   
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <label>Proses Ramah Lingkungan</label>
                                                                </div>
                                                                <div class="form-group">
                                                                   <select name="id_proses" class="form-control" required="">
                                                                        <option value="<?php echo $id_proses;?>"><?php echo $proses;?></option>        
                                                                        <?php foreach ($data7 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kepemilikan Izin/Sertifikasi Produk dan Dokumen Ekspor</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_izin" class="form-control" required="">
                                                                        <option value="<?php echo $id_izin;?>"><?php echo $izin;?></option>        
                                                                        <?php foreach ($data8 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pernah Mengikuti Kurasi Produk oleh BI dan/atau Lembaga Lain</label>                
                                                                </div>
                                                                <div class="form-group">
                                                                   <select name="id_kurasi" class="form-control" required="">
                                                                        <option value="<?php echo $id_kurasi;?>"><?php echo $kurasi;?></option>        
                                                                        <?php foreach ($data9 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>                      
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
        </div>

</body>

</html>