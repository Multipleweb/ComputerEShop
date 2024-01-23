<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer shop</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .cart-table { 
        display: flex !important;
        justify-content: center;
    }
    table {
        border-collapse: collapse;
        border: none;
    }
    th, td{
        padding: 20px;
        border-bottom: 2px solid #ccc;
    }
</style>
<body>
    <br>
    <br>
    <center><h2>Your Cart</h2></center>
    <div class="cart-table">
        <table border="1">
            <tr>
                <th>Product Iamge</th>
                <th>Product Name</th>
                <th>Product Prices</th>
                <th>Product Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>
            <?php

            include 'connect.php';
            $sql = "select * from tblcart order by ID asc";
            $result = mysqli_query($conn, $sql);
            $total = 0;
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td><img src="<?php echo $row["Image"]; ?>" alt="" width="100px"></td>
                        <td><?php echo $row["ProductName"] ?></td>
                        <td><?php echo '$'.$row["Prices"] ?></td>
                        <td><?php echo $row["Quanlity"]; ?></td>
                        <td><?php echo number_format($row["Quanlity"] * $row["Prices"], 2).'$'; ?></td>
                        <td><a href="Qur/remove.php?action=delete&&id=<?php echo $row["ID"] ?>"><img src="imgs/dustbin.png" alt="dustbin" height="25px" style="margin-left: 25px;"></a></td>
                <?php
                    $total = $total + $row["Quanlity"] * $row["Prices"];
                }
            }
                ?>
                    </tr>
                    <tr></tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Total</td>
                        <td><?php echo number_format($total,2) .'$'; ?></td>
                        <td><form action="payment.php" method="post">
                            <input type="text" name="txttotal" value="<?php echo number_format($total, 2) .'$'; ?>" hidden>    
                            <input type="submit" value="Payment" name="payment" style="width: 100px; height: 30px; border: none; outline: none; 
                            background-color: #2B9744; color: white; cursor: pointer;">
                        </form></td>    
                    </tr>
        </table>
    </div>
</body>

</html>