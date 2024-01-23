<?php
include 'Qur/connect.php';
    $id = $_POST["hidden_id"];
    $productname = $_POST["txtname"];
    $productImage = $_POST["hidden_image"];
    $productPrice = $_POST["hidden_price"];
    $productQuanlity = $_POST["quanlity"];

    $sql = "INSERT INTO tblcart(ProductName,Prices, Image, Quanlity) VALUES ('$productname','$productPrice','$productImage','$productQuanlity')";
    $result = mysqli_query($conn,$sql);
    if ($result > 0 ) {
        header("location:shop.php");
    } else {
       echo 'Fail';
    }

    $order = "INSERT INTO tblorder(ProductID,ProductName,Prices) VALUES ('$id','$productname','$productPrice')";
    $result = mysqli_query($conn,$order);
    if ($result > 0 ) {
        header("location:shop.php");
    } else {
       echo 'Fail';
    }
?>