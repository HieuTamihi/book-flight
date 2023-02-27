<?php
session_start();
if (!empty($_SESSION['user'])) {
    if (isset($_SESSION['permision'])) {
        if ($_SESSION['permision'] == 1) {
        } else if ($_SESSION['permision'] == 2) {
            header('location:index.php');
            die();
        }
    }
} else {
    header('location:../login/index.php');
    die();
}
?>
<?php
    include "header.php";
?>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Edit Order</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Order</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/order/editOD.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <?php $getOrderById = $order->getOrderById($_GET['id']);
                            foreach ($getOrderById as $values) : ?>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">FULL NAME</label>
                                        <input value="<?php echo $values['fullname'] ?>" type="text" id="inputName" class="form-control" name="fullname">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">PHONE NUMBER</label>
                                        <input value="<?php echo $values['phone_number'] ?>" type="text" id="inputName" class="form-control" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputStatus">STATUS</label>
                                        <select id="inputStatus" class="form-control custom-select" name="status">
                                            <option selected disabled>Select one</option>
                                            <option value="1" <?php if ($values['status'] == 1) echo 'selected' ?>>Đã Liên Hệ</option>
                                            <option value="0" <?php if ($values['status'] == 0) echo 'selected' ?>>Chưa Liên Hệ</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">CREATE AT</label>
                                        <input value="<?php echo $values['create_at'] ?>" type="datetime" id="inputName" class="form-control" name="create_at">
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <input type="submit" name="submit" value="Apply change" class="btn btn-success float-right">
                        </div>
                    </div>
                </form>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include "footer.php"; ?>