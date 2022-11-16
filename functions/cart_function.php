<?php
require_once("../controllers/product_controller.php");

function displayCart_Payment_table($c_id, $ip_add)
{
    $cartlist = getCartItems($c_id, $ip_add);
    $total_cart = 0;
    $counter = 1;
    foreach ($cartlist as $cart) {
        $product_id = $cart['p_id'];
        $productList = searchProductWithID($product_id);


        foreach ($productList as $product) {
            $product_amount = $cart['qty'] * $product['product_price'];
            displayCart_row_for_payment($counter, $product['product_title'], $cart['qty'], $product_amount);


            $total_cart += $product_amount;
            $product_amount = 0;
            $counter++;
        }
    }
  
    return $total_cart;
}

function displayCart_row_for_payment($counter, $product, $quantity, $amount)
{
    echo "
    <tr>    
        <td scope='row'>$counter</td>
        <td>$product name</td>
        <td>$quantity</td>
        <td>$amount</td>
    </tr>";
}
