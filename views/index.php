<?php
session_start();
if (!empty($_SESSION['user'])) {
} else {
    header('location:../login/index.php');
    die();
}
?>
<?php
include "header.php";
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-6 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                ORDERS</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($order->getAllOrder()) ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-cart-shopping fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if (isset($_SESSION['permision'])) :
            if ($_SESSION['permision'] == 1) :
        ?>
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-6 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        USER</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo count($admin->getAllUser()) ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        <?php endif ?>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include "footer.php"; ?>