<?php
if (isset($_GET['p_status'])) {
    $category_id = $_GET['category_id'];
    if ($_GET['p_status'] == "unpublished") {
        $message = $obj_admin->unpublished_category_info_by_id($category_id);
    } else if ($_GET['p_status'] == "published") {
        $message = $obj_admin->published_category_info_by_id($category_id);
    } else if ($_GET['p_status'] == "delete") {
        $message = $obj_admin->delete_category_info_by_id($category_id);
    }
}

$result = $obj_admin->select_all_category_info();
?>

<!-- Bordered table start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Manage Category</h2>
                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="icon-minus4"></i></a></li>
                        <li><a data-action="reload"><i class="icon-reload"></i></a></li>
                        <li><a data-action="expand"><i class="icon-expand2"></i></a></li>
                        <li><a data-action="close"><i class="icon-cross2"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-body collapse in">
                <div class="card-block card-dashboard">
                    <h2 align="center">
                        <?php
                        if (isset($message)) {
                            echo $message;
                            unset($message);
                        }
                        if (isset($_SESSION['message'])) {
                            echo $_SESSION['message'];
                            unset($_SESSION['message']);
                        }
                        ?>
                    </h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <thead>
                            <tr>

                                <th><h4><b>Category Id</b></h4></th>
                                <th><h4><b>Category Name</b></h4></th>
                                <th><h4><b>Publication Status</b></h4></th>
                                <th><h4><b>Action</b></h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($category_info = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td scope="row"><?php echo $category_info['category_id']; ?></td>
                                    <td><?php echo $category_info['category_name']; ?></td>
                                    <td>
                                        <?php
                                        if ($category_info['publication_status'] == 1) {
                                            echo "Published";
                                        } else {
                                            echo 'Unpublished';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="edit_category.php?category_id=<?php echo $category_info['category_id']; ?>" class="btn btn-primary" title="edit"><i class="icon-eye6"></i></a>
                                        <?php if ($category_info['publication_status'] == 1) { ?>
                                            <a href="?p_status=unpublished&category_id=<?php echo $category_info['category_id']; ?>" class="btn btn-success" title="status"><i class="icon-eye6"></i></a>
                                        <?php } else { ?>
                                            <a href="?p_status=published&category_id=<?php echo $category_info['category_id']; ?>" class="btn btn-success" title="status"><i class="icon-eye6"></i></a>
                                        <?php } ?>
                                            <a href="?p_status=delete&category_id=<?php echo $category_info['category_id']; ?>" class="btn btn-danger" title="delete" onclick="return info_delete()"><i class="icon-eye6"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bordered table end -->
