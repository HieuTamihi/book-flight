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
                            <h1>Edit Section 4</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Section 4</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/section4/editSS4.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                        <?php $getSS4ById = $section4->getSS4ById($_GET['id']);
                            foreach ($getSS4ById as $values) : ?>
                            <div class="card card-primary">
                                <div class="card-body">
                                    <div class="form-group">
                                        <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName"><b>Title</b></label>
                                        <input value="<?php echo $values['title'] ?>" type="text" id="inputName" class="form-control" name="main">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName"><b>Sub Title</b></label>
                                        <input value="<?php echo $values['sub_title'] ?>" type="text" id="inputName" class="form-control" name="sub">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputName"><b>Content</b></label>
                                        <textarea name="content" id="summernote" cols="160" rows="5"><?php echo $values['content'] ?></textarea>
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