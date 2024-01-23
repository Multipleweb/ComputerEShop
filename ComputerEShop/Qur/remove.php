<?php
include 'connect.php';
$id = $_GET["id"];

$sql = 'DELETE FROM `tblcart` WHERE ID='. $id;
$result = mysqli_query($conn, $sql);
if ($result > 0) {
    header('location:../cart.php');
} else {
    echo 'Fails';
}


?>