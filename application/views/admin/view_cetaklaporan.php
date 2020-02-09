<div style="margin-top: 50px" class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Cetak Bulanan</a></li>
                                <li><a href="#reviews"> Cetak Triwulan</a></li>
                                <li><a href="#INFORMATION">Cetak Semester</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="http://localhost/surveyumkm/index.php/admin/DataLaporan/cetak" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Pilih Bulan</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control" name="bulan" >
                                                                    <option value="">Pilih..</option>
                                                                    <option value="01">Januari</option>
                                                                    <option value="02">Februari</option>
                                                                    <option value="03">Maret</option>
                                                                    <option value="04">April</option>
                                                                    <option value="05">Mei</option>
                                                                    <option value="06">Juni</option>
                                                                    <option value="07">Juli</option>
                                                                    <option value="08">Agustus</option>
                                                                    <option value="09">September</option>
                                                                    <option value="10">Oktober</option>
                                                                    <option value="11">November</option>
                                                                    <option value="12">Desember</option>
                                                                  </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pilih Tahun</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" id="website" name="tahun" required="required" placeholder="yyyy" class="form-control col-md-7 col-xs-12">
                                                                    <input type="hidden" name="id_umkm" value="<?php echo $ID; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Pdf</button>

                                                                    <a href="http://localhost/surveyumkm/index.php/admin/DataLaporan/index" type="submit" class="btn btn-custon-rounded-four btn-danger">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="http://localhost/surveyumkm/index.php/admin/DataLaporan/cetak" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Pilih Triwulan</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control" name="bulan" >
                                                                    <option value="">Pilih..</option>
                                                                    <option value="03">Triwulan 1 (Januari, Februari, Maret)</option>
                                                                    <option value="06">Triwulan 2 (April, Mei, Juni)</option>
                                                                    <option value="03">Triwulan 3 (Juli, Agustus, September)</option>
                                                                    <option value="03">Triwulan 4 (Oktober, November, Desember)</option>
                                                                  </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pilih Tahun</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" id="website" name="tahun" required="required" placeholder="yyyy" class="form-control col-md-7 col-xs-12">
                                                                    <input type="hidden" name="id_umkm" value="<?php echo $ID; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Pdf</button>

                                                                    <a href="http://localhost/surveyumkm/index.php/admin/DataLaporan/index" type="submit" class="btn btn-custon-rounded-four btn-danger">Cancel</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="/upload" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <label>Pilih Semester</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control" name="bulan" >
                                                                    <option value="">Pilih..</option>
                                                                    <option value="01">Semester 1</option>
                                                                    <option value="02">Semester 2</option>
                                                                  </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Pilih Tahun</label>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input class="form-control" type="text" id="website" name="tahun" required="required" placeholder="yyyy" class="form-control col-md-7 col-xs-12">
                                                                    <input type="hidden" name="id_umkm" value="<?php echo $ID; ?>">
                                                                </div>
                                                                <div class="form-group">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Cetak Pdf</button>

                                                                    <a href="http://localhost/surveyumkm/index.php/admin/DataLaporan/index" type="submit" class="btn btn-custon-rounded-four btn-danger">Cancel</a>
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
      