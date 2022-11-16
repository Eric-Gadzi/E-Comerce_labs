<?php 
        require_once("../admin/brand.php");
        require_once("../controllers/product_controller.php");


        function display_category(){
            if(checkUserPrivileges()){
                echo "<h1>Product Categories</h1>
                <table class='table table-bordered  table-responsive'>
                  <thead class='thead-inverse'>
                    <tr>
                      <th scope='col'>#</th>
                      <th scope='col'>Category Name</th>
                      <th scope='col'>Buttons</th>
                    </tr>
                  </thead>
                  <tbody>";
                categoryTable();
                echo "
                </tbody>
              </table>
            ";
            }
        }
    
    
        function categoryTable(){
            $categorys = selectAllCategory();
            $counter = 0;
            foreach($categorys as $category){
                $category_id = $category['cat_id'];
                $category_name = $category['cat_name'];
                display_cat_row(++$counter, $category_id, $category_name);
            }
        }
    
        function display_cat_row($counter,$category_id, $category_name){
            echo "
            <tr>
            <td scope='row'>$counter</td>
            <td>$category_name</td>
            <td><a class='btn btn-warning mb-3' href='../View/edit_category.php?category_id=$category_id&category_name=$category_name' role='button'>Edit category</a><a class='btn btn-danger mb-3' href='#' role='button'>Delete category</a></td>
            </tr>";
        }

        function category_dropDown(){
            $category_list = selectAllCategory();
      
            foreach($category_list as $category){
                $category_id = $category['cat_id'];
                $category_name = $category['cat_name'];
                echo "<option value = '$category_id'>$category_name</option>";
            }
        }

        function category_dropDown_selected($value){
            $category_list = selectAllCategory();
      
            foreach($category_list as $category){
                $category_id = $category['cat_id'];
                $category_name = $category['cat_name'];
                if($category_id == $value){
                 echo "<option value = '$category_id' selected>$category_name</option>";
                 continue;
                }
                echo "<option value = '$category_id'>$category_name</option>";
            }
        }
        

?>

