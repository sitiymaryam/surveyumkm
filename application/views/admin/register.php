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
                    <h2 style="font-weight: bold;">Form Registrasi Admin UMKM <br>
                      <small><p>From registrasi ini digunakan untuk melakukan pendaftaran admin UMKM dalam sistem pengiriman laporan survei UMKM <br> <br>
                      * = Harus diisi
                      </p> </small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="http://localhost/surveyumkm/index.php/admin/Register/insert" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="nama" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Password <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="last-name" name="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="last-name" name="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">No Handphone <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="last-name" name="no_hp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="number" id="last-name" name="NIP" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label style="text-align: left; font-family: arial rounded MT bold; font-weight: normal; font-size: 15px" for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Divisi<span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="nama_pemilik" class="form-control col-md-7 col-xs-12" type="text" name="divisi">
                        </div>
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <a href="http://localhost/surveyumkm/admin/Login/index" type="button" class="btn btn-primary">Cancel </a>
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