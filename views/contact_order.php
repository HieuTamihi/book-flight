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
                    <h1>Contact & Order Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">Contact Management</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <section class="content-header" style="margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h5>Icon Order Management</h5>
                        </div>
                        <div class="col-sm-8"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addOD"><i class="fas fa-plus"></i> ADD</button></div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- Topbar Search -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                NO.
                            </th>
                            <th style="width: 20%">
                                Image
                            </th>
                            <th style="width: 30%">
                                Content
                            </th>
                            <th style="width: 15%">
                                Link
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $getOrder = $contact_order->getOrder();
                        foreach ($getOrder as $value) : ?>
                            <tr>
                                <td><?php echo $count++ ?></td>
                                <td><img src="../public/image/<?php echo $value['image'] ?>" alt="" style="width:50px;"> </td>
                                <td><?php echo $value['content'] ?></td>
                                <td><?php echo $value['link'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editOrderCT.php?id=<?php echo $value['id']; ?>&col=<?php echo $value['col']; ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if(count($getOrder) > 1): ?>
                                    <a class="btn btn-danger btn-sm" href="../controllers/contact_order/deleteODACT.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <section class="content-header" style="margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h5>Icon Contact Management</h5>
                        </div>
                        <div class="col-sm-8"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addCT"><i class="fas fa-plus"></i> ADD</button></div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                NO.
                            </th>
                            <th style="width: 20%">
                                Image
                            </th>
                            <th style="width: 30%">
                                Content
                            </th>
                            <th style="width: 15%">
                                Link
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $getContact = $contact_order->getContact();
                        foreach ($getContact as $value) : ?>
                            <tr style="background: #f2f2f2;">
                                <td><?php echo $count++ ?></td>
                                <td><img src="../public/image/<?php echo $value['image'] ?>" alt="" style="width:50px;"> </td>
                                <td><?php echo $value['content'] ?></td>
                                <td><?php echo $value['link'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editOrderCT.php?id=<?php echo $value['id']; ?>&col=<?php echo $value['col']; ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if(count($getContact) > 1): ?>
                                    <a class="btn btn-danger btn-sm" href="../controllers/contact_order/deleteODACT.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <section class="content-header" style="margin-top: 10px;">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <h5>Icon Contact Management</h5>
                        </div>
                        <div class="col-sm-8"><button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#addContact"><i class="fas fa-plus"></i> ADD</button></div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 10%">
                                NO.
                            </th>
                            <th style="width: 20%">
                                Image
                            </th>
                            <th style="width: 20%">
                                Content
                            </th>
                            <th style="width: 15%">
                                Link
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        $getContact1 = $contact_order->getContact1();
                        foreach ($getContact1 as $value) : ?>
                            <tr style="background: #f2f2f2;">
                                <td><?php echo $count++ ?></td>
                                <td><img src="../public/image/<?php echo $value['image'] ?>" alt="" style="width:50px;"> </td>
                                <td><?php echo $value['content'] ?></td>
                                <td><?php echo $value['link'] ?></td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-primary btn-sm" href="editOrderCT.php?id=<?php echo $value['id']; ?>&col=<?php echo $value['col']; ?>">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                    <?php if(count($getContact) > 1): ?>
                                    <a class="btn btn-danger btn-sm" href="../controllers/contact_order/deleteODACT.php?id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">
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
    <!-- MODAL ADD Icon Order -->
    <!-- Modal -->
    <div class="modal fade" id="addOD" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD Icon Order</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/contact_order/addCTAOD.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Image</label>
                    <div class="input-group form-group">
                        <input type="file" name="image1" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Content</label>
                    <div class="input-group form-group">
                        <input type="text" name="content" class="form-control" placeholder="Enter content..." required>
                    </div>
                    <label for="inputStatus">Link</label>
                    <div class="input-group form-group">
                        <input type="text" name="link" class="form-control" placeholder="Enter link..." required>
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
    <!-- MODAL ADD Icon Contact -->
    <!-- Modal -->
    <div class="modal fade" id="addCT" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD Icon Contact</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/contact_order/addCTAOD.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Image</label>
                    <div class="input-group form-group">
                        <input type="file" name="image2" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Content</label>
                    <div class="input-group form-group">
                        <input type="text" name="content" class="form-control" placeholder="Enter content..." required>
                    </div>
                    <label for="inputStatus">Link</label>
                    <div class="input-group form-group">
                        <input type="text" name="link" class="form-control" placeholder="Enter link..." required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ADD" class="btn float-right login_btn btn-primary" name="submit1" style="margin: 0 15px 15px 15px;">
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ADD Icon Contact -->
    <!-- Modal -->
    <div class="modal fade" id="addContact" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content" style="padding: 20px;">
                <div class="modal-header">
                    <h4 class="modal-title">ADD Contact</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="../controllers/contact_order/addCTAOD.php" method="post" enctype="multipart/form-data">
                    <label for="inputStatus">Image</label>
                    <div class="input-group form-group">
                        <input type="file" name="image3" id="fileToUpload">
                    </div>
                    <label for="inputStatus">Content</label>
                    <div class="input-group form-group">
                        <input type="text" name="content" class="form-control" placeholder="Enter content..." required>
                    </div>
                    <label for="inputStatus">Link</label>
                    <div class="input-group form-group">
                        <input type="text" name="link" class="form-control" placeholder="Enter link..." required>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="ADD" class="btn float-right login_btn btn-primary" name="submit2" style="margin: 0 15px 15px 15px;">
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