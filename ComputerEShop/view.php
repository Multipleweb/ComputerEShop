<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veiw</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .view-body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .view {
            width: 700px;
            background-color: #F6F6F6;
            display: flex;
            flex-wrap: wrap;
            padding: 30px;
            box-shadow: 1px 3px 7px 1px #D4D4D4;
            border-radius: 10px;
        }

        .des-view {
            width: 700px;
            padding: 30px;
            background-color: #F6F6F6;
        }

        .view img {
            width: 300px;
        }

        .title-view {
            display: flex;
            flex-direction: column;
            gap: 20px;
            margin-left: 50px;
        }
    </style>
</head>

<body>
    <div>
        <?php include 'Qur/head.php'; ?>
    </div>
    <div class="view-body">
        <?php
        include 'Qur/connect.php';
        $id = $_GET["id"];
        $sql = "SELECT * FROM `tbldata` WHERE ID =" . $id;
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
        ?>
            <div class="view">
                <div>
                    <img src="<?php echo $row["Image"] ?> " alt="">
                </div>
                <div class="title-view">
                    <h3>Name: <?php echo $row["ProductName"] ?> </h3>
                    <p>Prices:$ <?php echo $row["Prices"] ?> </p>
                    <p>Ram: <?php echo $row["Ram"] ?> g</p>
                    <p>Stored: <?php echo $row["store"] ?> </p>
                    <p>Core: <?php echo $row["Core"] ?> </p>
                    <p>color: <?php echo $row["color"] ?> </p>
                </div>
                <div class="des-view">
                    <h3>Description</h3>
                    <br>
                    <p><?php echo $row["Description"] ?> </p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div style="margin-top: 20px;">
        <?php include 'under-view.php'; ?>
    </div>
    <section>
        <?php include 'footer.php'; ?>
    </section>
</body>

</html>