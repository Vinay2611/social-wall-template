<?php

session_start();

if(isset($_SESSION['email_id']) && !empty($_SESSION['email_id'])){
    include "../include/dbconn.php";
}else{
    header("location: login.php");
}

//group name
$group_name = array( '1' => 'Tata Sky','2' => 'Tata Global Beverages','3' => 'Voltas','4' => 'Indian Steel Wire Products',

    '5' => 'Rallis','6' => 'JUSCO','7' => 'Tata NYK Shipping India','8' => 'Tata Capital','9' => 'Tata Metaliks',

    '10' => 'Tata Steel Thailand', '11' => 'Infiniti Retail', '12' => 'Tata Elxsi', '13' => 'Trent Hypermarket', '14' => 'Tata Steel',

    '15' => 'Titan', '16' => 'Tata Communications', '17' => 'Tata Motors', '18' => 'Metahelix Life Sciences', '19' => 'Tata AIA Life Insurance',

    '20' => 'Tata Motors Finance', '21' => 'Tata Sponge Iron', '22' => 'Tata Power Solar Systems',

    '23' => 'Tata Steel  - AA', '24' => 'Tata  Sponge - AA', '25' => 'JUSCO - AA',

    '26' => 'Tata Capital - AA', '27' => 'Tata Metaliks - AA', '28' => 'Tata Communications - AA',

    '29' => 'Tata Global Beverages - AA', '30' => 'Tata Projects - AA', '31' => 'Tinplate - AA',

    '32' => 'Tata Power - AA', '33' => 'ISWP - AA'
);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Social-Wall Admin</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!--Required -->
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css?v=1.0">
    <link rel="stylesheet" href="../assets/plugins/datatables/dataTables.bootstrap.css?v=1.0">
    <link rel="stylesheet" href="../assets/dist/css/font-awesome.min.css?v=1.0">
    <link rel="stylesheet" href="../assets/dist/css/ionicons.min.css?v=1.0">
    <link rel="stylesheet" href="../assets/dist/css/AmitLTE.min.css?v=1.1">
    <link rel="stylesheet" href="../assets/dist/css/skins/_amit-skins.css?v=1.0">

    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- jQuery 2.1.4 -->
    <script src="../assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../assets/dist/js/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../assets/dist/js/app.min.js"></script>
    <script src="../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../assets/plugins/fastclick/fastclick.min.js"></script>
    <script src="../assets/dist/js/kra.js"></script>

    <!--bootbox js link-->
    <script src="../assets/plugins/bootbox/bootbox.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>-->

    <!--alertify js and css-->
    <script src="../assets/plugins/alertifyjs/alertify.min.js"></script>
    <!-- include the style -->
    <link rel="stylesheet" href="../assets/plugins/alertifyjs/css/alertify.min.css" />
    <!-- include a theme -->
    <link rel="stylesheet" href="../assets/plugins/alertifyjs/css/themes/default.min.css" />

    <!--datetimepicker-->
    <link rel="stylesheet" href="../assets/plugins/datetimepicker/css/bootstrap-datetimepicker.css">
    <script src="../assets/plugins/datetimepicker/js/moment.min.js"></script>
    <script src="../assets/plugins/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../assets/js/adminscript.js"></script>

    <style>
        .wrapper{
            background: none !important;
        }
    </style>
</head>

<body class="hold-transition skin-blue sidebar-mini">

<div class="control-sidebar-bg"></div>

<div class="wrapper">
    <!-- Left side column. contains the logo and sidebar -->
    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="logout.php" class="dropdown-toggle">
                            Logout
                        </a>
                    </li>
                    <!-- Control Sidebar Toggle Button -->
                </ul>
            </div>
        </nav>
    </header>





