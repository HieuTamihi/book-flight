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
            <?php if (isset($_GET['col'])) : ?>
                <?php if (($_GET['col']) == 0) : ?>
                    <section class="content">
                        <form action="../controllers/contact_order/editCTAOD.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php $getContactById = $contact_order->getContactById($_GET['id']);
                                    foreach ($getContactById as $values) : ?>
                                        <div class="card card-primary" style="background: #e6e6e6;">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName"><b>Image</b></label>
                                                    <br>
                                                    <img style="width:150px;" src="../public/image/<?php echo $values['image'] ?>" alt="">
                                                    <input type="file" name="image1" id="fileToUpload">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">CONTENT</label>
                                                    <input value="<?php echo $values['content'] ?>" type="text" id="inputName" class="form-control" name="content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">Link</label>
                                                    <input value="<?php echo $values['link'] ?>" type="datetime" id="inputName" class="form-control" name="link">
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
                <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET['col'])) : ?>
                <?php if (($_GET['col']) == 1) : ?>
                    <section class="content">
                        <form action="../controllers/contact_order/editCTAOD.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php $getContactById = $contact_order->getContactById($_GET['id']);
                                    foreach ($getContactById as $values) : ?>
                                        <div class="card card-primary" style="background: #e6e6e6;">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName"><b>Image</b></label>
                                                    <br>
                                                    <img style="width:150px;" src="../public/image/<?php echo $values['image'] ?>" alt="">
                                                    <input type="file" name="image2" id="fileToUpload">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">CONTENT</label>
                                                    <input value="<?php echo $values['content'] ?>" type="text" id="inputName" class="form-control" name="content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">Link</label>
                                                    <input value="<?php echo $values['link'] ?>" type="datetime" id="inputName" class="form-control" name="link">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" name="submit1" value="Apply change" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
            <?php if (isset($_GET['col'])) : ?>
                <?php if (($_GET['col']) == 2) : ?>
                    <section class="content">
                        <form action="../controllers/contact_order/editCTAOD.php" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <?php $getContactById = $contact_order->getContactById($_GET['id']);
                                    foreach ($getContactById as $values) : ?>
                                        <div class="card card-primary" style="background: #e6e6e6;">
                                            <div class="card-body">
                                                <div class="form-group">
                                                    <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName"><b>Image</b></label>
                                                    <br>
                                                    <img style="width:150px;" src="../public/image/<?php echo $values['image'] ?>" alt="">
                                                    <input type="file" name="image3" id="fileToUpload">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">CONTENT</label>
                                                    <input value="<?php echo $values['content'] ?>" type="text" id="inputName" class="form-control" name="content">
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputName">Link</label>
                                                    <input value="<?php echo $values['link'] ?>" type="datetime" id="inputName" class="form-control" name="link">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <input type="submit" name="submit2" value="Apply change" class="btn btn-success float-right">
                                </div>
                            </div>
                        </form>
                    </section>
                <?php endif; ?>
            <?php endif; ?>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include "footer.php"; ?>