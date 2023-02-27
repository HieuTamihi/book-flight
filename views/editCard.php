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
                            <h1>Edit Card</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Edit Card</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <form action="../controllers/card/editCard.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-12">
                            <?php $getCardById = $card->getCardById($_GET['id']);
                            foreach ($getCardById as $values) : ?>
                                <div class="card card-primary">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <input hidden value="<?php echo $values['id'] ?>" type="text" id="inputID" class="form-control" name="id">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Type Card</b></label>
                                            <input value="<?php echo $values['type_card'] ?>" type="text" id="inputID" class="form-control" name="type">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Name Card 1</b></label>
                                            <input value="<?php echo $values['name_card_1'] ?>" type="text" id="inputID" class="form-control" name="name1">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content Name</b></label>
                                            <input value="<?php echo $values['content_name'] ?>" type="text" id="inputID" class="form-control" name="content1">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Name Card 2</b></label>
                                            <input value="<?php echo $values['name_card_2'] ?>" type="text" id="inputID" class="form-control" name="name2">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content Name 2</b></label>
                                            <input value="<?php echo $values['content_name_2'] ?>" type="text" id="inputID" class="form-control" name="content2">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Name Card 3</b></label>
                                            <input value="<?php echo $values['name_card_3'] ?>" type="text" id="inputID" class="form-control" name="name3">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content Name 3</b></label>
                                            <input value="<?php echo $values['content_name_3'] ?>" type="text" id="inputID" class="form-control" name="content3">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Name Card 4</b></label>
                                            <input value="<?php echo $values['name_card_4'] ?>" type="text" id="inputID" class="form-control" name="name4">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputName"><b>Content Name 4</b></label>
                                            <input value="<?php echo $values['content_name_4'] ?>" type="text" id="inputID" class="form-control" name="content4">
                                        </div>
                                    </div>
                                </div>
                        </div>
                    <?php endforeach; ?>
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