<?php
function checkFileUpload()
{
    $uploadOk = 1;
    $target_dir = "../customer/";
    $target_file = $target_dir . basename($_FILES["user_image"]["name"]);
    
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (file_exists($target_file)) {
        echo "<script> alert('); </script>";
        return false;
      }
      

}
