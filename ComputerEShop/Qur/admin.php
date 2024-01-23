<?php
session_start();
include 'connect.php';
$adsql = 'select user,password from tblAdmin';
$adresult = $conn->query($adsql);
while ($row = $adresult->fetch_assoc()){
    $user = $_POST["txtname"];
    $pass = $_POST["txtpass"];
    if ($user==$row["user"] && $pass==$row["password"]){
        header("Location:../Product.php");
    }
    else {
        echo "Error: ";
    }
    $conn->close();
}


?>