        <div class="header-advance-area" style="margin-top: 70px">
        <!-- Static Table Start -->
        <div class="data-table-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1>Verifikasi <span class="table-project-n">Akun</span> UMKM</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="" data-show-columns="true" data-show-pagination-switch="true" data-key-events="" data-show-toggle="" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="id">ID</th>
                                                <th data-field="name" data-editable="true">Nama UMKM</th>
                                                <th data-field="" data-editable="true">Kategori UMKM</th>
                                                <th data-field="email" data-editable="true">Email</th>
                                                <th data-field="phone" data-editable="true">Nomor HP</th>
                                                <th data-field="complete">Completed</th>
                                                <th data-field="action">Verifikasi</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
                                        $no =1;
                                        foreach ($data as $anggota) { ?>
                                    
                                        
                                        
                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><?php echo $anggota['nama_umkm']; ?></td>
                                                <td><?php echo $anggota['kategori_umkm']; ?></td>
                                                <td><?php echo $anggota['email']; ?></td>
                                                <td><?php echo $anggota['no_hp']; ?></td>
                                                <td><a href="<?php echo base_url()."index.php/admin/Verifikasi/detail_verif/".$anggota['ID']; ?>" type="button" class="btn btn-custon-rounded-four btn-warning" style="color: white">Detail</a></td>
                                                <td><?php if($anggota['username']=="")
                                                    {?>
                                                <a href="<?php echo base_url()."index.php/admin/Verifikasi/detail_email/".$anggota['ID']; ?>" type="button" class="btn btn-custon-rounded-four btn-success" style="color: white">Verifikasi</a>
                                                <?php }
                                                else { ?>
                                                    <a href="" type="button" class="btn btn-custon-rounded-four btn-primary" style="color: white">Terverifikasi</a>
                                                    <?php } ?> </td>
                                                <td><a href="<?php echo base_url()."index.php/admin/Verifikasi/delete_data/".$anggota['ID']; ?>" type="button" class="btn btn-custon-rounded-four btn-danger" style="color: white">Delete</a>
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
        <!-- Static Table End -->
        

    <!-- jquery
        ============================================ -->
</body>
    <!-- metisMenu JS
        ============================================ -->

    <!-- data table JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/tableExport.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/data-table-active.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table-editable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-editable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/colResizable-1.5.source.js"></script>
    <script src="<?php echo base_url();?>asset3/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/editable/jquery.mockjax.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/mock-active.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/select2.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/bootstrap-editable.js"></script>
    <script src="<?php echo base_url();?>asset3/js/editable/xediable-active.js"></script>
</html>