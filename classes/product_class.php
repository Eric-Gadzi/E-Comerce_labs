<?php
require("../Settings/db_class.php");

class Product extends db_connection
{

    function  increaseCartQauntity($c_id, $ip_address, $p_id){
        $sql = "UPDATE `cart` SET `qty`= qty+1 WHERE c_id = '$c_id' and p_id = '$p_id' and ip_add = '$ip_address'";
        
        return $this->db_query($sql);
    }

    function checkProductInCart($c_id, $ip_add, $p_id){
        $sql = "SELECT * FROM `cart` WHERE p_id = '$p_id' and c_id = '$c_id' and ip_add = '$ip_add' ";

        $this->db_fetch_all($sql);

        return $this->db_count();
    }

    function  reduceCartQauntity($c_id, $ip_address, $p_id){
        $sql = "UPDATE `cart` SET `qty`= qty-1 WHERE c_id = '$c_id' and p_id = '$p_id' and ip_add = '$ip_address'";
        
        return $this->db_query($sql);
    }

    function addProductBrand($brand_name)
    {
        $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$brand_name')";

        return $this->db_query($sql);
    }

    function deleteBrand($brand_id){
        $sql = "DELETE FROM `brands` WHERE `brand_id` = '$brand_id'";

        return $this->db_query($sql);
    }

    function editProductBrand($brand_id, $new_brand_name)
    {
        $sql = "UPDATE `brands` SET `brand_name`='$new_brand_name' WHERE `brand_id`='$brand_id'";

        return $this->db_query($sql);
    }


    function addProductCategory($category_name)
    {
        $sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$category_name')";

        return $this->db_query($sql);
    }

    function addProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords)
    {
        $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$category_id','$brand_id','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
        return $this->db_query($sql);
    }

    function selectAllBrands()
    {
        $sql = "SELECT * FROM brands";
        return $this->db_fetch_all($sql);
    }

    function selectAllCategory()
    {
        $sql = "SELECT * FROM categories";
        return $this->db_fetch_all($sql);
    }

    function editCategory($category_id, $new_category_name)
    {
        $sql = "UPDATE `categories` SET `cat_name`='$new_category_name' WHERE `cat_id`='$category_id'";
        return $this->db_query($sql);
    }

    function selectAllProducts()
    {
        $sql = "SELECT products.product_id, product_title, product_price, product_desc, product_image, product_keywords,categories.cat_name, brands.brand_name, categories.cat_id, brands.brand_id FROM `products`, categories, brands WHERE products.product_cat = categories.cat_id and products.product_brand = brands.brand_id";
        return $this->db_fetch_all($sql);
    }

    function updateAProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords, $product_id)
    {

        $sql = "UPDATE `products` SET `product_cat`='$category_id',`product_brand`='$brand_id',`product_title`='$product_title',`product_price`='$product_price',`product_desc`='$product_desc',`product_image`='$product_image',`product_keywords`='$product_keywords' WHERE product_id = $product_id";

        return $this->db_query($sql);
    }

    function delete_product($product_id)
    {
        $sql = "DELETE FROM `products` WHERE product_id = '$product_id'";

        return $this->db_query($sql);
    }

    function searchProduct($product_name){
        $sql = "SELECT products.product_id, product_title, product_price, product_desc, product_image, product_keywords,categories.cat_name, brands.brand_name, categories.cat_id, brands.brand_id FROM `products`, categories, brands WHERE products.product_cat = categories.cat_id and products.product_brand = brands.brand_id and product_title LIKE '%$product_name%'";
        
        return $this->db_fetch_all($sql);
    }

    function searchProductWithID($product_id){
        $sql = "SELECT products.product_id, product_title, product_price, product_desc, product_image, product_keywords,categories.cat_name, brands.brand_name, categories.cat_id, brands.brand_id FROM `products`, categories, brands WHERE products.product_cat = categories.cat_id and products.product_brand = brands.brand_id and products.product_id = '$product_id'";
        
        return $this->db_fetch_all($sql);
    }

    function addToCart($p_id, $ip_add, $c_id, $qty){
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$p_id','$ip_add','$c_id','$qty')";

        return $this->db_query($sql);
    }

    function getCartItems($c_id, $ip_add){
        $sql = "SELECT * FROM `cart`  WHERE ip_add = '$ip_add' AND c_id = '$c_id'";

        return $this->db_fetch_all($sql);
    }

    function countCartItems($c_id, $ip_add){
        $sql = "SELECT COUNT(*) as count FROM `cart`  WHERE ip_add = '$ip_add' AND c_id = '$c_id'";
        return $this->db_fetch_one($sql);
    }

    function delete_cart($c_id, $product_id, $ip_add){

        $sql = "DELETE FROM `cart` WHERE c_id = $c_id and ip_add = '$ip_add' and p_id = $product_id ";

        return $this->db_query($sql);
    }


    // payment
    function addToPayment($amount, $customer_id, $order_id, $currency, $payment_date){
        $sql = "INSERT INTO `payment`(`amt`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$customer_id','$order_id','$currency','$payment_date')";
        
        return $this->db_query($sql);
    }


    // order
    function addToOrder($customer_id, $invoice_no, $order_date, $order_status){
        $sql = "INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`, `order_status`) VALUES ('$customer_id','$invoice_no','$order_date','$order_status')";
         
        $this->db_query($sql);

        return mysqli_insert_id($this->db);

    }

    function getOrderID($result){
        if($result){
            $last_id = mysqli_insert_id($this->db);
            return $last_id;
          }
    }

    function insertInOrderDetails($order_id, $product_id, $qty){
        $sql = "INSERT INTO `orderdetails`(`order_id`, `product_id`, `qty`) VALUES ('$order_id','$product_id','$qty')";

        return $this->db_query($sql);
    }
    
    

}

 