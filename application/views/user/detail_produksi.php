
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="alert alert-info" style=" width: 98%; text-align: right; padding :2px">
        <a href="http://localhost/surveyumkm/user/RiwayatLaporan/index" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
            <strong style="margin-right: 10px">Tutup</strong>
    </div>
        <!-- Static Table Start -->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Detail Data Produksi</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <table border="0" style="padding: 5px;height: 30px">
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama UMKM</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Periode Penginputan Data</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $tanggal;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kemampuan Produksi</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $k_produksi;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemasok Bahan Baku</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $bahan_baku;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Proses Ramah Lingkungan</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $proses;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Izin/Sertifikasi Produk <br> dan Dokumen ekspor</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $izin;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pernah Mengikuti Kurasi Produk <br> oleh BI dan/atau Lembaga lain</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $kurasi;?></td>
                                                                </tr>
                                                               
                                                                </table>
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
    <!-- data table JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/colResizable-1.5.source.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/select2.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/chart/jquery.peity.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/peity/peity-active.js"></script>
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
</body>

</html>