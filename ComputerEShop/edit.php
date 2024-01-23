<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Add New Information</title>
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

    table tr td input {
        padding: 0px 0px 0px 5px;
    }
</style>

<body>
    <div>
        <?php include 'Qur/dashhead.php'; ?>
        <br>
    </div>
    <div class="container">
        <div class="con-table">
            <table>
                <tr>
                    <td style="width:920px">
                <tr>
                    <td style="width:920px; vertical-align: top">

                        <form name="frmAddNew" action="Qur/edit_qur.php" method="post" enctype="multipart/form-data">
                            <table style="width:920px; font-size:20px; display: flex; justify-content: center; background-color: #EDEDED; border-radius: 10px; padding: 20px;">
                                <?php
                                include 'Qur/connect.php';
                                $id = $_GET["id"];
                                $sql = "SELECT * FROM `tbldata` WHERE ID=" . $id;
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                ?>
                                    <tr>
                                        <td colspan="2" style="padding: 5px; display: grid; place-content: center;">
                                            <h2 style="color: blue;"> Add New Information </h2>
                                        </td>
                                    </tr>
                                    <!-- <tr>
                                        <td style="width:220px; padding: 5px">Product Id :</td>
                                        <td style="width:700px; padding: 5px"> -->
                                            <input type="text" name="id" style="width:650px;  font-size:20pt" value="<?php echo $row["ID"] ?>" hidden>
                                        <!-- </td>
                                    </tr> -->
                                    <tr>
                                        <td style="padding: 5px">Product Name :</td>
                                        <td style="padding: 5px"><input type="text" name="name" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 30px;" value="<?php echo $row["ProductName"] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">Description :</td>
                                        <td style="padding: 5px">
                                            <textarea rows="8" name="des" type="text" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 100px;"><?php echo $row["Description"] ?>
                                            </textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">Prices:</td>
                                        <td style="padding: 5px"><input type="text" name="txtprice" type="text" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 30px;" value="<?php echo $row["Prices"] ?>"></td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">Core:</td>
                                        <td style="padding: 5px">
                                            <select name="txtcore" id="" style="width: 610px;  font-size:15px; outline: none; border: 2px solid green; height: 35px;">
                                                <option value="i3">i3</option>
                                                <option value="i5">i5</option>
                                                <option value="i7">i7</option>
                                                <option value="i9">i9</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">Ram:</td>
                                        <td style="padding: 5px">
                                            <select name="txtram" id="" style="width: 610px;  font-size:15px; outline: none; border: 2px solid green; height: 35px;" value="<?php echo $row["Ram"] ?>">
                                                <option value="4">4</option>
                                                <option value="8">8</option>
                                                <option value="16">16</option>
                                                <option value="32">32</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">Stored:</td>
                                        <td style="padding: 5px">
                                            <select name="txtstored" id="" style="width: 610px;  font-size:15px; outline: none; border: 2px solid green; height: 35px;" value="<?php echo $row["store"] ?>">
                                                <option value="256">256</option>
                                                <option value="512">512</option>
                                                <option value="1T">1T</option>
                                                <option value="2T">2T</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px">Color:</td>
                                        <td style="padding: 5px"><input name="txtcolor" type="text" name="name" style="width: 600px;  font-size:15px; outline: none; border: 2px solid green; height: 30px;" value="<?php echo $row["color"] ?>"></td>
                                    </tr>
                                <?php

                                }
                                ?>
                                <tr>
                                    <td style="padding: 5px"></td>
                                    <td style="display: flex; justify-content: space-between;">
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="Submit" name="cmdSubmint" value="Submit" style="width: 200px; height: 40px; background-color: #002652; color: white; border: none; outline: none; cursor: pointer; margin-left: -100px; font-size: 15px;" />
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <input type="Reset" name="cmdReset" value="Cancel" style="width: 200px; height: 40px; background-color: red; color: white; border: none; outline: none; cursor: pointer; font-size: 15px;" />
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </td>
                </tr>
                </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>