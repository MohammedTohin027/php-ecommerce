<?php
$product_id = $_GET['product_id'];

$product_info = $obj_admin->select_all_product_info_product_id($product_id);
?>

<div class="content-body">
    <section id="basic-form-layouts">

        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title" id="basic-layout-form-center">View Product</h2>
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

                        </div>
                        <div class="card-block">
                            <div class="row">
                                <div class="col-md-8 offset-md-2">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th width="250">Product id</th>
                                                    <td> 
                                                        <?php echo $product_info['product_id']; ?>
                                                    </td>                               
                                                </tr>
                                                <tr>
                                                    <th>Producd Name</th>
                                                    <td> <?php echo $product_info['product_name']; ?></td>                               
                                                </tr>
                                                <tr>
                                                    <th>Category Name</th>
                                                    <td> <?php echo $product_info['category_name']; ?></td>                               
                                                </tr>
                                                <tr>
                                                    <th>Manufacturer Name</th>
                                                    <td> <?php echo $product_info['manufacturer_name']; ?></td>                               
                                                </tr>
                                                <tr>
                                                    <th>Product Price</th>
                                                    <td> <?php echo $product_info['product_price']; ?></td>                               
                                                </tr>
                                                <tr>
                                                    <th>Product Qunatity</th>
                                                    <td><?php echo $product_info['product_quantity']; ?> </td>                               
                                                </tr>
                                                <tr>
                                                    <th>Product Sku</th>
                                                    <td><?php echo $product_info['product_sku']; ?> </td>                               
                                                </tr>
                                                <tr>
                                                    <th>Product Short Description </th>
                                                    <td>
                                                        <?php echo $product_info['product_short_description']; ?>
                                                    </td>                               
                                                </tr>
                                                <tr>
                                                    <th>Product Long Description</th>
                                                    <td> 
                                                        <?php echo $product_info['product_long_description']; ?>
                                                    </td>                               
                                                </tr>
                                                <tr>
                                                    <th>Product Image </th>
                                                    <td> 
                                                        <img src="<?php echo $product_info['product_image']; ?>" alt="image" width="200" height="300">
                                                    </td>                               
                                                </tr>
                                                <tr>
                                                    <th>Publication Status</th>
                                                    <td> 
                                                        <?php
                                                        if ($product_info['publication_status'] == 1) {
                                                            echo 'Published';
                                                        } else {
                                                            echo 'Unpublished';
                                                        }
                                                        ?>
                                                    </td>                               
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


