<?php
ob_start();
session_start();
require '../classes/admin.php';
$obj_admin = new Admin();
?>
<script>
    function info_delete() {
        var check = confirm("Are You Want To Sure Delete This !");
        if (check) {
            return true;
        } else {
            return false;
        }
    }
</script>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="PIXINVENT">
        <title>Project Dashboard - Robust Free Bootstrap Admin Template</title>
        <link rel="apple-touch-icon" sizes="60x60" href="../assets/admin_assets/app-assets/images/ico/apple-icon-60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="../assets/admin_assets/app-assets/images/ico/apple-icon-76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="../assets/admin_assets/app-assets/images/ico/apple-icon-120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="../assets/admin_assets/app-assets/images/ico/apple-icon-152.png">
        <link rel="shortcut icon" type="image/x-icon" href="../assets/admin_assets/app-assets/images/ico/favicon.ico">
        <link rel="shortcut icon" type="image/png" href="../assets/admin_assets/app-assets/images/ico/favicon-32.png">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <!-- BEGIN VENDOR CSS-->
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/bootstrap.css">
        <!-- font icons-->
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/fonts/icomoon.css">
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/vendors/css/extensions/pace.css">
        <!-- END VENDOR CSS-->
        <!-- BEGIN ROBUST CSS-->
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/bootstrap-extended.css">
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/colors.css">
        <!-- END ROBUST CSS-->
        <!-- BEGIN Page Level CSS-->
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/app-assets/css/core/colors/palette-gradient.css">
        <!-- END Page Level CSS-->
        <!-- BEGIN Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../assets/admin_assets/assets/css/style.css">
        <!-- END Custom CSS-->
    </head>
    <body data-open="click" data-menu="vertical-menu" data-col="2-columns" class="vertical-layout vertical-menu 2-columns  fixed-navbar">


        <?php include './includes/header_top.php'; ?>

        <?php include './includes/menu.php'; ?>

        <div class="app-content content container-fluid">
            <div class="content-wrapper">

                <?php
                if (isset($pages)) {
                    if ($pages == "add_category") {
                        include './pages/add_category_content.php';
                    } else if ($pages == "manage_category") {
                        include './pages/manage_category_content.php';
                    } else if ($pages == "edit_category") {
                        include './pages/edit_category_content.php';
                    } else if ($pages == "add_manufacturer") {
                        include './pages/add_manufacturer_content.php';
                    } else if ($pages == "manage_manufacturer") {
                        include './pages/manage_manufacturer_content.php';
                    } else if ($pages == "edit_manufacturer") {
                        include './pages/edit_manufacturer_content.php';
                    } else if ($pages == "add_product") {
                        include './pages/add_product_content.php';
                    } else if ($pages == "manage_product") {
                        include './pages/manage_product_content.php';
                    } else if ($pages == "edit_product") {
                        include './pages/edit_product_content.php';
                    } else if ($pages == "view_product") {
                        include './pages/view_product_content.php';
                    }
                } else {
                    include './includes/dashboard.php';
                }
                ?>

            </div>
        </div>

<?php include './includes/footer.php'; ?>
        <!-- BEGIN VENDOR JS-->
        <script src="../assets/admin_assets/app-assets/js/core/libraries/jquery.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/ui/tether.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/js/core/libraries/bootstrap.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/ui/unison.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/ui/blockUI.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/ui/jquery.matchHeight-min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/ui/screenfull.min.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/vendors/js/extensions/pace.min.js" type="text/javascript"></script>
        <!-- BEGIN VENDOR JS-->
        <!-- BEGIN PAGE VENDOR JS-->
        <script src="../assets/admin_assets/app-assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>
        <!-- END PAGE VENDOR JS-->
        <!-- BEGIN ROBUST JS-->
        <script src="../assets/admin_assets/app-assets/js/core/app-menu.js" type="text/javascript"></script>
        <script src="../assets/admin_assets/app-assets/js/core/app.js" type="text/javascript"></script>
        <!-- END ROBUST JS-->
        <!-- BEGIN PAGE LEVEL JS-->
        <script src="../assets/admin_assets/app-assets/js/scripts/pages/dashboard-lite.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL JS-->
    </body>
</html>
