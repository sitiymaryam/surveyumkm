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
                                <li class="active"><a href="#Kelembagaan">Edit Data Pemasaran</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="http://localhost/surveyumkm/index.php/admin/DataLaporan/update_pemasaran" method="post" class="addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <input name="id" type="hidden" class="form-control" value="<?php echo $id_datapemasaran;?>">
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
                                                                    <input name="tanggal" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Omzet Pertahun</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_omzet" class="form-control" required="">
                                                                        <option value="<?php echo $id_omzet;?>"><?php echo $omzet;?></option>
                                                                        <?php foreach ($data10 as $key ) { ?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->nama;?>
                                                                        </option>                                     
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Jangkauan Pasar (langsung maupun melalui perantara)</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="id_pasar" class="form-control" required="">
                                                                        <option value="<?php echo $id_pasar;?>"><?php echo $pasar;?></option>
                                                                        <?php foreach ($data11 as $key ) { ?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->nama;?>
                                                                        </option>                                     
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label> Pemanfaatan Internet</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="internet" id="list-kategori" class="form-control" onclick="kategoris()" required="">
                                                                        <option value="<?php echo $internet;?>"><?php echo $internet;?></option>
                                                                        <option value="Belum memiliki akses internet">Belum memiliki akses internet</option>
                                                                        <option id="lainnya-kategori" value="lain">Memiliki akses internet (Mohon Tuliskan Alamat Email)</option>
                                                                        <option value="">Memiliki akses internet dan telah dimanfaatkan untuk usaha</option>
                                                                    </select> 
                                                                    <input id="text-kategori" class="form-control" type="email" name="internet" placeholder="Mohon Tuliskan Alamat Email" disabled>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                                </div>   
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group  res-mg-t-15">
                                                                    <label>Penjualan Offline/Online</label>
                                                                </div>
                                                                <div class="form-group">
                                                                   <select name="id_penjualan" class="form-control" required="">
                                                                        <option value="<?php echo $id_penjualan;?>"><?php echo $penjualan;?></option>
                                                                        <?php foreach ($data12 as $key ) { ?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->nama;?>
                                                                        </option>                                     
                                                                    <?php } ?>
                                                                    </select> 
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Sebutkan Nominal Penjualan Online melalui Media Sosial Pertahun</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input type="text" required="" class="form-control" name="nominal" placeholder="contoh : Rp. 1.000.000" value="<?php echo $nominal;?>"> 
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kontrak/pre-order dengan mitra pemasaran <br> (industri pengolahan, pasar modern, hotel, travel agent, restoran, dll)</label>
                                                                </div>
                                                                <div class="form-group">
                                                                   <select name="kontrak" id="list-kategori2" class="form-control" onclick="kategoris2()" required="">
                                                                        <option value="<?php echo $kontrak;?>"><?php echo $kontrak;?></option>
                                                                        <option value="Belum memiliki akses internet">Belum memiliki mitra pasar dan kontrak</option>
                                                                        <option id="lainnya-kategori" value="lain2">Sudah memiliki mitra pemasaran tetapi belum menggunakan kontrak (Sebutkan nama mitra pemasaran)</option>
                                                                    </select> 
                                                                    <input id="text-kategori2" class="form-control" type="text" name="kontrak" placeholder="Sebutkan nama mitra pemasaran" disabled>
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