<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .body {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .landing {
        margin-top: 20px;
        display: flex;
        width: 1100px;
        height: 500px;
        background-color: #FEFEFE;
    }

    .img {
        width: 500px;
        height: 500px;
        display: flex;
    }

    .img img {
        margin-top: 30px;
        width: 400px;
        height: 400px;
    }

    .title {
        width: 600px;
        height: 500px;
        padding: 30px;
    }

    /* .title .lan-btn {
        display: flex;
        justify-content: space-around;
    } */
    .lan-btn .btn{
        width: 200px;
        height: 40px;
        outline: none;
        border: none;
        background-color: #0D5B7D;
        transition: all 0.5s ease;
        cursor: pointer;
    }
    .lan-btn .btn:hover{
        transform: scale(1.2);
    }
    .lan-btn .btn a{
        text-decoration: none;
        color: white;
    }
</style>

<body class="body">
    <div class="landing">
        <div class="title">
            <h5 style="color: green;">Shopping your goal computer with us</h5>
            <br>
            <h1>Grow your skill & work,Study,Tech,community. It make you easy with labtop.</h1>
            <br>
            <p style="font-size: 12px;">There is really only one reason to read any book about money: to give yourself
                the gift of a better life. Money is not really the thing you’re after—after all,
                would you lock yourself in a dark, silent box forever in exchange for becoming a
                billionaire?
            </p>
            <br>
            <br>
            <div class="lan-btn">
                <div>
                    <button class="btn"><a href="#!">Explore</a></button>
                </div>
                <!-- <div>
                    <button class="btn"><a href="#!">More Info</a></button>
                </div> -->
            </div>
        </div>
        <div class="img">
            <img src="imgs/man-with-laptop.png" alt="">
        </div>
    </div>
</body>

</html>