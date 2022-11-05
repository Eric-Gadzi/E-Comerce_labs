<?php 
    require("../Settings/db_class.php");

    class Product extends db_connection{

        function addProductBrand($brand_name){        
            $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$brand_name')";

            return $this->db_query($sql);
        }

        function editProductBrand($brand_id, $new_brand_name){
            $sql = "UPDATE `brands` SET `brand_name`='$new_brand_name' WHERE `brand_id`='$brand_id'";

            return $this->db_query($sql);
        }

        
        function addProductCategory($category_name){
            $sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$category_name')";

            return $this->db_query($sql);
        }

        function addProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords){
            $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$category_id','$brand_id','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
            return $this->db_query($sql);
        }

        function selectAllBrands(){
            $sql = "SELECT * FROM brands";
            return $this->db_fetch_all($sql);
        }

        function selectAllCategory(){
            $sql = "SELECT * FROM categories";
            return $this->db_fetch_all($sql);
        }

        function editCategory($category_id, $new_category_name){
            $sql = "UPDATE `categories` SET `cat_name`='$new_category_name' WHERE `cat_id`='$category_id'";
            return $this->db_query($sql);
        }

        function selectAllProducts(){
            $sql = "SELECT products.product_id, product_title, product_price, product_desc, product_image, product_keywords,categories.cat_name, brands.brand_name, categories.cat_id, brands.brand_id FROM `products`, categories, brands WHERE products.product_cat = categories.cat_id and products.product_brand = brands.brand_id";
            return $this->db_fetch_all($sql);
        }

        
    }

    // $o = new Product;

    // $o->editProductBrand(2, "lindaShops new");
    // if($o){
    //     echo "inserted";
    // }else{
    //     echo "some work has to be done";
    // }

?>