<form action="<?=base_url().'index.php/admin/Verifikasi/update_email'?>" method="POST">
        <div class="data-table-area mg-b-15">
            
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div style="padding: 35px" class="main-sparkline13-hd">
                                    <h1>Verifikasi Email <span class="table-project-n">Akun</span> UMKM</h1>
                                </div>
                            </div>
                                    <table>


                                        <tr>
                                            <td width="114">Email Penerima</td>
                                            <td width="20">:</td>
                                            <td width="400" height="50"><input style="width: 300px; height: 30px" type="text" name="email" value="<?php echo $email;?>"></td>
                                            <input type="hidden" name="id" value="<?php echo $ID;?>">
                                        </tr>

                                        <tr>
                                            <td width="114">Username</td>
                                            <td width="20">:</td>
                                            <td width="400" height="50"><input style="width: 300px; height: 30px" type="text" name="username"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td width="114">Password</td>
                                            <td width="20">:</td>
                                            <td width="400" height="50"><input style="width: 300px; height: 30px" type="text" name="password"></td>
                                        </tr>
                                        
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td><button type="submit" class="btn btn-custon-rounded-four btn-primary">Kirim Pesan</button></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</form>
        <!-- Static Table End -->
        

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
