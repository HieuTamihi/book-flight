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
                            <h1>Edit Section 3</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Section 3</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/section3/editSS3.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <?php $getSS3ById = $section3->getSS3ById($_GET['id']);
                            foreach ($getSS3ById as $values) : ?>
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Title</b></label>
                                            <input value="<?php echo $values['main_title'] ?>" type="text" id="inputName" class="form-control" name="main">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Sub Title</b></label>
                                            <input value="<?php echo $values['sub_title'] ?>" type="text" id="inputName" class="form-control" name="sub">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Description</b></label>
                                            <textarea name="des" id="summernote" cols="160" rows="5"><?php echo $values['des'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Image col 1</b></label>
                                            <br>
                                            <img style="width:150px;" src="../public/image/<?php echo $values['img_col_1'] ?>" alt="">
                                            <input type="file" name="image1" id="fileToUpload">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Title col 1</b></label>
                                            <input value="<?php echo $values['title_col_1'] ?>" type="text" id="inputName" class="form-control" name="title1">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content col 1</b></label>
                                            <textarea name="content1" id="summernote1" cols="160" rows="5"><?php echo $values['des_col_1'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Image col 2</b></label>
                                            <br>
                                            <img style="width:150px;" src="../public/image/<?php echo $values['img_col_2'] ?>" alt="">
                                            <input type="file" name="image2" id="fileToUpload1">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Title col 2</b></label>
                                            <input value="<?php echo $values['title_col_2'] ?>" type="text" id="inputName" class="form-control" name="title2">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content col 2</b></label>
                                            <textarea name="content2" id="summernote2" cols="160" rows="5"><?php echo $values['des_col_2'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Image col 3</b></label>
                                            <br>
                                            <img style="width:150px;" src="../public/image/<?php echo $values['img_col_3'] ?>" alt="">
                                            <input type="file" name="image3" id="fileToUpload2">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Title col 3</b></label>
                                            <input value="<?php echo $values['title_col_3'] ?>" type="text" id="inputName" class="form-control" name="title3">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content col 3</b></label>
                                            <textarea name="content3" id="summernote3" cols="160" rows="5"><?php echo $values['des_col_1'] ?></textarea>
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