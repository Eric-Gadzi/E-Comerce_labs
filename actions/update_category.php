<?php 
    require("../controllers/product_controller.php");
    if(isset($_GET["add_category"])){
        $id = $_GET['id'];
        $new_name = $_GET['new_name'];

        $updated = editCategory($id, $new_name);

        if($updated){
            echo "<script>
                    alert('category Updated');
                    window.location.ref = '../View/index.php';
            </script>";
            
        }else{
            echo "<script>alert('Error Ensued!!');</script>"; 
        }
    }
?>