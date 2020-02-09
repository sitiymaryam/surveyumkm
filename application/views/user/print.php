<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>
    <img src="asset1/images/logo BI.png" style="width:100px">
<h3 style="text-align: center;"> Laporan Survei UMKM <br>
Binaan Bank Indonesia Kpw D.I Yogyakarta  </h3>

    <table>     
    <tr height = "50px">
        <td width="170">
        <label class="">Nama UMKM</label>
        </td>                                                                                                                  
        <td width="10">:</td>
        <td width="350">
        <?php echo $data_kelembagaan_hasil['nama_umkm'];?></td>
    </tr>
    <tr height = "50px">
        <td width="170">
        <label class="">Periode Penginputan Data</label>
        </td>                                                                      
        <td width="10">:</td>
        <td width="350">
        <?php echo $data_kelembagaan_hasil['tanggal'];?></td>
    </tr>
</table>
<h4 style="text-align: left;">A. Data Kelembagaan</h4>
	<table style="margin-left: 50px">      

                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Legalitas Usaha</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_kelembagaan_hasil['legalitas_usaha'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Struktur Organisasi</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_kelembagaan_hasil['struktur_organisasi'];?></td>
                                                                </tr>
                                                                </table>
<h4 style="text-align: left;">B. Data Keuangan</h4>
<table style="margin-left: 50px">     
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Laporan Keuangan</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $data_keuangan_hasil['l_keuangan'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Rekening Bank</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $data_keuangan_hasil['rekening_id'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jenis Transaksi Pembayaran <br> yang diterima</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $data_keuangan_hasil['transaksi'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Transaksi Non Tunai</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450"><?php if($data_keuangan_hasil['id_transaksi_sub'] ==0)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo  $$data_keuangan_hasil['transaksi_sub'];?>
                                                                        <?php } ?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['id_transaksi_sub_sub'] ==0)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo  $data_keuangan_hasil['transaksi_sub_sub'] ;?>
                                                                        <?php } ?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kerjasama dengan Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['id_transaksi_sub_sub_sub'] <'2')
                                                                    {?>
                                                                    <?php echo $data_keuangan_hasil['transaksi_sub_sub_sub'];?>
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
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['id_transaksi_sub_sub_sub'] >'2')
                                                                    {?>
                                                                    <?php echo $data_keuangan_hasil['transaksi_sub_sub_sub'];?>
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
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['id_transaksi_sub_sub_sub_sub']=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $data_keuangan_hasil['transaksi_sub_sub_sub_sub'] ;?>
                                                                        <?php } ?>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $data_keuangan_hasil['ptradisional'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $data_keuangan_hasil['ptradisional_sub'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Lembaga Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['ptradisional_nama']=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $data_keuangan_hasil['ptradisional_nama'] ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $data_keuangan_hasil['pnontradisional'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Fintech Lending</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['id_pnontradisional_sub']=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $data_keuangan_hasil['pnontradisional_sub'] ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($data_keuangan_hasil['pnontradisional_nominal']=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $data_keuangan_hasil['pnontradisional_nominal'] ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
    </table>

<h4 style="text-align: left;">C. Data Produksi</h4>
<table style="margin-left: 50px">

                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kemampuan Produksi</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_produksi_hasil['k_produksi'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemasok Bahan Baku</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_produksi_hasil['bahan_baku'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Proses Ramah Lingkungan</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_produksi_hasil['proses'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Izin/Sertifikasi Produk <br> dan Dokumen ekspor</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="420">
                                                                    <?php echo $data_produksi_hasil['izin'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pernah Mengikuti Kurasi Produk <br> oleh BI dan/atau Lembaga lain</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_produksi_hasil['kurasi'];?></td>
                                                                </tr>
</table>

<h4 style="text-align: left;">D. Data Pemasaran</h4>
<table style="margin-left: 50px">

                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Omzet Pertahun</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_pemasaran_hasil['omzet'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jangkauan Pasar</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_pemasaran_hasil['pasar'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemanfaatan Internet</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_pemasaran_hasil['internet'];?></td>
                                                                </tr>
                                                                <tr height = "250">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Penjualan Offline/Online</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_pemasaran_hasil['penjualan'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Penjualan Online <br> melalui Media Sosial Per Tahun</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_pemasaran_hasil['nominal'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kontrak/pre-order dengan mitra pemasaran</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $data_pemasaran_hasil['kontrak'];?></td>
                                                                </tr>
</table>


</body>
</html>