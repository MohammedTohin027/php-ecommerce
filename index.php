<?php
ob_start();
require './classes/app.php';
$obj_app = new App();
?>
<script>
    function delete_info(){
        var check = confirm("Are You Want To Sure Delete This!");
        if(check){
            return true;
        }
        else{
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Divisima | eCommerce Template</title>
        <meta charset="UTF-8">
        <meta name="description" content=" Divisima | eCommerce Template">
        <meta name="keywords" content="divisima, eCommerce, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link href="assets/fornt_end_assets/img/favicon.ico" rel="shortcut icon"/>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


        <!-- Stylesheets -->
        <link rel="stylesheet" href="assets/fornt_end_assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/flaticon.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/slicknav.min.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/jquery-ui.min.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/animate.css"/>
        <link rel="stylesheet" href="assets/fornt_end_assets/css/style.css"/>


        <!--[if lt IE 9]>
                  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>
        <!-- Page Preloder -->
        <div id="preloder">
            <div class="loader"></div>
        </div>

        <!-- Header section -->
        <header class="header-section">
            <?php include './includes/header_top.php'; ?>
            <?php include './includes/menu.php'; ?>		
        </header>

        <?php
        if (isset($pages)) {
            if($pages == "about"){
                include './pages/about_page.php';
            }
            else if($pages == "product_detailes"){
                include './pages/product_detailes_content.php';
            }
            else if($pages == "temp_cart_info"){
                include './pages/temp_cart_info_detailes.php';
            }
            else if($pages == "checkout"){
                include './pages/checkout_content.php';
            }
            else if($pages == "shopping_page"){
                include './pages/shopping_page_content.php';
            }
        } else {
            include './includes/slider.php';
            include './includes/home.php';
        }
        ?>

        <?php include './includes/footer.php'; ?>





        <!--====== Javascripts & Jquery ======-->
        <script src="assets/fornt_end_assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/fornt_end_assets/js/bootstrap.min.js"></script>
        <script src="assets/fornt_end_assets/js/jquery.slicknav.min.js"></script>
        <script src="assets/fornt_end_assets/js/owl.carousel.min.js"></script>
        <script src="assets/fornt_end_assets/js/jquery.nicescroll.min.js"></script>
        <script src="assets/fornt_end_assets/js/jquery.zoom.min.js"></script>
        <script src="assets/fornt_end_assets/js/jquery-ui.min.js"></script>
        <script src="assets/fornt_end_assets/js/main.js"></script>

    </body>
</html>
