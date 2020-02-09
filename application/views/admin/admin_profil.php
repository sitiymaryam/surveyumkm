<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Professor Profile | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="<?php echo base_url();?>asset3/https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/form/all-type-forms.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

        <!-- Single pro tab review Start-->
    <div style="margin-top: 70px" class="single-pro-review-area mt-t-30 mg-b-15">
       <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <?php foreach ($data as $key) { ?>
                                <img src="<?php echo base_url();?>icon/<?php echo $key->gambar; ?>" alt="" />
                                <?php } ?>
                            </div>
                            <div class="profile-details-hr">
                                <div class="row">
                        
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Detail Profil</a></li>
                                <li><a href="#reviews"> Edit Profil</a></li>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    <div class="chat-message">
                                                        <div class="profile-hdtc">
                                                             <img class="message-avatar" src="img/contact/1.jpg" alt="">
                                                        </div>
                                                        <div class="message" style="background-color: #edf0f7">
                                                            <table>
                                                                <?php foreach ($data as $key) { ?>
                                                                <tr height ="40px">
                                                                    <td width="250">Nama Lengkap</td>
                                                                    <td width="20"> : </td>
                                                                    <td> <?php echo $key->nama;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">NIP</td>
                                                                    <td width="20"> : </td>
                                                                    <td> <?php echo $key->NIP;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Username</td>
                                                                    <td width="20"> : </td>
                                                                    <td> <?php echo $key->ussername;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Nomor HP</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->no_hp;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Email</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->email;?></td>  
                                                                </tr>
                                                                <tr height ="40px">
                                                                    <td width="250">Divisi</td>
                                                                    <td width="20"> : </td>
                                                                    <td > <?php echo $key->divisi;?></td>  
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
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form action="http://localhost/surveyumkm/admin/Profil/update_profil" method="post" class="addcourse" id="demo1-upload" enctype="multipart/form-data">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <?php foreach ($data as $key) { ?>
                                                          
                                                        <input name="ussername" type="hidden" class="form-control" value="<?php echo $key->ussername;?>">
                                                        <div class="form-group">
                                                            <label>Nama Lengkap</label>                   
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="nama" type="text" class="form-control" value="<?php echo $key->nama;?>">
                                                        </div>
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <label>Email</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" name="email" value="<?php echo $key->email;?>">
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <label>Nomor HP</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="number" name="no_hp" value="<?php echo $key->no_hp;?>">
                                                        </div>
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <label>Divisi</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" name="divisi" value="<?php echo $key->divisi;?>">
                                                        </div>
                                                        <div class="form-group">
                                                        <label>Upload Foto Profil (Max size : 100kb)</label>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-big-btn">
                                                                <label class="icon-right" for="prepend-big-btn">
                                                                        <i class="fa fa-download"></i>
                                                                    </label>
                                                                <div class="file-button">
                                                                    Browse
                                                                    <input style="background-color: brown" type="file" name="gambar">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php } ?>
                                                        </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/calendar/moment.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/calendar/fullcalendar.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/calendar/fullcalendar-active.js"></script>
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
</body>

</html>