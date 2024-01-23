<?php 
    include 'connect.php';
    $id = $_POST["id"];
    $name = $_POST["name"];
    $description = $_POST["des"];
    $Prices = $_POST["txtprice"];
    $Core = $_POST["txtcore"];
    $Ram = $_POST["txtram"];
    $Store = $_POST["txtstored"];
    $color = $_POST["txtcolor"];

    $sql = "UPDATE tbldata SET ProductName ='$name',Description ='$description',Prices ='$Prices',Core ='$Core',Ram ='$Ram',store ='$Store',color ='$color' WHERE ID=". $id;
    $result = $conn->query($sql);
    if ($result > 0){
        header("location:../Product.php");
    }
    else{
        echo "Error:" . $sql;
    }

?>