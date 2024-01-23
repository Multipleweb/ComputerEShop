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
        width: 100px;
        height: 30px;
        background-color: #005344;
        display: grid;
        place-content: center;
        margin-right: 100px;
        border-radius: 5px;
        transition: all 0.5s ease-in-out;
    }
    .nav-cart:hover{
        box-shadow: 1px 3px 8px 2px green;
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
    .nav-cart a{
        text-decoration: none;
        color:white ;
    }
</style>

<body>
    <nav class="navbar">
        <div class="logo">
            <img src="imgs/e-logo.png" alt="logo1" height="50px" width="50px">
        </div>
        <div class="nav-cart">
            <a href="Home.php">Logout</a>
        </div>
    </nav>
    <div class="nav-link">
        <ul>
            <li><a href="Home.php">Home</a></li>
            <li><a href="Adddata.php">Add New</a></li>
            <li><a href="productorder.php">Proudct Order</a></li>
            <li><a href="Product.php">Product</a></li>
        </ul>
    </div>
</body>
</html>