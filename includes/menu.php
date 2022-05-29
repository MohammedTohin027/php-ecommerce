<?php 
$result = $obj_app->Select_all_puclished_category_info();
?>

<nav class="main-navbar">
    <div class="container">
        <!-- menu -->
        <ul class="main-menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="#">Product</a>
                <ul class="sub-menu">
                    <?php while($category_info = mysqli_fetch_assoc($result)) {?>
                    <li><a href="#"><?php echo $category_info['category_name'];?></a></li>
                    <?php }?>
                </ul>
            </li>
            <li><a href="index.php">Coustomer Services</a></li>
            <li><a href="index.php">Contuct Us</a></li>


        </ul>
    </div>
</nav>