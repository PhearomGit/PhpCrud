<?php
    include("../connect/connect.php");
    $product_name = $_POST['Product_name'];
    $brand = $_POST['brand'];
    $price = $_POST['price'];
    $string_save = "INSERT INTO `product`(`product_name`, `brand`, `price`) VALUES ('$product_name','$brand','$price')";

    $result = mysqli_query($conn,$string_save);
    if($result){
        header("location:../index.php");
    }else{
        echo '<script>alert("Fail to save")</script>';
    }
?>