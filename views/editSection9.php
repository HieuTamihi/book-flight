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
                            <h1>Edit Section 9</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Section 9</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/section9/editSS9.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <?php $getSS9ById = $section9->getSS9ById($_GET['id']);
                            foreach ($getSS9ById as $values) : ?>
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Title</b></label>
                                            <input value="<?php echo $values['title'] ?>" type="text" id="inputName" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content</b></label>
                                            <input value="<?php echo $values['des'] ?>" type="text" id="inputName" class="form-control" name="content">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Background</b></label>
                                            <br>
                                            <img style="width:150px;" src="../public/image/<?php echo $values['background'] ?>" alt="">
                                            <input type="file" name="image1" id="fileToUpload">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Icon button</b></label>
                                            <br>
                                            <img style="width:150px;" src="../public/image/<?php echo $values['icon_btn'] ?>" alt="">
                                            <input type="file" name="image2" id="fileToUpload1">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Button section</b></label>
                                            <input value="<?php echo $values['btn_sec'] ?>" type="text" id="inputName" class="form-control" name="btn_sec">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Link Button</b></label>
                                            <input value="<?php echo $values['link_btn'] ?>" type="text" id="inputName" class="form-control" name="link">
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