<?php 
    require("../controllers/product_controller.php");

    session_start();

    $c_id = $_SESSION['customer_id'];
    $product_id = $_GET['product_id'];
    $ip_add = $_SERVER['REMOTE_ADDR'];

    $result = delete_cart($c_id, $product_id, $ip_add);

    if($result){
        echo "success";
    }else{
        echo "failed";
    }




?>