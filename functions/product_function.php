<?php 
    require_once("../admin/login.php");
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

    }


?>