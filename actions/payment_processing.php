<?php 
    require_once("../controllers/product_controller.php");

    session_start();
    $customer_id = $_SESSION['customer_id'];
    $invoice_number = mt_rand();
    $order_date = date("Y-m-d");
    $order_status = "success";
    $order_id = addToOrder($customer_id, $invoice_number, $order_date, $order_status);

   
    //payment

    $ref = $_GET['reference'];

    
    $curl = curl_init();
    
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$ref,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Authorization: Bearer sk_test_50902229f2c6e2eac75bfdc2b90cc0211df24a5b",
        "Cache-Control: no-cache",
      ),
    ));
    
    $response = curl_exec($curl);
    $err = curl_error($curl);
  
    curl_close($curl);

    $res = json_decode($response, true);

    $amount =  $res['data']['amount'];
    $currency = $res['data']['currency'];
    $payment_date = date("Y-m-d");

    $result = addToPayment($amount, $customer_id, $order_id, $currency, $payment_date);


    // move cart to orderdetails
    $ip_add = $_SERVER['REMOTE_ADDR'];
    $cartlist = getCartItems($customer_id, $ip_add);

    foreach ($cartlist as $cart) {
        $product_id = $cart['p_id'];
        $qty = $cart['qty'];
        insertInOrderDetails($order_id, $product_id, $qty);
        delete_cart($customer_id, $product_id, $ip_add);
    }


    if($res['data']['status'] === 'success'){
        header("location: ../View/payment_success.php");
    }else{
        header("location: ../View/payment_failed.php");;
    }
    
?>