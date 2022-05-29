<?php

class Admin {

    //put your code here
    function __construct() {
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_select = "db_dishima_ecomerce_project_1";

        $con = mysqli_connect($host_name, $user_name, $password);
        if ($con) {
//            echo 'Database Server Connected';
            $db_select = mysqli_select_db($con, $db_select);
            if ($db_select) {
                return $con;
//                echo 'Database Selected';
            } else {
                die('Database Not Selected' . mysqli_error($con));
            }
        } else {
            die('Database Server Not Connected' . mysqli_error($con));
        }
    }

// ================================================= Category Function Start =======================================================
    function save_category_info($data) {
        $con = $this->__construct();
        $sql = "INSERT INTO tbl_category(category_name,category_description,publication_status)VALUES('$data[category_name]','$data[category_description]','$data[publication_status]')";
        if (mysqli_query($con, $sql)) {
            $message = "Category Info Save Successfully !";
            return $message;
        } else {
            die("Category Save Failed" . mysqli_error($con));
        }
    }

    function select_all_category_info() {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_category WHERE deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function unpublished_category_info_by_id($category_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_category SET publication_status=0 WHERE category_id='$category_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Category Info Unpublished Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function published_category_info_by_id($category_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_category SET publication_status=1 WHERE category_id='$category_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Category Info Published Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function delete_category_info_by_id($category_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_category SET deletion_status=0 WHERE category_id='$category_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Category Info Delete Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function select_all_category_info_by_id($category_id) {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_category WHERE category_id='$category_id' ";
        if (mysqli_query($con, $sql)) {
            $query_reslult = mysqli_query($con, $sql);
            $result = mysqli_fetch_assoc($query_reslult);
            return $result;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function update_category_info_by_id($data) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_category SET category_name='$data[category_name]',category_description='$data[category_description]',publication_status='$data[publication_status]' WHERE category_id='$data[category_id]' ";
        if (mysqli_query($con, $sql)) {
            header('Location: manage_category.php');
            $_SESSION['message'] = "Category Info Update Successfully";
            return $_SESSION['message'];
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

// ================================================= Category Function End =======================================================
// ================================================= Manufacturer Function Start =======================================================



    function save_manufacturer_info($data) {
        $con = $this->__construct();
        $sql = "INSERT INTO tbl_manufacturer(manufacturer_name,manufacturer_description,publication_status)VALUES('$data[manufacturer_name]','$data[manufacturer_description]','$data[publication_status]')";
        if (mysqli_query($con, $sql)) {
            $message = "Manufacturer Save Successfully !";
            return $message;
        } else {
            die("Manufacturer Info Save Failed" . mysqli_error($con));
        }
    }

    function select_all_manufacturer_info() {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_manufacturer WHERE deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function unpublished_manufacturer_info_by_id($manufacturer_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_manufacturer SET publication_status=0 WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Manufacturer Info Unpublished Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function published_manufacturer_info_by_id($manufacturer_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_manufacturer SET publication_status=1 WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Manufacturer Info Published Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function delete_manufacturer_info_by_id($manufacturer_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_manufacturer SET deletion_status=0 WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Manufacturer Info Delete Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function select_all_manufacturer_info_by_id($manufacturer_id) {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_manufacturer WHERE manufacturer_id='$manufacturer_id' ";
        if (mysqli_query($con, $sql)) {
            $query_reslult = mysqli_query($con, $sql);
            $result = mysqli_fetch_assoc($query_reslult);
            return $result;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function update_manufacturer_info_by_id($data) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_manufacturer SET manufacturer_name='$data[manufacturer_name]',manufacturer_description='$data[manufacturer_description]',publication_status='$data[publication_status]' WHERE manufacturer_id='$data[manufacturer_id]' ";
        if (mysqli_query($con, $sql)) {
            header('Location: manage_manufacturer.php');
            $_SESSION['message'] = "Manufacturer Info Update Successfully";
            return $_SESSION['message'];
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

// ================================================= Manufacturer Function End =======================================================
    // ================================================= Product Function Start =======================================================

    function select_all_published_category_info() {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_category WHERE publication_status=1 AND deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function select_all_published_manufacturer_info() {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_manufacturer WHERE publication_status=1 AND deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function save_product_info($data) {
        $con = $this->__construct();

        $dirctory = "../assets/product_image/";
        $tatget_file = $dirctory . $_FILES['product_image']['name'];

        $file_size = $_FILES['product_image']['size'];
        $file_type = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['product_image']['tmp_name']);
        if ($check) {
            if ($file_type != 'jpg' && $file_type != "png") {
                echo 'This Image Type is Not Valied. Please Choose Another Image & Try Again !';
            } else {
                if ($file_size > 1048576) {
                    echo 'This Image is Too Large. Please Choose Another Image & Try Again !';
                } else {
                    move_uploaded_file($_FILES['product_image']['tmp_name'], $tatget_file);
                    $sql = "INSERT INTO tbl_product(product_name,category_id,manufacturer_id,product_price,product_quantity,product_sku,product_short_description,product_long_description,product_image,publication_status)VALUES('$data[product_name]','$data[category_id]','$data[manufacturer_id]','$data[product_price]','$data[product_quantity]','$data[product_sku]','$data[product_short_description]','$data[product_long_description]','$tatget_file','$data[publication_status]')";
                    if (mysqli_query($con, $sql)) {
                        $message = "Product Info Save Successfully !";
                        return $message;
                    } else {
                        die("Product Info Save Failed" . mysqli_error($con));
                    }
                }
            }
        } else {
            echo 'This File is Not An Image ! Please Give Image & Try Again. ';
        }
    }

    function select_all_product_info() {
        $con = $this->__construct();
        $sql = "SELECT p.*, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacturer as m WHERE p.category_id = c.category_id AND p.manufacturer_id = m.manufacturer_id AND p.deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function unpublished_product_info_by_id($product_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_product SET publication_status=0 WHERE product_id='$product_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Product Info Unpublished Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function published_product_info_by_id($product_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_product SET publication_status=1 WHERE product_id='$product_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Product Info Published Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function delete_product_info_by_id($product_id) {
        $con = $this->__construct();
        $sql = "UPDATE tbl_product SET deletion_status=0 WHERE product_id='$product_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Product Info Delete Successfully";
            return $message;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function select_all_product_info_product_id($product_id) {
        $con = $this->__construct();
        $sql = "SELECT p.*, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacturer as m WHERE p.category_id = c.category_id AND p.manufacturer_id = m.manufacturer_id AND p.deletion_status = 1 AND p.product_id = '$product_id' ";
        if (mysqli_query($con, $sql)) {
            $query_reslult = mysqli_query($con, $sql);
            $result = mysqli_fetch_assoc($query_reslult);
            return $result;
        } else {
            die("Quety Problem" . mysqli_error($con));
        }
    }

    function update_product_info($data) {
        $con = $this->__construct();
        $dirctory = "../assets/product_image/";
        $tatget_file = $dirctory . $_FILES['product_image']['name'];

        $file_size = $_FILES['product_image']['size'];
        $file_type = pathinfo($_FILES['product_image']['name'], PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['product_image']['tmp_name']);
        if ($check) {
            if ($file_type != 'jpg' && $file_type != "png") {
                echo 'This Image Type is Not Valied. Please Choose Another Image & Try Again !';
            } else {
                if ($file_size > 1048576) {
                    echo 'This Image is Too Large. Please Choose Another Image & Try Again !';
                } else {
                    move_uploaded_file($_FILES['product_image']['tmp_name'], $tatget_file);
                    $sql = "UPDATE tbl_product SET product_name='$data[product_name]',category_id='$data[category_id]',manufacturer_id='$data[manufacturer_id]',product_price='$data[product_price]',product_quantity='$data[product_quantity]',product_sku='$data[product_sku]',product_short_description='$data[product_short_description]',product_long_description='$data[product_long_description]',product_image='$tatget_file',publication_status='$data[publication_status]' WHERE product_id='$data[product_id]' ";
                    if (mysqli_query($con, $sql)) {
                        header('Location: manage_product.php');
                        $_SESSION['message'] = "Product Info Update Successfully";
                        return $_SESSION['message'];
                    } else {
                        die("Quety Problem" . mysqli_error($con));
                    }
                }
            }
        } else {
            echo 'This File is Not An Image ! Please Give Image & Try Again. ';
        }
    }

// ================================================= Product Function End =======================================================
}
