 <div class="alert alert-info" style=" width: 98%; text-align: right; padding :2px">
        <a href="http://localhost/surveyumkm/user/RiwayatLaporan/index" type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </a>
            <strong style="margin-right: 10px">Tutup</strong>
    </div>


                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 0px">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#Kelembagaan">Detail Data Keuangan </a></li>

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
                                                                    <label class="">Laporan Keuangan</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $l_keuangan;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Rekening Bank</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $rekening;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jenis Transaksi Pembayaran <br> yang diterima</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $transaksi;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Transaksi Non Tunai</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $transaksi_sub;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $transaksi_sub_sub;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kerjasama dengan Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub_sub <'2')
                                                                    {?>
                                                                    <?php echo $transaksi_sub_sub_sub;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo "-" ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jenis Digital Payment Yang digunakan</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub_sub >'2')
                                                                    {?>
                                                                    <?php echo $transaksi_sub_sub_sub;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo "-" ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Uang Elektronik</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_transaksi_sub_sub_sub_sub=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $transaksi_sub_sub_sub_sub ;?>
                                                                        <?php } ?>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $ptradisional;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $ptradisional_sub;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Lembaga Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($ptradisional_nama=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $ptradisional_nama ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $pnontradisional;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Fintech Lending</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($id_pnontradisional_sub=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $pnontradisional_sub ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php if($pnontradisional_nominal=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $pnontradisional_nominal ;?>
                                                                        <?php } ?>
                                                                    </td>
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