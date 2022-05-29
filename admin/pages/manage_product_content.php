<?php
if (isset($_GET['p_status'])) {
    $product_id = $_GET['product_id'];
    if ($_GET['p_status'] == "unpublished") {
        $message = $obj_admin->unpublished_product_info_by_id($product_id);
    } else if ($_GET['p_status'] == "published") {
        $message = $obj_admin->published_product_info_by_id($product_id);
    } else if ($_GET['p_status'] == "delete") {
        $message = $obj_admin->delete_product_info_by_id($product_id);
    }
}

$result = $obj_admin->select_all_product_info();
?>

<!-- Bordered table start -->
<div class="row">
    <div class="col-xs-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title">Manage Product</h2>
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

                                <th><h4><b>Product Id</b></h4></th>
                                <th><h4><b>Product Name</b></h4></th>
                                <th><h4><b>Category Name</b></h4></th>
                                <th><h4><b>Manufacturer Name</b></h4></th>                                
                                <th><h4><b>Product Price</b></h4></th>
                                <th><h4><b>Publication Status</b></h4></th>
                                <th><h4><b>Action</b></h4></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($product_info = mysqli_fetch_assoc($result)) { ?>
                                <tr>
                                    <td scope="row"><?php echo $product_info['product_id']; ?></td>
                                    <td><?php echo $product_info['product_name']; ?></td>
                                    <td><?php echo $product_info['category_name']; ?></td>
                                    <td><?php echo $product_info['manufacturer_name']; ?></td>
                                    <td><?php echo $product_info['product_price']; ?></td>
                                    <td>
                                        <?php
                                        if ($product_info['publication_status'] == 1) {
                                            echo "Published";
                                        } else {
                                            echo 'Unpublished';
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <a href="view_product.php?product_id=<?php echo $product_info['product_id']; ?>" class="btn btn-primary" title="View"><i class="icon-zoom-in"></i></a>
                                        <a href="edit_product.php?product_id=<?php echo $product_info['product_id']; ?>" class="btn btn-primary" title="edit"><i class="icon-eye6"></i></a>
                                        <?php if ($product_info['publication_status'] == 1) { ?>
                                            <a href="?p_status=unpublished&product_id=<?php echo $product_info['product_id']; ?>" class="btn btn-success" title="status"><i class="icon-eye6"></i></a>
                                        <?php } else { ?>
                                            <a href="?p_status=published&product_id=<?php echo $product_info['product_id']; ?>" class="btn btn-success" title="status"><i class="icon-eye6"></i></a>
                                        <?php } ?>
                                        <a href="?p_status=delete&product_id=<?php echo $product_info['product_id']; ?>" class="btn btn-danger" title="delete" onclick="return info_delete()"><i class="icon-eye6"></i></a>
                                    </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bordered table end -->
