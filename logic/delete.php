<?php
    include("../connect/connect.php");
    $id = $_GET['id'];
    $string_delete = "DELETE FROM `product` WHERE id = $id";
    mysqli_query($conn,$string_delete);
    header("Location:../index.php");
?>