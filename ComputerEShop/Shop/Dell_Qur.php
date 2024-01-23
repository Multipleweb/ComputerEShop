<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }

    main {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .cart {
        margin-top: 20px;
        width: 300px;
        height: 320px;
        background-color: #F1F1F1;
        display: flex;
        flex-direction: column;
    }

    #Quanlity {
        width: 30px;
        height: 20px;
        outline: none;
        border: none;
        color: blue;
        font-size: 15px;
        margin-left: 5px;
        background-color: #F1F1F1;
    }

    .add {
        margin-left: 100px;
        width: 100px;
        height: 30px;
        border: none;
        background-color: chocolate;
        font-weight: bold;
        transition: all 0.5s ease;
        cursor: pointer;
        color: white;
        border-radius: 5px;
    }

    .add:hover {
        transform: scale(1.1);
    }
</style>

<body>
    <main>
        <?php
        include 'Qur/connect.php';
        $sql = "select * from tbldata where ProductName like 'dell%'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
                <div class="cart">
                    <form action="add_cart.php" method="post">
                        <div style="display: flex; justify-content: center;">
                            <img src="<?php echo $row["Image"]; ?>" alt="" width="200px" height="150px">
                        </div>
                        <hr style="border: 1px solid #CCCCCC;">
                        <div style="display: flex; flex-direction: column; gap: 10px; margin-left: 10px; margin-top: 5px;">
                            <div style="display: flex; justify-content: space-between;">
                                <h3><?php echo $row["ProductName"]; ?></h3>
                                <button style="border: none; outline: none; width:60px; background: transparent;"><a href="view.php?id=<?php echo $row["ID"]; ?>" style="text-decoration: none; color: #FA9E00;">Veiw</a></button>
                            </div>
                            <p>Price:<Strong style="color: red;">$<?php echo $row["Prices"]; ?></Strong></p>
                            <div style="display: flex;">
                                <p>Quantity: </p>
                                <input type="number" name="quanlity" id="Quanlity" value="1">
                            </div>
                            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>">
                            <input type="hidden" name="hidden_image" value="<?php echo $row["Image"]; ?>">
                            <input type="text" hidden name="txtname" value="<?php echo $row["ProductName"]; ?>">
                            <input type="hidden" name="hidden_price" value=<?php echo $row["Prices"]; ?>>
                            <input type="submit" name="add" value="Add to cart" class="add">
                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>
    </main>
</body>

</html>