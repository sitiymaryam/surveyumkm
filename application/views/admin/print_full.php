<!DOCTYPE html>
<html>
<head>
	<title></title>
</head> 
<body>
    <img src="asset1/images/logo BI.png" style="width:100px">
<h3 style="text-align: center;"> Laporan Survei UMKM <br>
Binaan Bank Indonesia Kpw D.I Yogyakarta  </h3>
<?php foreach($umkm as $umkm_data){ ?>
    <table>     
    <tr height = "50px">
        <td width="170">
        <label class="">Nama UMKM</label>
        </td>                                                                                                                  
        <td width="10">:</td>
        <td width="350">
        <?php echo $umkm_data->nama_umkm;?></td>
    </tr>
    <tr height = "50px">
        <td width="170">
        <label class="">Periode Penginputan Data</label>
        </td>                                                                      
        <td width="10">:</td>
        <td width="350">
        <?php echo $bulan.' - '.$tahun;?></td>
    </tr>
</table>
<h4 style="text-align: left;">A. Data Kelembagaan</h4>
<?php foreach($data_kelembagaan as $item_kelembagaan){ ?>

	<table style="margin-left: 50px">      

                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Legalitas Usaha</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_kelembagaan['legalitas_usaha'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Struktur Organisasi</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_kelembagaan['struktur_organisasi'];?></td>
                                                                </tr>
                                                                </table>
                                                            <?php }
                                                            foreach($data_keuangan as $item_keuangan){ ?>
<h4 style="text-align: left;">B. Data Keuangan</h4>
<table style="margin-left: 50px">     
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Laporan Keuangan</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $item_keuangan['l_keuangan'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Rekening Bank</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $item_keuangan['rekening_id'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jenis Transaksi Pembayaran <br> yang diterima</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $item_keuangan['transaksi'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Transaksi Non Tunai</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450"><?php if($item_keuangan['id_transaksi_sub'] ==0)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo  $$item_keuangan['transaksi_sub'];?>
                                                                        <?php } ?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($item_keuangan['id_transaksi_sub_sub'] ==0)
                                                                    {?>
                                                                    <?php echo "-";?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo  $item_keuangan['transaksi_sub_sub'] ;?>
                                                                        <?php } ?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kerjasama dengan Digital Payment</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($item_keuangan['id_transaksi_sub_sub_sub'] <'2')
                                                                    {?>
                                                                    <?php echo $item_keuangan['transaksi_sub_sub_sub'];?>
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
                                                                    <?php if($item_keuangan['id_transaksi_sub_sub_sub'] >'2')
                                                                    {?>
                                                                    <?php echo $item_keuangan['transaksi_sub_sub_sub'];?>
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
                                                                    <?php if($item_keuangan['id_transaksi_sub_sub_sub_sub']=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $item_keuangan['transaksi_sub_sub_sub_sub'] ;?>
                                                                        <?php } ?>
                                                                        
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $item_keuangan['ptradisional'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $item_keuangan['ptradisional_sub'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Lembaga Pembayaran Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($item_keuangan['ptradisional_nama']=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $item_keuangan['ptradisional_nama'] ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Akses terhadap Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php echo $item_keuangan['pnontradisional'];?></td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nama Fintech Lending</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($item_keuangan['id_pnontradisional_sub']=='0')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $item_keuangan['pnontradisional_sub'] ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
                                                                <tr height = "40px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Pembiayaan Non Tradisional</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="450">
                                                                    <?php if($item_keuangan['pnontradisional_nominal']=='')
                                                                    {?>
                                                                    <?php echo "-" ;?>
                                                                    <?php }

                                                                    else { ?>
                                                                        <?php echo $item_keuangan['pnontradisional_nominal'] ;?>
                                                                        <?php } ?>
                                                                    </td>
                                                                </tr>
    </table>
<?php } 
foreach($data_produksi as $item_produksi){
?>
<h4 style="text-align: left;">C. Data Produksi</h4>
<table style="margin-left: 50px">

                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kemampuan Produksi</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_produksi['nama_kproduksi'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemasok Bahan Baku</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_produksi['bahan_baku'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Proses Ramah Lingkungan</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_produksi['proses'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kepemilikan Izin/Sertifikasi Produk <br> dan Dokumen ekspor</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td width="420">
                                                                    <?php echo $item_produksi['izin'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pernah Mengikuti Kurasi Produk <br> oleh BI dan/atau Lembaga lain</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_produksi['kurasi'];?></td>
                                                                </tr>
</table>
<?php } 
foreach($data_pemasaran as $item_pemasaran){
?>
<h4 style="text-align: left;">D. Data Pemasaran</h4>
<table style="margin-left: 50px">

                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Omzet Pertahun</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_pemasaran['omzet'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Jangkauan Pasar</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_pemasaran['pasar'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Pemanfaatan Internet</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_pemasaran['internet'];?></td>
                                                                </tr>
                                                                <tr height = "250">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Penjualan Offline/Online</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_pemasaran['penjualan'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Nominal Penjualan Online <br> melalui Media Sosial Per Tahun</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_pemasaran['nominal'];?></td>
                                                                </tr>
                                                                <tr height = "250px">
                                                                    <td width="241" class="form-group">
                                                                    <label class="">Kontrak/pre-order dengan mitra pemasaran</label>
                                                                    </td>                                                                      
                                                                    <td width="10">:</td>
                                                                    <td class="form-group">
                                                                    <?php echo $item_pemasaran['kontrak'];?></td>
                                                                </tr>
</table>
<hr>
<br>
<?php } }?>

</body>
</html>