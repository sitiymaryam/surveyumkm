<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Basic Form Element | Kiaalap - Kiaalap Admin Template</title>
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
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="<?php echo base_url();?>asset3/css/modals.css">
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

<body>
    <body>
    <div class="container">
    <h1>Membuat Checkbox didalam Select Option</h1>
        <div class="row" onclick="showCheckboxes()">
           <input type="checkbox" name="">
            <div class="rows"></div>
        </div>
        <div id="box">
            <label for="box1"><input type="checkbox" id="bx1">Web Master</label>
            <label for="box2"><input type="checkbox" id="bx2">Web Design</label>    
            <label for="box3"><input type="checkbox" id="bx3">Web Programming</label>   
            <label for="box4"><input type="checkbox" id="bx4">Mobile Apps</label>           
        </div>
    </div>
</body>

    <script type="text/javascript">
    var expanded = false;
    function showCheckboxes() {
    var checkboxes = document.getElementById("box");
    if(!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
    }else
    {
    checkboxes.style.display = "none";
    expanded = false;
    }
    }
</script>

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
    <!-- tab JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/tab.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url();?>asset3/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="<?php echo base_url();?>asset3/js/tawk-chat.js"></script>