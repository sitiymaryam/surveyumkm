 <div class="alert alert-info" style=" width: 98%; text-align: right; padding :2px">
        <a href="http://localhost/surveyumkm/user/RiwayatLaporan/index" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
            <strong style="margin-right: 10px">Tutup</strong>
    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 0px">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Detail Data Pemasaran </a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="Kelembagaan">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form action="" method="post">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="devit-card-custom">
                                                            	<table style="margin-left: 50px">
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
                                                                    <label class="">Omzet Pertahun</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $omzet;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jangkauan Pasar</label>
                                                                    </td>                                                                       
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $pasar;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemanfaatan Internet</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $internet;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Penjualan Offline/Online</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $penjualan;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Penjualan Online <br> melalui Media Sosial Per Tahun</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($nominal ==NULL)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $nominal ;?>
                                                                        <?php } ?>
                                                                   </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kontrak/pre-order dengan mitra pemasaran</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $kontrak;?></td>
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