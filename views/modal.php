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
                    <h1>Modal Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Modal Management</li>
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
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> ADD</button>
                </div>
            </div>
            <!-- Topbar Search -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 5%">
                                NO.
                            </th>
                            <th style="width: 12%">
                                Logo
                            </th>
                            <th style="width: 12%">
                                Image
                            </th>
                            <th style="width: 12%">
                                Title
                            </th>
                            <th style="width: 12%">
                                Description
                            </th>
                            <th style="width: 10%">
                                Input 1
                            </th>
                            <th style="width: 10%">
                                Input 2
                            </th>
                            <th style="width: 12%">
                                Button form
                            </th>
                            <th style="width: 12%">
                                Note
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $getModal = $modal->getModal();
                        foreach ($getModal as $value) : ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><img src="../public/image/<?php echo $value['logo'] ?>" alt="" style="width: 120px;"></td>
                                <td><img src="../public/image/<?php echo $value['image'] ?>" alt="" style="width: 120px;"></td>
                                <td><?php echo $value['title'] ?></td>
                                <td><?php echo $value['des'] ?></td>
                                <td><?php echo $value['input_1'] ?></td>
                                <td><?php echo $value['input_2'] ?></td>
                                <td><?php echo $value['btn_form'] ?></td>
                                <td><?php echo $value['note'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editModal.php?id=<?php echo $value['id']; ?>">
                                        <i class="fas fa-pencil-alt"></i> Edit
                                    </a>
                                    <?php if (count($getModal) > 1) : ?>
                                        <a class="btn btn-danger btn-sm" href="../controllers/modal/deleteMD.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
    <!-- Modal -->
    <div class="modal fade" id="addModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD Modal</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/modal/addMD.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Logo</label>
                    <div class="input-group form-group">
                        <input type="file" name="image1" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Image</label>
                    <div class="input-group form-group">
                        <input type="file" name="image2" id="fileToUpload1">
                    </div>
                    <label for="inputStatus">Title</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter title..." name="title" required>
                    </div>
                    <label for="inputStatus">Description</label>
                    <div class="input-group form-group">
                        <textarea name="des" id="summernote" cols="30" rows="10"></textarea>
                    </div>
                    <label for="inputStatus">Input 1</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter name input 1..." name="input1" required>
                    </div>
                    <label for="inputStatus">Input 2</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter name input 2..." name="input2" required>
                    </div>
                    <label for="inputStatus">Button Form</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter Link button..." name="btn_form" required>
                    </div>
                    <label for="inputStatus">Note</label>
                    <div class="input-group form-group">
                        <textarea name="note" id="summernote1" cols="30" rows="10"></textarea>
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