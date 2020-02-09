<body>

    <div class="alert alert-info" style=" margin-top: 70px; margin-left: 15px; width: 98%; text-align: right; padding :2px">
        <a href="http://localhost/surveyumkm/admin/DataLaporan/lihat_laporan" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
            <strong style="margin-right: 10px">Tutup</strong>
    </div>
    <div  style=" width: 98%; text-align: left; padding :10px">
            <strong style="margin-left: 24px; font-size: 20px">Edit Laporan</strong>
    </div>
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
                                <li class="active"><a href="#Keuangan">Keuangan</a></li>
                                <li><a href="#Kelembagaan">Kelembagaan</a></li>
                                <li><a href="#Produksi">Produksi</a></li>
                                <li><a href="#Pemasaran">Pemasaran</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Keuangan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="http://localhost/surveyumkm/index.php/admin/DataLaporan/update" method="post" class="addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <input name="id" type="hidden" class="form-control" value="<?php echo $id;?>">
                                                                <div class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="lembaga_id" class="form-control" required="">
                                                                        <?php foreach ($data3 as $key) { ?>
                                                                        <option value="<?php echo $key->ID;?>">
                                                                            <?php echo $key->nama_umkm;?></option>
                                                                        <?php }?>
                                                                    </select>
                                                                </div>
                                                                <div class="form-group"> 
                                                                    <label> Periode Penginputan Data (Tahun-Bulan-Tanggal)</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="form-control"><?php $tanggal= date('Y-m-d'); echo $tanggal;?></label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="periode" type="hidden" class="form-control" value="<?php $tanggal= date('Y-m-d'); echo $tanggal;?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Laporan Keuangan</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="laporan_id" class="form-control" required="">
                                                                        <option value="<?php echo $id_lkeuangan;?>"><?php echo $l_keuangan;?></option>        
                                                                        <?php foreach ($data13 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Kepemilikan Rekening Bank</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="rekening_id" id="list-kategori3" class="form-control" onclick="kategoris3()" required="">
                                                                        <option value="<?php echo $rekening_id;?>"><?php echo $rekening_id;?></option>
                                                                        <option value="Belum Punya">Belum Punya</option>                              
                                                                        <option id="lainnya-kategori" value="lain3">Sudah Punya tetapi tidak aktif (Sebutkan nama bank</option> 
                                                                        <option value="Sudah punya dan aktif [Bank Mandiri dan BRI]">Sudah punya dan aktif [Bank Mandiri dan BRI]</option>
                                                                    </select>
                                                                    <input id="text-kategori3" class="form-control" type="text" name="rekening_id" placeholder="Sebutkan Nama Bank" disabled>
                                                                </div>
  
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                                                                <div class="form-group">
                                                                        <label class="">Jenis Transaksi Pembayaran</label>
                                                                </div>
                                                                  <div class="form-control">
                                                                    <?php foreach ($data4 as $key) { ?>
                                                                        <input type="radio" id="transaksi" name="transaksi" class="transaksi" value="<?= $key->id ?>"><?= $key->name ?>
                                                                        <?php } ?>
                                                                </div>

                                                                <div class="form-group" name= "transaksi_sub" id="transaksi_sub">
                                                                </div>

                                                                <div class="form-group" name="transaksi_sub_sub" id="transaksi_sub_sub"></div>

                                                                <div class="form-group" name="transaksi_sub_sub_sub" id="transaksi_sub_sub_sub"></div>

                                                                <div class="form-group" name="transaksi_sub_sub_sub_sub" id="transaksi_sub_sub_sub_sub"></div>
                                                                <div class="form-group">
                                                                    <label style="margin-top: 10px">Akses terhadap Pembiayaan Non Tradisional</label>
                                                                </div>

                                                                <div class="form-group">
                                                                    <?php foreach ($data15 as $key) { ?>
                                                                        <p>
                                                                            <input type="radio" name="pnontradisional" class="pnontradisional" value="<?= $key->id ?>"><?= $key->name ?>
                                                                        </p>
                                                                        <?php } ?>
                                                                </div>

                                                                <div class="form-group" name="pnontradisional_sub" id="pnontradisional_sub">
                                                                </div>

                                                                <div class="form-group">
                                                                    <label>Akses terhadap Pembayaran Tradisional</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <?php foreach ($data16 as $key) { ?>
                                                                        <p>
                                                                            <input type="radio" name="ptradisional" class="ptradisional" value="<?= $key->id ?>"><?= $key->nama ?>
                                                                        </p>
                                                                        <?php } ?>
                                                                </div>

                                                                <div class="form-group" id="ptradisional_sub">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-tab-list tab-pane fade" id="Kelembagaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                               <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15"> 
                                                                    <label> Legalitas Usaha</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="legalitas_usaha" class="form-control" required="">
                                                                        <option value="<?php echo $id_legalitasusaha;?>">
                                                                            <?php echo $legalitas_usaha;?>
                                                                        </option>
                                                                        <?php foreach ($data1 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                            <?php echo $key->legalitas_usaha;?></option>  
                                                                        <?php } ?>                                            
                                                                    </select>
                                                                </div>
                                                                 
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                
                                                                <div class="form-group"> 
                                                                    <label> Struktur Organisasi</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="struktur_organisasi" class="form-control" required="">
                                                                        <option value="<?php echo $id_strukturorganisasi;?>">
                                                                            <?php echo $struktur_organisasi;?>
                                                                        </option>
                                                                        <?php foreach ($data2 as $key) { ?>
                                                                        <option value="<?php echo $key->id;?>">
                                                                        <?php echo $key->struktur_organisasi;?></option>
                                                                        <?php } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-tab-list tab-pane fade" id="Produksi">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                    <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Kemampuan Produksi</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control" required="" name="k_produksi">
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
                                                                    <select name="pemasok" class="form-control" required="">
                                                                        <option value="<?php echo $id_pemasok;?>"><?php echo $bahan_baku;?></option>        
                                                                        <?php foreach ($data6 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                                                                </div>  
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <label>Proses Ramah Lingkungan</label>
                                                                </div>
                                                                <div class="form-group">
                                                                   <select name="proses" class="form-control" required="">
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
                                                                    <select name="izin" class="form-control" required="">
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
                                                                   <select name="kurasi" class="form-control" required="">
                                                                        <option value="<?php echo $id_kurasi;?>"><?php echo $kurasi;?></option>        
                                                                        <?php foreach ($data9 as $key) {?>
                                                                        <option value="<?php echo $key->id;?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>                      
                                                                </div>
                                                            </div>
                                                        </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-tab-list tab-pane fade" id="Pemasaran">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                
                                                    <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Omzet Pertahun</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="omzet" class="form-control" required="">
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
                                                                    <select name="pasar" class="form-control" required="">
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
                                                                        <option value="<?php echo $internet;?>"><?php echo $internet;?> </option>
                                                                        <option value="Belum memiliki akses internet">Belum memiliki akses internet</option>
                                                                        <option id="lainnya-kategori" value="lain">Memiliki akses internet (Mohon Tuliskan Alamat Email)</option>
                                                                        <option value="Memiliki akses internet dan telah dimanfaatkan untuk usaha">Memiliki akses internet dan telah dimanfaatkan untuk usaha</option>
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
                                                                   <select name="penjualan" class="form-control" required="">
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
                                                                    <input type="text" required="" class="form-control" name="nominal" placeholder="contoh : Rp. 1.000.000" value="<?php echo $nominal_penjualan;?>"> 
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

</body>
<script type="text/javascript">
        let site_api = "<?= base_url("api") ?>";
        $(".transaksi").on("click", function() {
             let transaksi = $(".transaksi:checked").val();
             $("#transaksi_sub").html("");
             $("#transaksi_sub_sub").html("");
             $("#transaksi_sub_sub_sub").html("");
             $("#transaksi_sub_sub_sub_sub").html("");

             $.ajax({
                url: site_api+"/transaksi/sub/"+transaksi,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = `<select name="transaksi_sub" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                    }

                    pilihan = pilihan+`</select>`;
                    $("#transaksi_sub").append(pilihan);
                  }
                }
            });
        });

        $("#transaksi_sub").change("click", function() {
             let transaksi      = $(".transaksi:checked").val();
             let transaksi_sub  = $("#transaksi_sub option:selected").val();

             $("#transaksi_sub_sub").html("");
             $("#transaksi_sub_sub_sub").html("");
             $("#transaksi_sub_sub_sub_sub").html("");

             $.ajax({
                url: site_api+"/transaksi/sub/"+transaksi+"/"+transaksi_sub,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = `<select name="transaksi_sub_sub" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                    }

                    pilihan = pilihan+`</select>`;
                    $("#transaksi_sub_sub").append(pilihan);
                  }
                }
            });
        });

        $("#transaksi_sub_sub").change("click", function() {
             let transaksi          = $(".transaksi:checked").val();
             let transaksi_sub      = $("#transaksi_sub option:selected").val();
             let transaksi_sub_sub  = $("#transaksi_sub_sub option:selected").val();

             $("#transaksi_sub_sub_sub").html("");
             $("#transaksi_sub_sub_sub_sub").html("");

             $.ajax({
                url: site_api+"/transaksi/sub/"+transaksi+"/"+transaksi_sub+"/"+transaksi_sub_sub,
                dataType: "json",
                type: "GET",
                success: function(response) {
                  if (response.meta.code === 200) {
                    var pilihan = `<select name="transaksi_sub_sub_sub" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                    }

                    pilihan = pilihan+`</select>`;
                    $("#transaksi_sub_sub_sub").append(pilihan);
                  }
                }
            });
        });


        $("#transaksi_sub_sub_sub").change("click", function() {
             let transaksi              = $(".transaksi:checked").val();
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
                    var pilihan = `<select name="transaksi_sub_sub_sub_sub" class="form-control" required="">
                    <option value="">Pilih...</option>`;

                    for (var i = 0; i<response.data.length; i++) {
                      pilihan = pilihan+`<option value="`+response.data[i].id+`">`+response.data[i].name+`</option>`;
                    }

                    pilihan = pilihan+`</select>`;
                    $("#transaksi_sub_sub_sub_sub").append(pilihan);
                  }
                }
            });
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
    
</html>