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
                    <h1>Section 3 Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Section 3 Management</li>
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
                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addSS3"><i class="fas fa-plus"></i> ADD</button>
                </div>
            </div>
            <!-- Topbar Search -->
            <div class="card-body p-0">
                <?php
                $count = 1;
                $getAllSection3 = $section3->getAllSection3();
                foreach ($getAllSection3 as $value) : ?>
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 10%">
                                    NO.
                                </th>
                                <th style="width: 20%">
                                    Main Title
                                </th>
                                <th style="width: 35%">
                                    Sub Title
                                </th>
                                <th style="width: 20%">
                                    Content
                                </th>
                            </tr>
                        </thead>
                        <tbody style="background: #f2f2f2;">
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><?php echo $value['main_title'] ?></td>
                                <td><?php echo $value['sub_title'] ?></td>
                                <td><?php echo $value['des'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editSection3.php?id=<?php echo $value['id']; ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if(count($getAllSection3) > 1): ?>
                                    <a class="btn btn-danger btn-sm" href="../controllers/section3/deleteSS3.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 10%">
                                    Img Col 1
                                </th>
                                <th style="width: 10%">
                                    Title Col 1
                                </th>
                                <th style="width: 15%">
                                    Content Col 1
                                </th>
                                <th style="width: 10%">
                                    Img Col 2
                                </th>
                                <th style="width: 10%">
                                    Title Col 2
                                </th>
                                <th style="width: 15%">
                                    Content Col 2
                                </th>
                                <th style="width: 10%">
                                    Img Col 3
                                </th>
                                <th style="width: 10%">
                                    Title Col 3
                                </th>
                                <th style="width: 15%">
                                    Content Col 3
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="../public/image/<?php echo $value['img_col_1'] ?>" alt="" style="width: 80px;"></td>
                                <td><?php echo $value['title_col_1'] ?></td>
                                <td><?php echo $value['des_col_1'] ?></td>
                                <td><img src="../public/image/<?php echo $value['img_col_2'] ?>" alt="" style="width: 80px;"></td>
                                <td><?php echo $value['title_col_2'] ?></td>
                                <td><?php echo $value['des_col_2'] ?></td>
                                <td><img src="../public/image/<?php echo $value['img_col_3'] ?>" alt="" style="width: 80px;"></td>
                                <td><?php echo $value['title_col_3'] ?></td>
                                <td><?php echo $value['des_col_3'] ?></td>
                                <td class="project-actions text-right">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                <?php endforeach; ?>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
    <!-- MODAL ADD SECTION 2 -->
    <!-- Modal -->
    <div class="modal fade" id="addSS3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD SECTION 3</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/section3/addSS3.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Main Title</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter main title..." name="main" required>
                    </div>
                    <label for="inputStatus">Sub Title</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter sub title..." name="sub" required>
                    </div>
                    <label for="inputStatus">Description</label>
                    <div class="input-group form-group">
                        <textarea name="des" id="summernote" cols="30" rows="10" require></textarea>
                    </div>
                    <label for="inputStatus">Image Col 1</label>
                    <div class="input-group form-group">
                        <input type="file" name="image1" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Title Col 1</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter title col 1..." name="title1" required>
                    </div>
                    <label for="inputStatus">Content col 1</label>
                    <div class="input-group form-group">
                        <textarea name="content1" id="summernote1" cols="30" rows="10" require></textarea>
                    </div>
                    <label for="inputStatus">Image Col 2</label>
                    <div class="input-group form-group">
                        <input type="file" name="image2" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Title Col 2</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter title col 2..." name="title2" required>
                    </div>
                    <label for="inputStatus">Content col 2</label>
                    <div class="input-group form-group">
                        <textarea name="content2" id="summernote2" cols="30" rows="10" require></textarea>
                    </div>
                    <label for="inputStatus">Image Col 3</label>
                    <div class="input-group form-group">
                        <input type="file" name="image3" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Title Col 3</label>
                    <div class="input-group form-group">
                        <input type="text" class="form-control" placeholder="Enter title col 3..." name="title3" required>
                    </div>
                    <label for="inputStatus">Content col 3</label>
                    <div class="input-group form-group">
                        <textarea name="content3" id="summernote3" cols="30" rows="10" require></textarea>
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