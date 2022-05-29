<?php
$product_id = $_GET['product_id'];

if (isset($_POST['btn'])) {
    $message = $obj_admin->update_product_info($_POST);
}
$result = $obj_admin->select_all_published_category_info();
$result1 = $obj_admin->select_all_published_manufacturer_info();
$product_info = $obj_admin->select_all_product_info_product_id($product_id);
?>
<div class="row match-height">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h2 class="card-title" id="basic-layout-form-center">Edit Product Form</h2>
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
                <div class="card-block">

                    <form name="edit_product_form" class="form" action="" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6 offset-md-3">
                                <div class="form-body">
                                    <div class="card-block card-dashboard">
                                        <h2 align="center">
                                            <?php
                                            if (isset($message)) {
                                                echo $message;
                                                unset($message);
                                            }
                                            ?>
                                        </h2>
                                    </div>
                                    <div class="form-group">
                                        <label for="eventInput1">Product Name</label>
                                        <input type="text" id="eventInput1" class="form-control" placeholder="Product Name" name="product_name" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Name" value="<?php echo $product_info['product_name'];?>">
                                        <input type="hidden" id="eventInput1" class="form-control" placeholder="Product Id" name="product_id" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Id" value="<?php echo $product_info['product_id'];?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="issueinput6">Category Name</label>
                                        <select id="issueinput6" name="category_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Category Name">

                                            <option value="">-- Select Category Name --</option>
                                            <?php while ($category_info = mysqli_fetch_assoc($result)) { ?>
                                                <option value="<?php echo $category_info['category_id']; ?>"><?php echo $category_info['category_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="issueinput6">Manufacturer Name</label>
                                        <select id="issueinput6" name="manufacturer_id" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Manufacturer Name">
                                            <option value="">-- Select Manufactuter Name --</option>
                                            <?php while ($manufacturer_info = mysqli_fetch_assoc($result1)) { ?>
                                                <option value="<?php echo $manufacturer_info['manufacturer_id']; ?>"><?php echo $manufacturer_info['manufacturer_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>                                    
                                    <div class="form-group">
                                        <label for="eventInput1">Product Price</label>
                                        <input type="number" id="eventInput1" class="form-control" placeholder="Product Price" name="product_price" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Price" value="<?php echo $product_info['product_price'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="eventInput1">Product Quantity</label>
                                        <input type="number" id="eventInput1" class="form-control" placeholder="Product Quantity" name="product_quantity" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Quantity" value="<?php echo $product_info['product_quantity'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="eventInput1">Product Sku</label>
                                        <input type="number" id="eventInput1" class="form-control" placeholder="Product Sku" name="product_sku" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Sku" value="<?php echo $product_info['product_sku'];?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput8">Product Short Description</label>
                                        <textarea id="issueinput8" rows="5" class="form-control" name="product_short_description" placeholder="Product Short Description" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Short Description">
                                            <?php echo $product_info['product_short_description'];?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput8">Product Long Description</label>
                                        <textarea id="issueinput8" rows="5" class="form-control" name="product_long_description" placeholder="Product Long Description" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Long Description">
                                            <?php echo $product_info['product_long_description'];?>
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="eventInput1">Product Image</label>
                                        <input type="file" id="eventInput1" class="form-control" placeholder="Product Image" name="product_image" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Product Image">
                                    </div>
                                    <div class="form-group">
                                        <label for="issueinput6">Publication Status</label>
                                        <select id="issueinput6" name="publication_status" class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Publication_status">
                                            <option value="">-- Select Publication_status --</option>
                                            <option value="1">Published</option>
                                            <option value="0">Unpublished</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-actions center">
                            <button name="btn" type="submit" class="btn btn-primary">
                                <i class="icon-check2"></i> Update Product
                            </button>
                            <button name="btn" type="reset" class="btn btn-warning mr-1">
                                <i class="icon-cross2"></i> Reset
                            </button>

                        </div>
                    </form>	

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.forms['edit_product_form'].elements['category_id'].value = "<?php echo $product_info['category_id'];?>";
    document.forms['edit_product_form'].elements['manufacturer_id'].value = "<?php echo $product_info['manufacturer_id'];?>";
    document.forms['edit_product_form'].elements['publication_status'].value = "<?php echo $product_info['publication_status'];?>";
</script>