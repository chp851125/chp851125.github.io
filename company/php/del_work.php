<?php
    require_once '../mysqli_connect.php';
    require_once '../function.php';
    $check = del_work($_POST['id']);
    
    if($check){
        echo "yes";
    }
    else{
        echo "no";
    }
?>