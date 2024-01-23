<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .list {
            width: 300px;
            height: 230px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            background-color: #F1F1F1;
            border: 2px solid #F7F7F7;
        }

        .list-img img {
            width: 200px;
            height: 150px;
        }

        .list-page {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 40px;
            margin-top: 40px;
        }

        .list_under {
            display: flex;
            justify-content: space-around;
            gap: 100px;
        }

        .list_under .list-shop img {
            width: 20px;
        }
    </style>
</head>

<body>
    <center>
        <h1 style="color: coral;">New Product</h1>
    </center>
    <div class="list-page">
        <?php
        include 'Qur/connect.php';
        $sql = 'SELECT ProductName,Prices,Image FROM tbldata Order By ID DESC Limit 6';
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="list">
                <div class="list-img">
                    <img src="<?php echo $row["Image"] ?>" alt="laptop">
                </div>
                <center>
                    <h4><?php echo $row["ProductName"] ?></h4>
                </center>
                <div class="list_under">
                    <div class="list-price">
                        <p style="color: red;"><strong>$ <?php echo $row["Prices"] ?></strong></p>
                    </div>
                    <div class="list-shop"><a href="shop.php"><img src="./imgs/carts.png" alt=""></a></div>
                </div>
            </div>
        <?php
        }

        ?>
    </div>
</body>

</html>