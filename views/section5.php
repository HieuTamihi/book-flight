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
    if ($_GET['status'] == 'fail') {
        echo "<script> alert('Xóa Thất Bại! Bạn không thể xóa Main Title và Description gốc được'); </script>";
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
                    <h1>Section 5 Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Section 5 Management</li>
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
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addSS5"><i class="fas fa-plus"></i> ADD</button>
                </div>
            </div>
            <!-- Topbar Search -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                NO.
                            </th>
                            <th style="width: 20%">
                                Title
                            </th>
                            <th style="width: 20%">
                                Image
                            </th>
                            <th style="width: 30%">
                                Content
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $getAllSection5 = $section5->getAllSection5();
                        foreach ($getAllSection5 as $value) : ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><?php echo $value['title'] ?></td>
                                <td><img src="../public/image/<?php echo $value['image'] ?>" alt="" style="width:150px;"></td>
                                <td><?php echo str_replace(" . ", '<br>- ', $value['content']) ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editSection5.php?id=<?php echo $value['id']; ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if(count($getAllSection5) > 1): ?>
                                    <a class="btn btn-danger btn-sm" href="../controllers/section5/deleteSS5.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <?php endif; ?>
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
    <!-- MODAL ADD SECTION 5 -->
    <!-- Modal -->
    <div class="modal fade" id="addSS5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD SECTION 5</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/section5/addSS5.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Title</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter title..." name="title" required>
                    </div>
                    <label for="inputStatus">Image</label>
                    <div class="input-group form-group">
                        <input type="file" name="image1" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Content</label>
                    <div class="input-group form-group">
                        <textarea name="content" id="summernote" cols="30" rows="10" require></textarea>
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