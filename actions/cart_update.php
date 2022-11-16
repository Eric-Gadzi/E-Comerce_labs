<?php 
    require("../controllers/product_controller.php");

    session_start();

    $c_id = $_SESSION['customer_id'];
    $ip_address = $_SERVER['REMOTE_ADDR'];
   
    
    if(isset($_GET['addbutton'])){
        $p_id = $_GET['product_id'];
        increaseCartQauntity($c_id, $ip_address, $p_id);
        header("location: ../View/cart.php");
    }else if(isset($_GET['subbutton'])){
        $p_id = $_GET['product_id'];
        reduceCartQauntity($c_id, $ip_address, $p_id);
        header("location: ../View/cart.php");
    }

?>