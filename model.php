<?php

    $checkOutbtn = $_POST['checkoutsubmit'];

    if(isset($checkOutbtn)){
        if(!empty($_POST['products'])){
           
            header("location:https://localhost/task/vendingmachine.php");
        }
    }
?>