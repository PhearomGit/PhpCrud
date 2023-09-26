<?php
    include("../connect/connect.php");
    $id = $_GET['id'];
    $string_select_by_id = "SELECT * FROM `product` WHERE id = $id";
    $result = mysqli_query($conn,$string_select_by_id);
    $row = mysqli_fetch_assoc($result);
?>