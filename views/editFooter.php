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
                            <h1>Edit Footer</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Footer</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/footer/editFT.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <?php $getFTById = $footer->getFTById($_GET['id']);
                            foreach ($getFTById as $values) : ?>
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Title</b></label>
                                            <input value="<?php echo $values['title'] ?>" type="text" id="inputID" class="form-control" name="title">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Image</b></label>
                                            <br>
                                            <img style="width:150px;" src="../public/image/<?php echo $values['image'] ?>" alt="">
                                            <input type="file" name="image1" id="fileToUpload">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content</b></label>
                                            <textarea name="content" id="summernote" cols="30" rows="10"><?php echo $values['content'] ?></textarea>
                                        </div>
                                        <div class="form-group">
                                        <label for="inputStatus">Column</label>
                                        <select id="inputStatus" class="form-control custom-select" name="col">
                                            <option selected disabled>Select one</option>
                                            <option value="0" <?php if ($values['col'] == 0) echo 'selected' ?>>Left</option>
                                            <option value="1" <?php if ($values['col'] == 1) echo 'selected' ?>>Right</option>
                                        </select>
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