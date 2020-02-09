

    
<div style="margin-top: 70px" class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div style="margin-left: 40px" class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Daftar Riwayat Laporan</a></li>
                            </ul>
                            <!--<div>
                                <a href="<?php echo base_url("index.php/admin/DataLaporan/cetaklaporanfull/");?>" ><button style=" margin-left: 85%" class="btn btn-primary">Cetak Laporan Full</button> </a>
                            </div>-->
                              
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="data-table-area mg-b-15">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <div class="sparkline13-list">
                                                        <div class="sparkline13-graph">
                                                            <div class="datatable-dashv1-list custom-datatable-overright">
                                                                <table id="table" data-toggle="table">
                                                                    <thead>
                                                                        <tr>
                                                                        <th>No</th>
                                                                        <th>Nama UMKM</th>
                                                                        <th>Tahun Dimulainya Usaha </th>
                                                                        <th>Lihat Laporan</th>
                                                                    </thead>
                                                                    <tbody><?php $no =1; ?>
                                                                    <?php foreach ($data1 as $key) { ?>
                                                                    <tr style="margin-bottom: 6px">
                                                                        <td ><?php echo $no++;?></td>
                                                                        <td>
                                                                        <?php echo $key->nama_umkm;?></td>
                                                                        <td><?php echo $key->tahun_mulai;?></td>
                                                                        <td><a href="<?php echo base_url("index.php/admin/DataLaporan/lihat_laporan/");echo ($key->ID); ?>" type="button" class="btn btn-custon-rounded-four btn-primary" style="color: white">Lihat Laporan</a></td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    

                                                                    </tbody>
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