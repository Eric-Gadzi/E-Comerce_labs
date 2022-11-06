<?php 
    require_once("../admin/brand.php");
    require_once("../controllers/product_controller.php");
    
    function AdminButtons(){
        if(checkUserPrivileges()){
            return " 
            <button type='button' class='btn btn-success mb-3' data-bs-toggle='modal' data-bs-target='#addProduct'>
            Add Product Brand
          </button>
          <button type='button' class='btn btn-success mb-3' data-bs-toggle='modal' data-bs-target='#addCategory'>
            Add Product Category
          </button>
          ";
        }
    }

    function display_brands(){
        if(checkUserPrivileges()){
            brandTable();
        }
    }


    function brandTable(){
        $brands = selectAllBrands();
        echo "<h4>Brand Names</h4>";
        foreach($brands as $brand){
            $brand_id = $brand['brand_id'];
            $brand_name = $brand['brand_name'];

            display_row($brand_id, $brand_name);
        }
    }

    function display_row($brand_id, $brand_name){
        echo "<tr>$brand_name</tr><tr><a class='btn btn-primary mb-3' href='../view/edit_brand.php?brand_id=$brand_id&brand_name=$brand_name' role='button'>Edit Brand</a></tr><br>";
    }

    function brand_dropdown(){
        $brands = selectAllBrands();
        echo "<h4>Brand Names</h4>";
        foreach($brands as $brand){
            $brand_id = $brand['brand_id'];
            $brand_name = $brand['brand_name'];

            echo "<option value = '$brand_id'>$brand_name</option>";
        }
    }
?>