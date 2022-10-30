<?php 
    require("../Settings/db_class.php");
    
    class Customer extends db_connection{

        function registerCustomer($name, $email, $password, $country, $city, $contact, $image, $user_role){
            $sql = "INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_image`, `user_role`) VALUES ('$name','$email','$password','$country','$city','$contact','$image','$user_role')";

            $this->db_query($sql);
        }

        function updateCustomer($customer_id, $name, $email, $password, $country, $city,    $contact, $image, $user_role){
            $sql = "UPDATE `customer` SET `customer_name`='$name',`customer_email`='$email',`customer_pass`='$password',`customer_country`='$country',`customer_city`='$city',`customer_contact`='$contact',`customer_image`='$image',`user_role`='$user_role' WHERE customer_id = '$customer_id'";

            return $this->db_query($sql);
        }

        function deleteCustomer($customer_id){
            $sql = "DELETE FROM `customer` WHERE customer_id = '$customer_id'";

            return $this->db_query($sql);
        }

        function selectAllCustomers(){
            $sql = "SELECT * FROM `customer`";

            return $this->db_fetch_all($sql);
        }

        function selectOneCustomer($customer_id){
            $sql = "SELECT * from customer where customer_id = $customer_id";

            return $this->db_fetch_one($sql);
        }   

        function selectOneCustomerEmail($email){
            $getEmail = "SELECT * FROM customer where customer_email = '$email'";
            
            $result = $this->db_fetch_one($getEmail);

            return $result;
        }

        function testEmail($email){
            $getEmail = "SELECT customer_email FROM customer where customer_email = '$email'";
            
            $result = $this->db_fetch_one($getEmail);

            return $result === NULL;
        }
    }

    // $trial = new Customer();
    // $t = $trial->testEmail("gadzi@gmail.com");
    // if($t){
    //     echo "hello";
    // } else{
    //     echo "not hello";
    // }
 
?>