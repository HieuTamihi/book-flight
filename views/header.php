<?php
require "../config.php";
require "../models/db.php";
require "../models/admin.php";
require "../models/order.php";
require "../models/header.php";
require "../models/footer.php";
require "../models/section1.php";
require "../models/section2.php";
require "../models/section3.php";
require "../models/section4.php";
require "../models/section5.php";
require "../models/section6.php";
require "../models/section7.php";
require "../models/section8.php";
require "../models/section9.php";
require "../models/section10.php";
require "../models/contact_order.php";
require "../models/modal.php";
require "../models/card.php";
$admin = new Admin;
$order = new Order;
$header = new Header;
$footer = new Footer;
$section1 = new Section1;
$section2 = new Section2;
$section3 = new Section3;
$section4 = new Section4;
$section5 = new Section5;
$section6 = new Section6;
$section7 = new Section7;
$section8 = new Section8;
$section9 = new Section9;
$section10 = new Section10;
$contact_order = new Contact_Order;
$modal = new Modal;
$card = new Card;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/774b78ff1e.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

</head>

<style>
    .store-filter {
        margin-bottom: 15px;
        margin-top: 15px;
    }

    .store-pagination {
        float: right;
        margin-right: 25px;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .store-pagination li.active {
        background-color: #D10024;
        border-color: #D10024;
        color: #FFF;
        font-weight: 500;
        cursor: default;
    }

    .store-pagination li {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background-color: #FFF;
        border: 1px solid #E4E7ED;
        transition: 0.2s all;
    }

    .store-pagination li+li {
        margin-left: 5px;
    }
</style>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB <?php
                                                        if (isset($_SESSION['permision'])) {
                                                            if ($_SESSION['permision'] == 1) {
                                                                echo "ADMIN";
                                                            } else if ($_SESSION['permision'] == 2) {
                                                                echo "USER";
                                                            }
                                                        }
                                                        ?>
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="orders.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span>Orders Management</span>
                </a>
            </li>
            <?php
            if (isset($_SESSION['permision'])) :
                if ($_SESSION['permision'] == 1) : ?>
                    <li class="nav-item active">
                        <a class="nav-link" href="users.php">
                            <i class="fa-solid fa-user"></i>
                            <span>User Management</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>interface management</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">List:</h6>
                                <a class="collapse-item" href="manager_header.php">HEADER</a>
                                <a class="collapse-item" href="section1.php">SECTION 1</a>
                                <a class="collapse-item" href="section2.php">SECTION 2</a>
                                <a class="collapse-item" href="section3.php">SECTION 3</a>
                                <a class="collapse-item" href="section4.php">SECTION 4</a>
                                <a class="collapse-item" href="section5.php">SECTION 5</a>
                                <a class="collapse-item" href="section6.php">SECTION 6</a>
                                <a class="collapse-item" href="section7.php">SECTION 7</a>
                                <a class="collapse-item" href="section8.php">SECTION 8</a>
                                <a class="collapse-item" href="section9.php">SECTION 9</a>
                                <a class="collapse-item" href="section10.php">SECTION 10</a>
                                <a class="collapse-item" href="manager_footer.php">FOOTER</a>
                                <a class="collapse-item" href="contact_order.php">CONTACT & ORDER</a>
                                <a class="collapse-item" href="modal.php">MODAL</a>
                                <a class="collapse-item" href="card.php">CARD</a>
                            </div>
                        </div>
                    </li>
                <?php endif ?>
            <?php endif ?>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    Welcome,
                                    <?php
                                    if (isset($_SESSION['user'])) {
                                        echo $_SESSION['user'];
                                    }
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->