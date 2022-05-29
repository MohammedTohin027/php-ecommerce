<?php
$result = $obj_app->select_all_published_product_info();
$result1 = $obj_app->select_all_published_product_info();
?>

<section class="features-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="assets/fornt_end_assets/img/icons/1.png" alt="#">
                    </div>
                    <h2>Fast Secure Payments</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="assets/fornt_end_assets/img/icons/2.png" alt="#">
                    </div>
                    <h2>Premium Products</h2>
                </div>
            </div>
            <div class="col-md-4 p-0 feature">
                <div class="feature-inner">
                    <div class="feature-icon">
                        <img src="assets/fornt_end_assets/img/icons/3.png" alt="#">
                    </div>
                    <h2>Free & fast Delivery</h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features section end -->


<!-- letest product section -->
<section class="top-letest-product-section">
    <div class="container">
        <div class="section-title">
            <h2>LATEST PRODUCTS</h2>
        </div>
        <div class="product-slider owl-carousel">
            <?php while ($product_info = mysqli_fetch_assoc($result)) { ?>
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="admin/<?php echo $product_info['product_image']; ?>" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                            <a href="product_detailes.php?product_id=<?php echo $product_info['product_id']; ?>" class="add-card"><i class="flaticon-zoom" onclick="delete_info()"></i><span>Detailes</span></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6><?php echo $product_info['product_price']; ?></h6>
                        <p><?php echo $product_info['product_name']; ?> </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- letest product section end -->



<!-- Product filter section -->
<section class="product-filter-section">
    <div class="container">
        <div class="section-title">
            <h2>BROWSE TOP SELLING PRODUCTS</h2>
        </div>
        <ul class="product-filter-menu">
            <li><a href="#">TOPS</a></li>
            <li><a href="#">JUMPSUITS</a></li>
            <li><a href="#">LINGERIE</a></li>
            <li><a href="#">JEANS</a></li>
            <li><a href="#">DRESSES</a></li>
            <li><a href="#">COATS</a></li>
            <li><a href="#">JUMPERS</a></li>
            <li><a href="#">LEGGINGS</a></li>
        </ul>
        <div class="row">
            <?php while ($product_info = mysqli_fetch_assoc($result1)) { ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="product-item">
                        <div class="pi-pic">
                            <img src="admin/<?php echo $product_info['product_image']; ?>" alt="">
                            <div class="pi-links">
                                <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                <a href="product_detailes.php?product_id=<?php echo $product_info['product_id']; ?>" class="add-card"><i class="flaticon-zoom"></i><span>Detailes</span></a>

                            </div>
                        </div>
                        <div class="pi-text">
                            <h6><?php echo $product_info['product_price']; ?></h6>
                            <p><?php echo $product_info['product_name']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="text-center pt-5">
            <button class="site-btn sb-line sb-dark">LOAD MORE</button>
        </div>
    </div>
</section>
<!-- Product filter section end -->


<!-- Banner section -->
<section class="banner-section">
    <div class="container">
        <div class="banner set-bg" data-setbg="assets/fornt_end_assets/img/banner-bg.jpg">
            <div class="tag-new">NEW</div>
            <span>New Arrivals</span>
            <h2>STRIPED SHIRTS</h2>
            <a href="#" class="site-btn">SHOP NOW</a>
        </div>
    </div>
</section>
<!-- Banner section end  -->
