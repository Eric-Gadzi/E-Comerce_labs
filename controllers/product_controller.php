<?php 
    require("../classes/product_class.php");

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

 
 
?>