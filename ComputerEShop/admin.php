<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .container{
        width: 350px;
        height: 300px;
        background-color:rgb(235, 235, 235);
        display: flex;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 1px 7px 3px rgb(187, 185, 185);
    }
    form label{
        font-size: 18px;
        font-family: serif;
    }
    form input{
        width: 300px;
        height: 30px;
        border: 2px solid green;
        outline: none;
        padding: 0px 0px 0px 5px;
    }
    form input:focus{
        border-color: blue;
    }
    form{
        display: flex;
        flex-direction: column;
        gap: 5px;
    }
    .admin-btn{
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
    }
    .admin-btn .btn{
        width: 100px;
        border: none;
        font-size: 15px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        font-weight: bold;
        background-color: #108975;
        color: white;
        border-radius:5px ;
        cursor: pointer;
        transition: all 0.5s ease;
    }
    .admin-btn .btn:hover{
        transform: scale(1.1);
    }
    .admin-btn .btn-2{
        background-color: #D56266;
    }
</style>
<body>
    <div class="container">
        <form action="Qur/admin.php" method="post">
            <center><h3 style="color: blue;">Admin Login</h3></center>
            <br>
            <label for="username">Admin Name:</label>
            <input type="text" name="txtname">
            <label for="passeword">Password:</label>
            <input type="password" name="txtpass">
            <div class="admin-btn">
                <input type="submit" value="Log in" class="btn btn-1">
                <input type="submit" value="Cancel" class="btn btn-2">
            </div>
        </form>
    </div>
</body>
</html>