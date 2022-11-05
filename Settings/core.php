<?php
//start session
// session_start(); 

//for header redirection
// ob_start();

//funtion to check for login

session_start();

    if(isset($_SESSION["isLogin"])){
        session_destroy();
        header("location: ../index.php");
    }

//function to get user ID


//function to check for role (admin, customer, etc)



?>