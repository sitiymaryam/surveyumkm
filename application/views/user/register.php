 <div style="background-color: white">
        <!-- /top navigation -->

        <!-- page content -->
        <div style="background-color: white" class="right_col" role="main">
          <div class="">              
            </div>

                    <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 style="font-weight: bold;">Form Registrasi Akun UMKM <br>
                      <small><p>From registrasi ini digunakan untuk melakukan pendaftaran akun UMKM dalam sistem pengiriman laporan survei UMKM <br> <br>
                      * = Harus diisi
                      </p> </small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="http://localhost/surveyumkm/index.php/user/Register/insert" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" name="email" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama UMKM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="nama_umkm" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Nama Pemilik Usaha/Ketua Kelompok<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_pemilik" class="form-control col-md-7 col-xs-12" type="text" name="nama_pemilik">
                        </div>
                      </div>
                       <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Kategori UMKM <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6">
                          <select name="kategori_umkm" id="list-kategori" class="form-control" style="width: 45%;float:left;margin-right: 5px" onclick="kategoris()">
                            <option class="kategori">Pilih...</option>
                            <?php foreach ($data3 as $key) { ?>
                              <option value="<?php echo $key->nama_kategori;?>">
                                <?php echo $key->nama_kategori;?></option>
                            <?php } ?>
                            <option id="lainnya-kategori" value="lain">Lainnya ..</option>
                          </select>
                          <input id="text-kategori" class="form-control" type="text" style="width: 50%" name="kategori" placeholder="Nama Lembaga Pendamping" disabled>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Tahun Dimulainya Usaha<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="website" name="tahun_mulai" required="required" placeholder="yyyy" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Bulan Dimulainya Usaha <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="bulan_mulai" class="optional form-control col-md-7 col-xs-12">
                            <option>Pilih..</option>
                            <option>Januari</option>
                            <option>Februari</option>
                            <option>Maret</option>
                            <option>April</option>
                            <option>Mei</option>
                            <option>Juni</option>
                            <option>Juli</option>
                            <option>Agustus</option>
                            <option>September</option>
                            <option>Oktober</option>
                            <option>November</option>
                            <option>Desember</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" for="password" class="control-label col-md-3">Tahun Dimulainya Fasilitasi oleh BI/Lembaga Pendamping Lainnya <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="text" name="tahun_fasilitas" placeholder="yyyy" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Triwulan Dimulainya Fasilitasi oleh BI/Lembaga pendamping lainnya <span class="required">*</span> </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="text" type="text" name="triwulan_fasilitas" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Nomor KTP Pemilik Usaha/Ketua Kelompok <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telephone" name="nomor_ktp" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12">Nomor NPWP Pemilik Usaha/Ketua Kelompok
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="no_npwp" class="form-control col-md-7 col-xs-12" placeholder="Kosongkan jika tidak ada">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Nomor HP<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="telephone" name="no_hp" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Alamat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="alamat" rows ="3" class="form-control col-md-7 col-xs-12">
                            
                          </textarea>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Kabupaten/Kota<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telephone" name="kabupaten" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Provinsi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telephone" name="provinsi" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Jumlah SDM (Tenaga Kerja)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="telephone" name="jumlah_sdm" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Sektor Ekonomi<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"  name="sektor_ekonomi">
                            <option value="">Pilih...</option>
                            <?php foreach ($data1 as $row) { ?>
                              <option value="<?php echo $row->nama_sektor;?>"> <?php echo $row->nama_sektor;?>; </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Produk/Komoditas Utama<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"  name="produk_utama">
                            <option value="">Pilih...</option>
                            <?php foreach ($data2 as $row) { ?>
                              <option value="<?php echo $row->nama_produk;?>"> <?php echo $row->nama_produk;?>; </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Produk/Komoditas Lainnya <br> (boleh lebih dari satu)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12 select2"  name="produk_lainnya">
                            <option value="">Pilih...</option>
                            <?php foreach ($data2 as $row) { ?>
                              <option value="<?php echo $row->nama_produk;?>"> <?php echo $row->nama_produk;?>; </option>
                            <?php } ?>
                          </select>
                        </div>
                      </div>

                        <div class="item form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 16px" class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Total Aset (tidak termasuk tanah dan bangunan tempat usaha)<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"  name="total_aset">
                            <option value="">Pilih...</option>
                            <option>Sampai dengan Rp50 juta</option>
                            <option>Lebih dari Rp50 juta s.d Rp500 juta</option>
                            <option>Lebih dari Rp500 juta s.d Rp10 miliar</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="http://localhost/surveyumkm" type="button" class="btn btn-primary">Cancel </a>
              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
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
          $(document).ready(function() {
            $(".select2").select2({});

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

        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js');?>"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $('.bootstrap-select').selectpicker();
 
            //GET UPDATE
            $('.update-record').on('click',function(){
                var package_id = $(this).data('package_id');
                var package_name = $(this).data('package_name');
                $(".strings").val('');
                $('#UpdateModal').modal('show');
                $('[name="edit_id"]').val(package_id);
                $('[name="package_edit"]').val(package_name);
                //AJAX REQUEST TO GET SELECTED PRODUCT
                $.ajax({
                    url: "<?php echo site_url('package/get_product_by_package');?>",
                    method: "POST",
                    data :{package_id:package_id},
                    cache:false,
                    success : function(data){
                        var item=data;
                        var val1=item.replace("[","");
                        var val2=val1.replace("]","");
                        var values=val2;
                        $.each(values.split(","), function(i,e){
                            $(".strings option[value='" + e + "']").prop("selected", true).trigger('change');
                            $(".strings").selectpicker('refresh');
 
                        });
                    }
                     
                });
                return false;
            });
 
            //GET CONFIRM DELETE
            $('.delete-record').on('click',function(){
                var package_id = $(this).data('package_id');
                $('#DeleteModal').modal('show');
                $('[name="delete_id"]').val(package_id);
            });
 
        });
    </script> 