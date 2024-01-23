<style>
    *{
        padding: 0;
        margin: 0;
    }
    .under-view{
        width: 100%;
        display: flex;
        justify-content: space-between;
    }
    .under-img {
        width: 100%;
        display: flex;
        justify-content: center;
        border: 1px solid #DBDBDB;
    }
    .under-img img{
        width: 150px;
        height: 150px;
    }
</style>
<div class="under-view">
    <?php
    include 'Qur/connect.php';
    $sql = "SELECT ID,Image FROM tbldata order by ID limit 4";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>
            <div class="under-img">
                <a href="view.php?id=<?php echo $row["ID"]; ?>"><img src="<?php echo $row["Image"] ?>" alt=""></a>
            </div>
    <?php
    }
    ?>
</div>