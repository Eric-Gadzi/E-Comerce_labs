<?php 

    require("../controllers/product_controller.php");

    $result = delete_product($_GET['product_id']);

    // $result = delete_product('20');

    if($result){
        echo "success";
    }else{
        echo "false";
    }
?>