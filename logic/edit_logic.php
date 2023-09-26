<?php
    // error_reporting(0);
    include("../connect/connect.php");

    $id = $_POST['id'];
    $product_name = $_POST['Product_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];

    $string_edit = "UPDATE `product` SET `product_name`='$product_name',`brand`='$brand',`price`='$price' WHERE id = $id";
    $success = mysqli_query($conn,$string_edit);
    if($success){
        header("Location:../index.php");
    }
    
?>