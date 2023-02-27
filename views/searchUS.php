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
<?php include "header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Orders Management</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Orders Management</li>
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
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#addOD"><i class="fas fa-plus"></i> ADD</button>
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="GET" action="">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light small" placeholder="Search for username..." aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Topbar Search -->
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                        <tr>
                            <th style="width: 20%">
                                NO.
                            </th>
                            <th style="width: 20%">
                                USERNAME
                            </th>
                            <th style="width: 20%">
                                PASSWORD
                            </th>
                            <th style="width: 20%">
                                ROLE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        if (isset($_GET['keyword'])) :
                            $keyword = $_GET['keyword'];
                            $search = $admin->search($keyword);
                            // // hiển thị 3 sản phẩm trên 1 trang
                            $perPage = 6;
                            // // Lấy số trang trên thanh địa chỉ
                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                            // // Tính tổng số dòng, ví dụ kết quả là 18
                            $total = count($search);
                            // // lấy đường dẫn đến file hiện hành
                            $url = $_SERVER['PHP_SELF'] . "?keyword=" . $keyword;
                            $search1 = $admin->search1($keyword, $page, $perPage);
                            foreach ($search1 as $value) :
                        ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $value['username'] ?></td>
                                    <td><?php echo $value['password'] ?></td>
                                    <td><?php if ($value['id'] == "1") {
                                            echo "ADMIN";
                                        } else {
                                            echo "USER";
                                        }
                                        ?>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="editOrder.php?id=<?php echo $value['id']; ?>">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="../controllers/deleteOD.php?id=<?php echo $value['id']; ?>">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php endforeach;
                        endif ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- store bottom filter -->
        <div class="store-filter clearfix">
            <ul class="store-pagination">
                <?php echo $order->paginate($url, $total, $perPage, $page); ?>
            </ul>
        </div>
        <!-- /store bottom filter -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- MODAL ADD ORDER -->
<!-- Modal -->
<div class="modal fade" id="addOD" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">ADD ORDER</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <form action="addOD.php" method="post">
                <label for="inputStatus">Full Name</label>
                <div class="input-group form-group">
                    <input type="text" class="form-control" placeholder="Enter full name..." name="fullname" required>
                </div>
                <label for="inputStatus">Phone Number</label>
                <div class="input-group form-group">
                    <input type="number" class="form-control" placeholder="Enter phone number..." name="phone" required>
                </div>
                <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select id="inputStatus" class="form-control custom-select" name="status" required>
                        <option selected disabled>Select one</option>
                        <option value="0">Chưa liên hệ</option>
                        <option value="1">Đã liên hệ</option>
                    </select>
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
<?php include "footer.php"; ?>