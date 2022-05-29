<?php
if (isset($_POST['btn'])) {
    $message = $obj_app->update_cart_product_info_by_product_id($_POST);
}
if (isset($_GET['p_status'])) {
    $product_id = $_GET['product_id'];
    if ($_GET['p_status'] == "delete") {
        $message = $obj_app->delete_cart_product_info_by_product_id($product_id);
    }
}
$query_result = $obj_app->select_card_product_info_by_session_id();
?>
<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Your cart</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Your cart</a>
        </div>
    </div>
</div>
<!-- Page info end -->
<h4 align="center">
    <?php
    if (isset($message)) {
        echo $message;
        unset($message);
    }
    ?>
</h4>
<!-- cart section end -->
<section class="cart-section spad">
    <div class="page-top-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well text-center">
                        <table class="table table-bordered">
                            <tr>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Product Image</th>
                                <th>Product Price</th>
                                <th>Product quantity</th>
                                <th>Product Total</th>
                                <th>Product Action</th>
                            </tr>
                            <?php $sum=0; while ($cart_product = mysqli_fetch_assoc($query_result)) { ?>
                                <tr>
                                    <td><?php echo $cart_product['product_id']; ?></td>
                                    <td><?php echo $cart_product['product_name']; ?></td>
                                    <td>
                                        <img src="admin/<?php echo $cart_product['product_image']; ?>" alt="Image" width="70" height="70">
                                    </td>
                                    <td><?php echo $cart_product['product_price']; ?></td>
                                    <td>
                                        <form action="" method="post">
                                            <table>
                                                <tr>
                                                    <td><input type="number" name="product_quantity" value="<?php echo $cart_product['product_quantity']; ?>"></td>
                                                <input type="hidden" name="product_id" value="<?php echo $cart_product['product_id']; ?>">
                                                <td><input type="submit" name="btn" value="Update"></td>
                                                </tr>
                                            </table>
                                        </form>
                                    </td>
                                    <td>
                                        <?php 
                                        $total = $cart_product['product_quantity'] * $cart_product['product_price'];
                                        echo 'BTD:'." ". $total;
                                        ?>
                                    </td>
                                    <td><a href="?p_status=delete&product_id=<?php echo $cart_product['product_id']; ?>" onclick="return delete_info()" class="btn btn-danger"><i class="flaticon-zoom"></i></a></td>
                                </tr>
                            <?php $sum=$sum+$total; } ?>
                        </table>
                        <table class="table table-striped">
                            <tr>
                                <th class="pull-left">Sub Total</th>
                                <td class="pull-right"><?php echo 'BDT:'." ".$sum; ?></td>
                            </tr>
                            <tr>
                                <th class="pull-left">Vat Total</th>
                                <td class="pull-right">
                                    <?php 
                                    $vat = $sum*0.15;
                                    echo 'BDT:'.' '. $vat;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <th class="pull-left">Grand Total</th>
                                <td class="pull-right">
                                    <?php
                                    $grand_tota = $sum+$vat;
                                    echo 'BDT: '.$grand_tota;
                                    ?>
                                </td>
                            </tr>
                            <tr>
                                <td class="pull-left"><a href="" class="btn btn-primary" >Continue Shoping</a></td>
                                <td class="pull-right"><a href="checkout.php" class="btn btn-success" >Checkout</a></td>

                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

