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
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'add') {
        echo "<script> alert('Thêm Thành Công'); </script>";
    }
    if ($_GET['status'] == 'edit') {
        echo "<script> alert('Sửa Thành Công'); </script>";
    }
    if ($_GET['status'] == 'success') {
        echo "<script> alert('Xóa Thành Công'); </script>";
    }
}
?>
<?php
include "header.php";
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Card Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Card Management</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addCard"><i class="fas fa-plus"></i> ADD</button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 2%">
                                NO.
                            </th>
                            <th style="width: 8%">
                                Type card
                            </th>
                            <th style="width: 10%">
                                Name card 1
                            </th>
                            <th style="width: 12%">
                                Content name
                            </th>
                            <th style="width: 10%">
                                Name card 2
                            </th>
                            <th style="width: 12%">
                                Content name 2
                            </th>
                            <th style="width: 11%">
                                Name card 3
                            </th>
                            <th style="width: 12%">
                                Content name 3
                            </th>
                            <th style="width: 10%">
                                Name card 4
                            </th>
                            <th style="width: 12%">
                                Content name 4
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $getTitle = $card->getTitle();
                        foreach ($getTitle as $value) : ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><?php echo $value['type_card'] ?></td>
                                <td><?php echo $value['name_card_1'] ?></td>
                                <td><?php echo $value['content_name'] ?></td>
                                <td><?php echo $value['name_card_2'] ?></td>
                                <td><?php echo $value['content_name_2'] ?></td>
                                <td><?php echo $value['name_card_3'] ?></td>
                                <td><?php echo $value['content_name_3'] ?></td>
                                <td><?php echo $value['name_card_4'] ?></td>
                                <td><?php echo $value['content_name_4'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editCard.php?id=<?php echo $value['id'] ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if (count($getTitle) > 1) : ?>
                                        <a class="btn btn-danger btn-sm" href="../controllers/card/deleteCard.php" onclick="return confirm('Are you sure you want to delete?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php
                        $getAllCard = $card->getAllCard();
                        foreach ($getAllCard as $value) : ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><?php echo $value['type_card'] ?></td>
                                <td><?php echo $value['name_card_1'] ?></td>
                                <td><?php echo $value['content_name'] ?></td>
                                <td><?php echo $value['name_card_2'] ?></td>
                                <td><?php echo $value['content_name_2'] ?></td>
                                <td><?php echo $value['name_card_3'] ?></td>
                                <td><?php echo $value['content_name_3'] ?></td>
                                <td><?php echo $value['name_card_4'] ?></td>
                                <td><?php echo $value['content_name_4'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editCard.php?id=<?php echo $value['id'] ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if (count($getAllCard) > 1) : ?>
                                        <a class="btn btn-danger btn-sm" href="../controllers/card/deleteCard.php?id=<?php echo $value['id'] ?>" onclick="return confirm('Are you sure you want to delete?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    <!-- MODAL ADD Icon Order -->
    <!-- Modal -->
    <div class="modal fade" id="addCard" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD Card</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/card/addCard.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Type Card</label>
                    <div class="input-group form-group">
                        <input type="text" name="type" class="form-control" placeholder="Enter type card..." required>
                    </div>
                    <label for="inputStatus">Name Card 1</label>
                    <div class="input-group form-group">
                        <input type="text" name="name1" class="form-control" placeholder="Enter name card 1...">
                    </div>
                    <label for="inputStatus">Content Name</label>
                    <div class="input-group form-group">
                        <input type="text" name="content" class="form-control" placeholder="Enter content name..." required>
                    </div>
                    <label for="inputStatus">Name Card 2</label>
                    <div class="input-group form-group">
                        <input type="text" name="name2" class="form-control" placeholder="Enter name card 2...">
                    </div>
                    <label for="inputStatus">Content Name 2</label>
                    <div class="input-group form-group">
                        <input type="text" name="content2" class="form-control" placeholder="Enter content name 2...">
                    </div>
                    <label for="inputStatus">Name Card 3</label>
                    <div class="input-group form-group">
                        <input type="text" name="name3" class="form-control" placeholder="Enter name card 3...">
                    </div>
                    <label for="inputStatus">Content Name 3</label>
                    <div class="input-group form-group">
                        <input type="text" name="content3" class="form-control" placeholder="Enter content name 3...">
                    </div>
                    <label for="inputStatus">Name Card 4</label>
                    <div class="input-group form-group">
                        <input type="text" name="name4" class="form-control" placeholder="Enter name card 4...">
                    </div>
                    <label for="inputStatus">Content Name 4</label>
                    <div class="input-group form-group">
                        <input type="text" name="content4" class="form-control" placeholder="Enter content name 4...">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ADD" class="btn float-right login_btn btn-primary" name="submit" style="margin: 0 15px 15px 15px;">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>