<?php
session_start();
class App {

    //put your code here
    function __construct() {
        $host_name = "localhost";
        $user_name = "root";
        $password = "";
        $db_name = "db_dishima_ecomerce_project_1";

        $con = mysqli_connect($host_name, $user_name, $password);
        if ($con) {
            $db_select = mysqli_select_db($con, $db_name);
            if ($db_select) {
                return $con;
            } else {
                die("Database Not Selected" . mysqli_error($con));
            }
        } else {
            die("Database Server Not connected" . mysqli_error($con));
        }
    }

    function Select_all_puclished_category_info() {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_category WHERE publication_status=1 AND deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function select_all_published_product_info() {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_product WHERE publication_status=1 AND deletion_status = 1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function select_all_published_product_info_by_id($product_id) {
        $con = $this->__construct();
        $sql = "SELECT p.*, c.category_name, m.manufacturer_name FROM tbl_product as p, tbl_category as c, tbl_manufacturer as m WHERE p.category_id = c.category_id AND p.manufacturer_id = m.manufacturer_id AND p.deletion_status = 1 AND product_id='$product_id' ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            $result = mysqli_fetch_assoc($query_result);
            return $result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function select_all_published_product_info_by_category_id($category_id) {
        $con = $this->__construct();
        $sql = "SELECT * FROM tbl_product WHERE category_id='$category_id' AND publication_status=1 AND deletion_status=1 ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function save_temp_cart_product_info($data) {
        $con = $this->__construct();
        
        $product_id = $data['product_id'];
        $sql = "SELECT * FROM tbl_product WHERE publication_status = 1 AND deletion_status = 1 AND product_id = '$product_id' ";

        $quety_result = mysqli_query($con, $sql);
        $result = mysqli_fetch_assoc($quety_result);
        $product_quantity = $result['product_quantity'];
        $cart_product_quantity = $data['product_quantity'];
        if ($cart_product_quantity > $product_quantity) {
            echo "You have to order equal or less then " . ' ' . $product_quantity;
        } else {
            $session_id = session_id();
            $sql = "INSERT INTO tbl_temp_cart(session_id,product_id,product_name,product_image,product_price,product_quantity) VALUES('$session_id','$product_id','$result[product_name]','$result[product_image]','$result[product_price]','$data[product_quantity]')";
            if (mysqli_query($con, $sql)) {
                header('Location: temp_cart_info.php');
            } else {
                die('Temp Cart Info Save failed' . mysqli_error($con));
            }
        }
    }

    function select_card_product_info_by_session_id() {
        $con = $this->__construct();
        $session_id = session_id();
        $sql = "SELECT * FROM tbl_temp_cart WHERE session_id='$session_id' ";
        if (mysqli_query($con, $sql)) {
            $query_result = mysqli_query($con, $sql);
            return $query_result;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

    function update_cart_product_info_by_product_id($data) {
        $con = $this->__construct();
        $session_id = session_id();
        $sql = "UPDATE tbl_temp_cart SET product_quantity='$data[product_quantity]' WHERE session_id='$session_id' AND product_id='$data[product_id]'  ";
        if (mysqli_query($con, $sql)) {
            $message = "Cart Product Info Update Successfully";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }
    function delete_cart_product_info_by_product_id($product_id) {
        $con = $this->__construct();
        $session_id = session_id();
        $sql = "DELETE FROM tbl_temp_cart WHERE session_id='$session_id' AND product_id='$product_id' ";
        if (mysqli_query($con, $sql)) {
            $message = "Cart Product Info Delete Successfully";
            return $message;
        } else {
            die("Query Problem" . mysqli_error($con));
        }
    }

}
