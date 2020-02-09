
  
    
<div style="margin-top: 70px" class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Daftar Riwayat Laporan</a></li>
                            </ul>

                             <div style="margin-top: 20px" class="">
                                <a href="<?php echo base_url("index.php/admin/DataLaporan/v_cetakexcel/");echo $ID; ?>" ><button style=" margin-left: 75%;" class="btn btn-success">Cetak Excel</button> </a>
                            
                                <a href="<?php echo base_url("index.php/admin/DataLaporan/v_cetaklaporan/");echo $ID; ?>" ><button style="margin-left:20px "   class="btn btn-primary">Cetak Pdf</button> </a>
                            </div>
                            
                            <div style="margin-top: 30px" id="myTabContent" class="tab-content custom-product-edit">
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
                                                                        <th>Periode Penginputan Data</th>
                                                                        <th>Jenis Laporan</th>
                                                                        <th>Detail</th>
                                                                        <th>Edit</th>
                                                                        <th>Delete</th>
                                                                    </thead>
                                                                    <tbody><?php $no =1; ?>
                                                                    <?php foreach ($data1 as $key) { ?>
                                                                    <tr style="margin-bottom: 6px">
                                                                        <td ><?php echo $no++;?></td>
                                                                        <td>
                                                                        <?php echo $key->nama_umkm;?></td>
                                                                        <td><?php echo $key->tanggal;?></td>
                                                                        <td><?php if($key->id_jenislaporan ==1)
                                                                            {?>
                                                                            <?php echo "Laporan Kelembagaan";?>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td><a href="<?php echo base_url("index.php/admin/DataLaporan/detail_lembaga/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-primary" style="color: white">Detail</a></td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/admin/DataLaporan/edit_lembaga/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-warning" style="color: white">Edit</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/admin/DataLaporan/delete_lembaga/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-danger" style="color: white">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php } ?>

                                                                    <?php $noo = $no++;?>
                                                                    <?php foreach ($data2 as $key ) { ?>
                                                                    <tr>
                                                                        <td><?php echo $noo++;?></td>
                                                                        <td>
                                                                        <?php echo $key->nama_umkm;?></td>
                                                                        <td><?php echo $key->periode;?></td>
                                                                        <td><?php if($key->id_jenislaporan ==2)
                                                                            {?>
                                                                            <?php echo "Laporan Keuangan";?>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td><a href="<?php echo base_url("index.php/admin/DataLaporan/detail_keuangan/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-primary" style="color: white">Detail</a></td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/admin/DataLaporan/edit_keuangan/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-warning" style="color: white">Edit</a>
                                                                        </td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/admin/DataLaporan/delete_keuangan/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-danger" style="color: white">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                      <?php } ?>

                                                                    <?php $nooo = $noo++;?>
                                                                    <?php foreach ($data3 as $key ) { ?>
                                                                    <tr>
                                                                        <td><?php echo $nooo++;?></td>
                                                                        <td>
                                                                        <?php echo $key->nama_umkm;?></td>
                                                                        <td><?php echo $key->tanggal;?></td>
                                                                        <td><?php if($key->id_jenislaporan ==3)
                                                                            {?>
                                                                            <?php echo "Laporan Produksi";?>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td><a href="<?php echo base_url("index.php/admin/DataLaporan/detail_produksi/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-primary" style="color: white">Detail</a></td>
                                                                        <td>
                                                                        <a href="<?php echo base_url("index.php/admin/DataLaporan/edit_produksi/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-warning" style="color: white">Edit</a> </td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/admin/DataLaporan/delete_produksi/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-danger" style="color: white">Delete</a>
                                                                        </td>
                                                                    </tr>
                                                                      <?php } ?>

                                                                    <?php $noooo = $noo++;?>
                                                                    <?php foreach ($data4 as $key ) { ?>
                                                                    <tr>
                                                                        <td><?php echo $noooo++;?></td>
                                                                        <td>
                                                                        <?php echo $key->nama_umkm;?></td>
                                                                        <td><?php echo $key->tanggal;?></td>
                                                                        <td><?php if($key->id_jenislaporan ==4)
                                                                            {?>
                                                                            <?php echo "Laporan Pemasaran";?>
                                                                            <?php } ?>
                                                                        </td>
                                                                        <td><a href="<?php echo base_url("index.php/admin/DataLaporan/detail_pemasaran/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-primary" style="color: white">Detail</a></td>
                                                                        <td>
                                                                        <a href="<?php echo base_url("index.php/admin/DataLaporan/edit_pemasaran/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-warning" style="color: white">Edit</a> </td>
                                                                        <td>
                                                                            <a href="<?php echo base_url("index.php/admin/DataLaporan/delete_pemasaran/");echo ($key->id); ?>" type="button" class="btn btn-custon-rounded-four btn-danger" style="color: white">Delete</a>
                                                                        </td>
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