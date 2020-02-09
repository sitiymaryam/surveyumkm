 <?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 
 <table border="1" width="100%">
 
      <thead>
 
           <tr>
 
                <th>Nama UMKM</th>
 
                <th>Nama Pemilik</th>
 
                <th>Alamat</th>
 
           </tr>
 
      </thead>
 
      <tbody>
 
           <?php $i=1; foreach($buku as $buku) { ?>
 
           <tr>
 
                <td><?php echo $buku->nama_umkm; ?></td>
                <td><?php echo $buku->nama_pemilik; ?></td>
                <td><?php echo $buku->alamat; ?></td>
 
           </tr>
 
           <?php $i++; } ?>
 
      </tbody>
 
 </table>