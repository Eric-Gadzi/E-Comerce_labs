<?php 
    require_once("../admin/login.php");
    require_once("../controllers/product_controller.php");

    function display_add_product_btn(){
        if(checklogin()){
            add_product_btn();
        }

    }

    function add_product_btn(){
        echo "<a href='../View/add_product.php' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'>Add Product</a> ";
        echo "<a href='../Settings/core.php' class='btn btn-danger btn-lg active' role='button' aria-pressed='true'>Log out</a> ";
    }

    function selectAllProducts_table(){
        $productList = selectAllProducts();
        $counter = 1;
        foreach($productList as $product){
            display_product_row($counter, $product['product_title'], $product['product_desc'], $product['product_price'], $product['cat_name'], $product['brand_name'], $product['brand_id'], $product['cat_id'], $product['product_id']);  
            
            $counter++;
        }
        
    }

    function display_product_row($counter, $product_name, $description, $price, $category, $brand, $brand_id, $category_id, $product_id){
        echo "  <tr>
                <th scope='row'>$counter</th>
                <td>$product_name</td>
                <td>$description</td>
                <td>$price</td>
                <th>$category</th>
                <td>$brand</td>
                <td><a href='../action/edit_product.php?name=$product_name&description=$description&price=$price&category_id=$category_id&brand_id=$brand_id&brand=$brand&category=$category' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i><span>Edit</span></a></td>

                <td><a href='../action/edit_product.php?product_id=$product_id' class='btn btn-danger btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i>Delete </a></td>    
            </tr>";
    }


?>