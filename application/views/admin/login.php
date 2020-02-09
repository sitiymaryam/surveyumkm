<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sistem Survei UMKM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="<?php echo base_url()?>/asset3/https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/owl.theme.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/normalize.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url()?>/asset3/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<H3>SISTEM SURVEI UMKM</H3>
				<h3> LOGIN ADMIN </h3>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo base_url('index.php/admin/Login/AdminLogin'); ?>" method = "post" id="loginForm">
                            <div class="form-group">
                                <label class="control-label" for="username">NIP</label>
                                <input type="text" placeholder="Masukan NIP" required="" value="" name="NIP" id="NIP" class="form-control">
                                
                            </div>
                            <div style="margin-bottom: 50px" class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
                                <a href="http://localhost/surveyumkm/admin/Login/ganti_p" style="background-color: white; color: blue; margin-left: 73%">Lupa Password ?</a>
                                
                            </div>
                            
                            <button type="submit" class="btn btn-success btn-block loginbtn">Login</button>
                            <a class="btn btn-default btn-block" href="http://localhost/surveyumkm/index.php/admin/Register/index">Register</a>
                        </form>
                    </div>
                </div>
			</div>
		</div>   
    </div>
    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url()?>/asset3/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?php echo base_url()?>/asset3/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url()?>/asset3/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="<?php echo base_url()?>/asset3/js/tawk-chat.js"></script>
</body>

</html>