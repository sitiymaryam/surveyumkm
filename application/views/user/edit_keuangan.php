<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <div  style=" width: 98%; text-align: left; padding :10px">
            <strong style="margin-left: 24px; font-size: 20px">Edit Laporan</strong>
    </div>
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
                                                    <form action="http://localhost/surveyumkm/index.php/user/LaporanKeuangan/update_keuangan" method="post" class="addcourse" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="id" type="hidden" class="form-control" value="<?php echo $id_datakeuangan;?>">
                                                                    <label class="">Nama UMKM</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select name="lembaga_id" class="form-control" required="">
                                                                        <option value="<?php echo $lembaga_id;?>">
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
                                                                    <select name="rekening_id" class="form-control" required="">
                                                                        <option value="<?php echo $id_rekening;?>"><?php echo $rekening;?></option>        
                                                                        <?php foreach ($data14 as $key) {?>
                                                                        <option value="<?php echo $key->id; ?>"><?php echo $key->nama;?></option>
                                                                        <?php }?>                               
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button> 
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
</html>