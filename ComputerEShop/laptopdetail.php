<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>landing laptop</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        .lan-lap {
            margin-top: 50px;
            width: 100%;
            height: 500px;
            background-color: #EBEBEB;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .lap-img img {
            width: 500px;
        }

        .lap-title {
            width: 700px;
            height: 400px;
            margin-left: 20px;
            padding: 20px;
        }
        .lap-btn{
            width: 200px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: #7CA279;
            border: none;
            outline: none;
        }
        .lap-btn img {
            transform: rotate(90deg);
            transition: all 0.5s ease;
        }
        .lap-btn a{
            font-size: 15px;
            text-decoration: none !important;
            color: black !important;
            font-family: serif !important;
            font-weight: bold;
        }
        .lap-btn:hover img{
            translate: 20px;
        }
    </style>
</head>

<body>
    <div class="lan-lap">
        <div class="lap-img">
            <img src="imgs/880832725laptop-2.png" alt="">
        </div>
        <div class="lap-title">
            <h1>Macbook Pro</h1>
            <br>
            <br>
            <div>
                <p>If your primary use cases include browsing the web, managing email,
                     watching Netflix, and doing some light productivity like word processing 
                     and spreadsheet management, then the MacBook Air is probably sufficient. 
                     But, if you're seeking a machine that can handle more complex tasks, 
                     like video editing and heavier multitasking, you'll want a powerful MacBook Pro configuration.
                </p>
            </div>
            <br>
            <br>
            <div>
                <button class="lap-btn"><a href="./shop.php">Buy Now</a><img src="imgs/arrowhead-up.png" alt="" width="30px"></button>
            </div>
        </div>
    </div>
</body>

</html>