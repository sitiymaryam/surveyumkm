                                        

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top: 70px">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <a href="http://localhost/surveyumkm/admin/DataLaporan/cetak_profil/<?php echo $ID;?>">
                                        <button style=" margin-left: 89%" class="btn btn-primary">PRINT</button> </a>
                                <li class="active"><a href="#Kelembagaan">Detail Data Profil </a></li>
                                <li>
                                </li>

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
                                                                    <td width="300" class="form-group">
                                                                    Nama UMKM
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Nama Pemilik Usaha/Ketua Kelompok
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nama_pemilik;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Kategori UMKM
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $kategori_umkm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Tahun Dimulainya Usaha
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $tahun_mulai;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Bulan Dimulainya Usaha
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $bulan_mulai;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Tahun Dimulainya Fasilitas Oleh BI/Lembaga Pendamping Lainnya
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $tahun_fasilitas;?></td>
                                                                </tr>
                                                                <tr height = "70px">
                                                                    <td width="300" class="form-group">
                                                                    Triwulan Dimulainya Fasilitas oleh BI/Lembaga pendamping lainnya
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $triwulan_fasilitas;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Nomor KTP Pemilik Usaha/Ketua Kelompok
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $nomor_ktp;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Nomor NPWP
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $no_npwp;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="200" class="form-group">
                                                                    Nomor HP
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $no_hp;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Alamat
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $alamat;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Kabupaten/Kota
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $kabupaten;?></td>
                                                                </tr>
                                                                 <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Provinsi
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $provinsi;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Sektor Ekonomi
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $sektor_ekonomi;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Produk/Komoditas Utama
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $produk_utama;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Produk/Komoditas Lainnya
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $produk_lainnya;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Jumlah SDM
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $jumlah_sdm;?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="300" class="form-group">
                                                                    Total Aset
                                                                    </td>                                                                      
                                                                    <td width="34">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $total_aset;?></td>
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