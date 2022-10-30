<?php 
    require("../controllers/product_controller.php");
    if(isset($_GET['add_brand'])){
        $brand_name = $_GET['brand_name'];
        $insertBrand = addProductBrand($brand_name);
        
        if($insertBrand){
            header("location: ../index.php");
           
        }else{
            echo "<script>
            alert('Error Occurred! Brand Not added');
            window.location.href = '../View/index.php';
        </script>";
        }
    }

?>