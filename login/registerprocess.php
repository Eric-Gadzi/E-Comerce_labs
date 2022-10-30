<?php 
    require("../controllers/customer_controller.php");
    
   
    if(isset($_POST["register"])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $city = $_POST['city'];
        $country = $_POST['country'];
        $password = $_POST['password'];
        $user_role = '2';
        $image = "./images/default_image.svg";
        $password = md5($password);

        $name = $fname." ".$lname;

        $testMail = testEmail($email);
        
        if($testMail){
            $result = registerCustomer($name, $email, $password, $country, $city, $contact, $image, $user_role);
            header("location: login.php");
        }else{
            echo "
            <script>
                alert('Registration failed! Email exist');
                window.location.href = 'login.php';
            </script>
        ";
        }
  
    }
    



    


?>