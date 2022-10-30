<?php 
    require("../controllers/product_controller.php");
    require("../admin/brand.php");
    if(isset($_GET['add_category'])){
        $category_name = $_GET['category_name'];

        if(checkUserPrivileges()){
            $result = addProductCategory($category_name);
            if($result){
                header("location: ../View/index.php");
            }else{
                echo "<script>Could not add cateogry</script>";
            }
        }
    }

?>