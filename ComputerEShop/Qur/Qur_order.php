<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .pro-view {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            border: none;
        }

        th,
        td {
            padding: 20px;
            border-bottom: 1px solid blue;
        }

        th {
            background-color: #4747FF;
            color: white;
        }
    </style>
</head>

<body>
    <?php include 'Qur/dashhead.php'; ?>
    <br>
    <center>
        <h3>Product Management</h3>
    </center>
    <br>
    <div class="pro-view">
        <table border="1">
            <tr>
                <th>OrderID</th>
                <th>ProeuctID</th>
                <th>ProductName</th>
                <th>Prices</th>
                <th>Action</th>
            </tr>
            <?php
            include 'Qur/connect.php';
            $sql = "select * from tblorder";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row["OrderID"]; ?></td>
                    <td><?php echo $row["ProductID"]; ?></td>
                    <td><?php echo $row["ProductName"]; ?></td>
                    <td><?php echo $row["Prices"]; ?></td>
                    <td>
                        <div style="display: flex; justify-content: center; gap:10px;">
                            <button style="width: 70px; height: 30px; border: none; outline: none; background-color: transparent;"><a href="Order_delete.php?id=<?php echo $row["OrderID"]; ?>" style="text-decoration: none; color: white;"><img src="imgs/trash.png" alt="trash" height="25px"></a></button>
                        </div>
                    </td>
                </tr>
            <?php
            }

            ?>
        </table>
    </div>
</body>

</html>