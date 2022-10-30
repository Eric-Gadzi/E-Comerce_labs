<?php 
    require("../classes/customer_class.php");

    function registerCustomer($name, $email, $password, $country, $city, $contact, $image, $user_role){
        $customer = new Customer();
        return $customer->registerCustomer($name, $email, $password, $country, $city, $contact, $image, $user_role);
    }

    function updateCustomer($customer_id, $name, $email, $password, $country, $city,    $contact, $image, $user_role){
        $customer = new Customer();
        return $customer->updateCustomer($customer_id, $name, $email, $password, $country, $city,    $contact, $image, $user_role);
    }

    function deleteCustomer($customer_id){
        $customer = new Customer();
        return $customer->deleteCustomer($customer_id);
    }

    function selectOneCustomerEmail($email){
        $customer = new Customer;
        return $customer->selectOneCustomerEmail($email);
    }

    function selectOneCustomer($customer_id){
        $customer = new Customer();
        return $customer->selectOneCustomer($customer_id);   
    }

    function selectAllCustomer(){
        $customer = new Customer();

        return $customer->selectAllCustomers();
    
    }

    function testEmail($email){
        $customer = new Customer();
        
        return $customer->testEmail($email);
    }




?>