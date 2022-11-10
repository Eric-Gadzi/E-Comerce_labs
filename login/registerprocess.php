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
        $image = "";
        $password = md5($password);

        $name = $fname." ".$lname;

        $user_file_name = $_FILES['user_image']['name'];
        $target_dir = "../images/customer/";
        $full_dir = $target_dir.$user_file_name;
        $image = "images/customer/".$user_file_name;
        
        move_uploaded_file($_FILES["user_image"]['tmp_name'], $full_dir);
        

        

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