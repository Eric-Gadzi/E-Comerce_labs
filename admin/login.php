<?php 

    // session_start();
    function checklogin(){
        if(isset($_SESSION['isLogin'])){
            if($_SESSION['isLogin'])
            return true;
        }
        return false;
    }

?>