<?php 
   
   function checkUserPrivileges(){
      if (!isset($_SESSION)) {
         session_start();
     }
      if(isset($_SESSION['isLogin']) && isset($_SESSION['user_role'])){
      if($_SESSION['isLogin'] === TRUE && $_SESSION['user_role'] === '1'){
         return true;
      }else{return false;}
   }
      return false;
   }


?>