<?php
if (isset($_POST['btn'])) {
    $message = $obj_app->save_temp_cart_product_info($_POST);
}
$product_id = $_GET['product_id'];
$product_info = $obj_app->select_all_published_product_info_by_id($product_id);

$category_id = $product_info['category_id'];

$result = $obj_app->select_all_published_product_info_by_category_id($category_id);
?>

<!-- Page info -->
<div class="page-top-info">
    <div class="container">
        <h4>Category PAge</h4>
        <div class="site-pagination">
            <a href="">Home</a> /
            <a href="">Shop</a>
        </div>
    </div>
</div>
<!-- Page info end -->

<!-- product section -->
<section class="product-section">
    <div class="container">
        <div class="back-link">
            <a href="index.php"> &lt;&lt; Back to Category</a>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="product-pic-zoom">
                    <img class="product-big-img" src="admin/<?php echo $product_info['product_image']; ?>" alt="">
                </div>
                <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                    <div class="product-thumbs-track">
                        <div class="pt active" data-imgbigurl="admin/<?php echo $product_info['product_image']; ?>"><img src="admin/<?php echo $product_info['product_image']; ?>" alt=""></div>
                        <div class="pt" data-imgbigurl="admin/<?php echo $product_info['product_image']; ?>"><img src="admin/<?php echo $product_info['product_image']; ?>" alt=""></div>
                        <div class="pt" data-imgbigurl="admin/<?php echo $product_info['product_image']; ?>"><img src="admin/<?php echo $product_info['product_image']; ?>" alt=""></div>
                        <div class="pt" data-imgbigurl="admin/<?php echo $product_info['product_image']; ?>"><img src="admin/<?php echo $product_info['product_image']; ?>" alt=""></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 product-details">
                <h2 class="p-title"><b>Product Name :</b><?php echo $product_info['product_name']; ?></h2>
                <h2 class="p-title"><b>Catgegory Name : </b><?php echo $product_info['category_name']; ?></h2>
                <h2 class="p-title"><b>Manufacturer Name :</b><?php echo $product_info['manufacturer_name']; ?></h2>
                <h2 class="p-title"><b>Product Price :</b><?php echo $product_info['product_price']; ?></h2>
                <h2 class="p-title"><b>Stock Amount :</b><?php echo $product_info['product_quantity']; ?></h2>
                <form action="" method="post">
                    <input type="number" name="product_quantity" value="1"><br>
                    <input type="hidden" name="product_id"  value="<?php echo $product_info['product_id']; ?>"><br>
                    <input type="submit" name="btn" class="site-btn" value="ADD TO CART" margin-top="10px">
                </form>

                <div id="accordion" class="accordion-area">
                    <div class="panel">
                        <div class="panel-header" id="headingOne">
                            <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Product Short Description :</button>
                        </div>
                        <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="panel-body">
                                <p><?php echo $product_info['product_short_description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <div class="panel-header" id="headingTwo">
                            <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Product Long Description : </button>
                        </div>
                        <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="panel-body">
                                <img src="./img/cards.png" alt="">
                                <p><?php echo $product_info['product_long_description']; ?></p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="social-sharing">
                    <a href=""><i class="fa fa-google-plus"></i></a>
                    <a href=""><i class="fa fa-pinterest"></i></a>
                    <a href=""><i class="fa fa-facebook"></i></a>
                    <a href=""><i class="fa fa-twitter"></i></a>
                    <a href=""><i class="fa fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product section end -->


<!-- RELATED PRODUCTS section -->
<section class="related-product-section">
    <div class="container">
        <div class="section-title">
            <h2>RELATED PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            <?php while ($related_product_info = mysqli_fetch_assoc($result)) { ?>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="admin/<?php echo $related_product_info['product_image']; ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            <a href="product_detailes.php?product_id=<?php echo $related_product_info['product_id']; ?>" class="add-card"><i class="flaticon-zoom"></i><span>Detailes</span></a>

                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo $related_product_info['product_price']; ?></h6>
                        <p><?php echo $related_product_info['product_name']; ?> </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- RELATED PRODUCTS section end -->
