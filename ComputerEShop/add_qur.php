<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    .container {
        margin-top: 20px;
        display: flex;
        justify-content: center;
    }

    .con-table {
        width: 1000px;
    }

    .input {
        outline: none;
    }

    table tr td {
        display: flex;
        gap: 20px;
    }

    from {
        background-color: aqua;
    }
</style>
<body>

    <?php include('Qur/dashhead.php'); ?>

    <div class="container">
        <div class="con-table">
            <div>
            <table style="width:800px">
                <tr>
                    <td style="width:800px; vertical-align: top">
                        <?php
                        $img = $_FILES["fimg"]["name"];
                        $rand = rand();
                        $imgU = $rand . $img;
                        $path  = "imgs/" . $imgU;
                        move_uploaded_file($_FILES['fimg']['tmp_name'], $path);
                        $date = date('Y/m/d H:m:s');
                        include('Qur/connect.php');

                        $queryAdd = 'Insert into tbldata (ProductName,Description,Prices,Image,DateIn,Core,Ram,store,color) 
                            Values("' . $_POST["name"] . '",
                            "' . $_POST["des"] . '",
                            ' . $_POST["txtprice"] . ',
                            "' . $path . '",
                            "' . $date . '",
                            "'.$_POST["txtcore"].'",
                            "'. $_POST["txtram"] .'",
                            "'. $_POST["txtstored"] .'",
                            "'. $_POST["txtcolor"] .'")';
                        //Check From Here  
                        if (mysqli_query($conn, $queryAdd)) {
                            echo '<div>';
                            echo '"<h1>"The Post Summary !!!"</h1>"';
                            echo 'New record created successfully!';
                            $sql = 'SELECT * FROM tbldata Order By ID asc Limit 1';
                            $rTop = $conn->query($sql);
                            if ($rTop->num_rows > 0) {
                                while ($row = $rTop->fetch_assoc()) {
                                    echo '<br> Posted ID : ' . $row["ID"];
                                    echo '<br> Posted Name : ' . $row["ProductName"];
                                    echo '<br> Posted Description : ' . $row["Description"];
                                    echo '<br> Posted Price : ' . $row["Prices"] .'$';
                                    echo '<br> Posted Price : ' . $row["Core"] .'$';
                                    echo '<br> Posted Price : ' . $row["Ram"] .'$';
                                    echo '<br> Posted Price : ' . $row["store"] .'$';
                                    echo '<br> Posted Price : ' . $row["color"] .'$';
                                    echo '<br> Posted Image : <br> <img
                          src = "' . $row["Image"] . '" width="400px" height="350px"/><br>';
                          echo '</div>';
                                }
                            } else echo '0 results';
                        } else
                            echo "Error: " . $queryAdd . "<br>" . mysqli_error($conn);

                        $conn->close();
                        ?>
                    </td>
                    </tr>
            </table>
            </div>
        </div>
    </div>
</body>

</html>