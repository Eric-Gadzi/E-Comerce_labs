<?php 
        require_once("../admin/brand.php");
        require_once("../controllers/product_controller.php");


        function display_category(){
            if(checkUserPrivileges()){
                categoryTable();
            }
        }
    
    
        function categoryTable(){
            $categorys = selectAllCategory();
            echo "<h4>category names</h4>";
            foreach($categorys as $category){
                $category_id = $category['cat_id'];
                $category_name = $category['cat_name'];
                display_cat_row($category_id, $category_name);
            }
        }
    
        function display_cat_row($category_id, $category_name){
            echo "<tr>$category_name</tr><tr><a class='btn btn-primary mb-3' href='../View/edit_category.php?category_id=$category_id&category_name=$category_name' role='button'>Edit category</a></tr><br>";
        }

        function category_dropDown(){
            $category_list = selectAllCategory();
      
            foreach($category_list as $category){
                $category_id = $category['cat_id'];
                $category_name = $category['cat_name'];
                echo "<option value = '$category_id'>$category_name</option>";
            }
        }
        

?>

