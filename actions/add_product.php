<?php 

    require_once("../controllers/product_controller.php");

    if(isset($_GET['add_product'])){
        $product_title = $_GET['product_name'];
        $product_desc = $_GET['product_description'];
        $product_price = $_GET['price'];
        $product_keywords = $_GET['product_keywords'];
        $category_id = $_GET['category'];
        $brand_id = $_GET['brand'];
        $product_image = "images/customer/default_image.svg";

        $result = addProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords);

        if($result){
            echo "success";
        }else{
            echo "failed";
        }
    }


?>