<?php 
    require("../controllers/product_controller.php");

    session_start();
 
    $product_title = $_GET['name'];
    $product_desc = $_GET['description'];
    $category_id = $_GET['category_id'];
    $brand_id = $_GET['brand_id'];
    $product_id = $_GET['product_id'];
    $product_price = $_GET['price'];
    $keywords = $_GET['keywords'];
    $product_image = "../images/Tux.jpg";
    // $category_name = $_GET['category_name'];
    // $brand = $_GET['brand'];
    $qty = 1;
    $ip_add = $_SERVER['REMOTE_ADDR'];

    //checking if the user is identifiable because people who have not logged in could still purchase products
    $customer_id = null;
    

    if(isset($_SESSION['customer_id'])){
        $customer_id = $_SESSION['customer_id'] ;
    }
   
    $checkProduct = checkProductInCart($customer_id, $ip_add, $product_id);

    echo $checkProduct;

    if($checkProduct > 0){
        increaseCartQauntity($customer_id, $ip_add,$product_id);
        header("location: ../View/display_all_product.php");
        return;
    }
    
    $result = addToCart($product_id, $ip_add, $customer_id, $qty);
    if($result){
        echo "<script> alert('Item inserted successfully'); </script>";
    }
    header("location: ../View/display_all_product.php");
?>