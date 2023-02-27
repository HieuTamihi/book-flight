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
                            <h1>Edit User</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit User</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/user/editUS.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <?php $getUserById = $admin->getUserById($_GET['id']);
                            foreach ($getUserById as $values) : ?>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">USERNAME</label>
                                        <input value="<?php echo $values['username'] ?>" type="text" id="inputName" class="form-control" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName">PASSWORD</label>
                                        <input value="<?php echo $values['password'] ?>" type="password" id="inputName" class="form-control" name="password">
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