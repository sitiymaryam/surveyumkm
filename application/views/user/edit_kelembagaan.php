<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
     <div class="alert alert-info" style=" width: 98%; text-align: right; padding :2px">
        <a href="http://localhost/surveyumkm/user/RiwayatLaporan/index" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
            <strong style="margin-right: 10px">Tutup</strong>
    </div>
    <!-- Start Welcome area -->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Edit Data Kelembagaan</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/update_lembaga" method="post" class="addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <input name="id" type="hidden" class="form-control" value="<?php echo $id_datalembaga;?>">
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
                                                                    <label> Periode Penginputan Data</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input disabled="disabled" name="tanggal" type="date" class="form-control" value="<?php echo $tanggal;?>" required="">
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>   
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15"> 
                                                                    <label> Legalitas Usaha</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_legalitas_usaha" class="form-control" required="">
                                                                        <option value="<?php echo $id_legalitasusaha;?>">
                                                                            <?php echo $legalitas_usaha;?>
                                                                        </option>
                                                                        <?php foreach ($data1 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->legalitas_usaha;?></option>  
                                                                        <?php } ?>                                            
                                                                    </select>
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <label> Struktur Organisasi</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_struktur_organisasi" class="form-control" required="">
                                                                        <option value="<?php echo $id_strukturorganisasi;?>">
                                                                            <?php echo $struktur_organisasi;?>
                                                                        </option>
                                                                        <?php foreach ($data2 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->struktur_organisasi;?></option>  
                                                                        <?php } ?>
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