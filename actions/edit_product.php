<?php 
    require_once("../controllers/product_controller.php");


    $product_title = $_GET['name'];
    $product_desc = $_GET['description'];
    $category_id = $_GET['category_id'];
    $brand_id = $_GET['category_id'];
    $product_id = $_GET['product_id'];
    $product_price = $_GET['price'];
    $keywords = $_GET['keywords'];
    $product_image = " ";

    $result = updateAProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $keywords, $product_id);

    if($result){
        echo "updated";
    }
    // return $result;

    


?>