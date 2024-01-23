<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Shop</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
    }
</style>

<body style="display: flex; flex-direction: column;">
    <section>
        <nav>
            <?php include 'Qur/head.php';?>
        </nav>
    </section>
    <div style="display: flex; justify-content: center; margin-top: 20px;">
        <?php include 'Qur/landpage.php'; ?>
    </div>
    <hr>
    <br>
    <section>
        <?php include 'Qur/underland.php'; ?>
    </section>
    <br>
    <section>
        <?php include 'laptopdetail.php';?>
    </section>
    <br>
    <br>
    <br>
    <section>
        <?php include 'listproduct.php'; ?>
    </section>
    <br>
    <br>
    <section>
        <?php include 'footer.php'; ?>
    </section>
</body>

</html>