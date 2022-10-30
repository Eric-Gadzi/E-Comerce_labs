<?php 
    require("../controllers/product_controller.php");
    if(isset($_GET["add_brand"])){
        $id = $_GET['id'];
        $new_name = $_GET['new_name'];

        $updated = editProductBrand($id, $new_name);

        if($updated){
            echo "<script>alert('Brand Updated');
                    window.location.ref = '../view/index.php';
            </script>";
            
        }else{
            echo "<script>alert('Error Ensued!!');</script>"; 
        }
    }
?>