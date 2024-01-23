<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nav</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        scroll-behavior: smooth;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 5px;
        background-color: white;
        position: fixed;
        width: 100%;
        top: 0;
    }

    .logo {
        font-size: 20px;
        margin-left: 100px;
    }

    .nav-cart {
        font-size: 20px;
        margin-right: 70px;
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        gap: 5px;
    }

    .nav-link {
        background-color: #005344;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        margin-top: 70px;
    }

    ul li a {
        text-decoration: none;
        color: white;
        font-size: 20px;
    }

    ul {
        list-style: none;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    li a:hover {
        color: coral;
    }

    .setting {
        margin-right: 70px;
    }

    .btn {
        border: none;
        outline: none;
        background-color: transparent;
        cursor: pointer;
    }

    .setting-type {
        width: 100%;
        display: flex;
        justify-content: end;
        
    }
    .s-type{
        display: flex;
        flex-direction: column;
        margin-right: 50px;
        display: none;
        transition: all 0.5s ease;
    }
    .s-btn{
        width: 100px;
        height: 30px;
        border: none;
        outline: none;
    }
    .s-type a{
        text-decoration: none;
        color: black !important;
        font-size: 15px;
        font-family: serif;
    }
    .show{
        display: block;
        display: flex;
        flex-direction: column;
    }
    .none{
        display: none;
    }
</style>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="imgs/e-logo.png" alt="logo1" height="50px" width="50px">
        </div>
        <div class="nav-cart">
            <a href="cart.php"><img src="imgs/carts.png" alt="logocart" height="30px"></a>
            <?php
            include 'connect.php';
            $sql = 'SELECT SUM(Quanlity) FROM tblcart';
            $result = mysqli_query($conn, $sql);
            $num = 0;
            while ($row = $result->fetch_assoc()) {

            ?>

                <input type="text" value="<?php echo $row["SUM(Quanlity)"] + $num ?>" style="width: 20px; height: 20px; margin-top: -20px; border: none; outline: none; font-size: 20px; color: red;" />
            <?php
            }
            ?>
        </div>
    </nav>
    <div class="nav-link">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <div class="setting">
            <button class="btn" id="stting"><img src="imgs/gear.png" alt="" height="20px"></button>
        </div>
    </div>
    <div class="setting-type">
        <div class="s-type" id="type">
            <button class="s-btn"><a href="admin.php">Admin</a></button>
        </div>
    </div>
</body>
<script>
    const setting = document.getElementById('stting');
    const type = document.getElementById('type');
    setting.addEventListener('click',()=>{
        type.classList.toggle('show');
    });
    window.addEventListener('scroll',()=>{
        const type = document.getElementById('type');
        const scroll = window.scrollY;
        if (scroll > 40){
            type.classList.add('none');
        }else{
            type.classList.remove('none');
        }

    });
</script>
</html>