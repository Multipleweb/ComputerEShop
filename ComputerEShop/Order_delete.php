<?php
    include 'Qur/connect.php';
    $id = $_GET['id'];
    $sql = 'DELETE FROM `tblorder` WHERE OrderID='. $id;
    $result = $conn->query($sql);
    if ($result > 0){
        header("location:productorder.php");
    }else{
        echo "Error:". $sql;
    }
?>