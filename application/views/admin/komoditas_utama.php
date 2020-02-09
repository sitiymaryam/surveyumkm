        <div class="data-table-area mg-b-15">
            
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="breadcome-heading">
                                            <form role="search" class="sr-input-func">
                                                <input type="text" placeholder="Search..." class="search-int form-control">
                                                <a href="#"><i class="fa fa-search"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <li><a href="#"></a> <span class="bread-slash"></span>
                                            </li>
                                            <li><span class="bread-blod"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Data Komoditas Utama</h4>
                            <div class="add-product">
                                <a href="http://localhost/surveyumkm/index.php/admin/KomoditasUtama/v_tambah">Tambah</a>
                            </div>
                            <div class="asset-inner">
                            	<table>
                            		 <tr>
                                        <th>No</th>
                                        <th>Komoditas / Produk</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>

                            	<?php
                                $no = 1;
                                foreach ($data as $key) { ?>
                                    <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $key['nama_produk'];?></td>
                                        <td><a href="<?php echo base_url()."index.php/admin/KomoditasUtama/v_edit/".$key['id']; ?>" type="button" class="btn btn-custon-rounded-four btn-warning" style="color: white">Edit</a></td>
                                        <td><a href="<?php echo base_url()."index.php/admin/KomoditasUtama/delete/".$key['id']; ?>" type="button" class="btn btn-custon-rounded-four btn-danger" style="color: white">Delete</a></td>
                                    </tr>

                                <?php } ?>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Static Table End -->
        

    <!-- data table JS
        ============================================ -->
 