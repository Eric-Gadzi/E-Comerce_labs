<?php 
    require_once("../classes/product_class.php");

    function addProductBrand($brand_name){
        $product = new Product;
        return $product->addProductBrand($brand_name);
    }

    function editProductBrand($brand_id, $brand_name){
        $product = new Product;
        
        return $product->editProductBrand($brand_id, $brand_name);
    }

    function selectAllBrands(){
        $product = new Product;
        return $product->selectAllBrands();
    }

    function addProductCategory($category_name){
        $product = new Product;
        return $product->addProductCategory($category_name);
    }

    function selectAllCategory(){
        $product = new Product;
        return $product->selectAllCategory();
    }

    function editCategory($category_id, $new_category_name){
        $product = new Product;
        return $product->editCategory($category_id, $new_category_name);
    }

    


    function addProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords){
        $product = new Product;

        return $product->addProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords);
    }

    function selectAllProducts(){
        $product = new Product;

        return $product->selectAllProducts();
    }

    function updateAProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords, $product_id){
        $product = new Product;
        
        return $product->updateAProduct($category_id, $brand_id, $product_title, $product_price, $product_desc, $product_image, $product_keywords, $product_id);
    }

    function delete_product($product_id){
        $product = new Product;

        return $product->delete_product($product_id);
    }

    function searchProduct($product_name){
        $product = new Product;

        return $product->searchProduct($product_name);
    }

    function addToCart($p_id, $ip_add, $c_id, $qty){
        $product = new Product;

        return $product->addToCart($p_id, $ip_add, $c_id, $qty);
    }

    function getCartItems($c_id, $ip_add){
        $product = new Product;

        return $product->getCartItems($c_id, $ip_add);
    }

   
 
?>