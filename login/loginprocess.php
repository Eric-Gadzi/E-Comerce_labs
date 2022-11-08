<?php 
    require("../controllers/customer_controller.php");
        

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $userData = selectOneCustomerEmail($email);
                

        if($userData){
           $db_password = $userData['customer_pass'];

           if(md5($password) === $db_password){
            session_start();    
            $_SESSION['customer_id'] = $userData['customer_id'];
            $_SESSION['user_role'] = $userData['user_role'];
            $_SESSION['country'] = $userData['customer_country'];
            $_SESSION['city'] = $userData['customer_city'];
            $_SESSION['contact'] = $userData['customer_contact'];
            $_SESSION['image'] = $userData['customer_image'];
            $_SESSION['name'] = $userData['customer_name'];
            $_SESSION['isLogin'] = true;


            header("location: ../View/index.php");
                
           }else{
            echo "<script>
            alert('Wrong password');
            window.location.href = 'login.php';
            </script>";
           }
        
        }else{
            echo "<script>
            alert('Email does not exist');
            window.location.href = 'login.php';
            </script>";
        }
    }
