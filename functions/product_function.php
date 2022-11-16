<?php
require_once("../admin/login.php");
require_once("../controllers/product_controller.php");


function number_of_cart_items($c_id, $ip_add){

   return countCartItems($c_id, $ip_add)['count'];
}


function displayCart($c_id, $ip_add)
{
    $cartlist = getCartItems($c_id, $ip_add);
    $total_cart = 0;
    $counter = 1;
    foreach ($cartlist as $cart) {
        $product_id = $cart['p_id'];
        $productList = searchProductWithID($product_id);
        
      
        foreach ($productList as $product) {
            $product_amount = $cart['qty'] * $product['product_price'];
            displayCart_row($counter, $product['product_title'], $product['product_desc'], $product['product_price'], $product['cat_name'], $product['brand_name'], $product['brand_id'], $product['cat_id'], $product['product_id'], $product['product_keywords'], $cart['qty'], $product_amount);

          
            $total_cart += $product_amount;
            $product_amount = 0;
            $counter++;
        }
    }

        return $total_cart;
}

function display_add_product_btn()
{
    if (checklogin()) {
        add_product_btn();
        
    }
}


function add_product_btn()
{   
    echo "<a href='../View/add_product.php' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'>Add Product</a> ";
    echo "<a href='../View/display_all_product.php' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'>All Product</a> ";
    echo "<a href='../Settings/core.php' class='btn btn-danger btn-lg active' role='button' aria-pressed='true'>Log out</a> ";

   
    // $ip_add = $_SERVER['REMOTE_ADDR'];
    // $c_id = ""; 
    // if(isset($_SESSION['customer_id']))
    //     $c_id = $_SESSION['customer_id'];
    // $list = number_of_cart_items($c_id, $ip_add)['count'];
    // $count = 0;
    // foreach($list as $li){
    //     $count = $li;
    // }
    // number_of_cart_items($c_id, $ip_add);
    echo "<a class='btn btn-success mb-3' href='cart.php' role='button'>View Cart</a><span class='badge'>0</span><br>";

    
}


function selectAllProducts_table()
{
    $productList = selectAllProducts();
    $counter = 1;
    foreach ($productList as $product) {
        display_product_row($counter, $product['product_title'], $product['product_desc'], $product['product_price'], $product['cat_name'], $product['brand_name'], $product['brand_id'], $product['cat_id'], $product['product_id'], $product['product_keywords']);

        $counter++;
    }
}

function searchAProduct($product_name)
{
    $productList = searchProduct($product_name);
    $counter = 1;
    foreach ($productList as $product) {
        display_product_row($counter, $product['product_title'], $product['product_desc'], $product['product_price'], $product['cat_name'], $product['brand_name'], $product['brand_id'], $product['cat_id'], $product['product_id'], $product['product_keywords']);

        $counter++;
    }
    if ($counter == 1) {
        echo "<script>alert('Did not find any Product')</script>";
        selectAllProducts_table();
    }
}

function display_product_row($counter, $product_name, $description, $price, $category, $brand, $brand_id, $category_id, $product_id, $keywords)
{
    //  $delete_url = "../actions/delete_product.php?product_id=$product_id";
    echo "  <tr>
                <th scope='row'>$counter</th>
                <td>$product_name</td>
                <td>$description</td>
                <td>$price</td>
                <th>$category</th>
                <td>$brand</td>

                <td><a href='../View/edit_product.php?name=$product_name&description=$description&price=$price&category_id=$category_id&brand_id=$brand_id&brand=$brand&category=$category&product_id=$product_id&keywords=$keywords' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i><span>Edit</span></a></td>

                <td><a href='single_product.php?name=$product_name&description=$description&price=$price&category_id=$category_id&brand_id=$brand_id&brand=$brand&category=$category&product_id=$product_id&keywords=$keywords&category_name=$category'  onclick = ''; class='btn btn-warning btn-sm active' role='button' aria-pressed='true'><i class='bi bi-eye-fill'>View</i></a></td>
 
                <td><a href='../actions/add_to_cart.php?name=$product_name&description=$description&price=$price&category_id=$category_id&brand_id=$brand_id&brand=$brand&category=$category&product_id=$product_id&keywords=$keywords&category_name=$category&brand=$brand'  onclick = ''; class='btn btn-success btn-sm active' role='button' aria-pressed='true'><i class='bi bi-cart-fill'></i>Add To Cart</a></td>
                
            </tr>";
}



function displayCart_row($counter, $product_name, $description, $price, $category, $brand, $brand_id, $category_id, $product_id, $keywords, $qty, $amount){
    echo " 
    <tr>
    <th scope='row'>$counter</th>
    <td>$product_name</td>
    <td>$description</td>
    <td>$price</td>
    <th>$category</th>
    <td>$brand</td>
    <th>$qty</th>
    <td>$amount</td>
   
   

     <td>
    <a href='../actions/cart_update.php?product_id=$product_id&subbutton='  onclick = ''; class='btn btn-danger btn-sm active' role='button' aria-pressed='true'><i class='bi bi-eye-fill'>-</i></a>
    
    <a href='../actions/cart_update.php?product_id=$product_id&addbutton='  onclick = ''; class='btn btn-success btn-sm active' role='button' aria-pressed='true'><i class='bi bi-eye-fill'>+</i></a>
    </td>

    <td><a href='../actions/delete_cart.php?name=$product_name&description=$description&price=$price&category_id=$category_id&brand_id=$brand_id&brand=$brand&category=$category&product_id=$product_id&keywords=$keywords' class='btn btn-danger btn-sm active' rosle='button' aria-pressed='true'><i class='bi bi-trash-fill'></i>Delete</a></td>

       
</tr>";
}



     //   delete Button
    //   <td><a href=''  onclick = ajax('$delete_url'); class='btn btn-danger btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i>Delete </a></td>
