<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        footer {
            overflow: hidden;
            background-color: #eee;
            margin-top: 40px;
        }

        footer .footer-second {
            width: 100%;
            display: block;
            padding: 50px 0;
            overflow: hidden;
            text-align: center;
        }

        .footer-second a {
            display: block;
            margin: 5px auto;
            width: 50%;
            padding: 5px;
            font-size: 15px;
        }

        .footer-second h3 {
            margin-bottom: 40px;
            font-size: 1rem;
        }

        .footer-second a:hover {
            color: #045e52;
            text-decoration: underline;
            text-decoration-color: black;
        }

        .footer-column-1 {
            width: calc(33.33333%);
            float: left;
        }

        .footer-column-2 {
            width: calc(33.33333%);
            float: left;
        }

        .footer-column-3 {
            width: calc(33.33333%);
            float: left;
        }

        .footer-last {
            width: 100%;
            display: flex;
            justify-content: center;
            font-size: 1.5rem;
        }

        .footer-last li {
            margin: 0 5px;
        }

        .hidden {
            display: none;
        }

        .footer-icon {
            list-style: none;
        }

        .footer-second a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <section>
        <footer>
            <div class="footer-second">
                <div class="footer-column-1">
                    <h3>Community</h3>
                    <div>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-telegram"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-column-2" id="contact">
                    <h3>Customer service</h3>
                    <a href="#!">Contact</a>
                    <a href="#!">Track your order</a>
                    <a href="#!">terms of purchase</a>
                    <a href="#!">common questions</a>
                </div>
                <div class="footer-column-3" id="about">
                    <h3>About us</h3>
                    <a href="#!">Who we are</a>
                    <a href="#!">Our Services</a>
                    <a href="#!">Events</a>
                    <a href="#!">Data protection</a>
                </div>
            </div>
            <ul class="footer-last">
                <li class="footer-icon">
                    <p><i class="fa fa-cc-mastercard"></i></p>
                </li>
                <li class="footer-icon">
                    <p><i class="fa fa-cc-paypal"></i></p>
                </li>
                <li class="footer-icon">
                    <p><i class="fa fa-cc-visa"></i></p>
                </li>
                <li class="footer-icon">
                    <p><i class="fa fa-cc-amex"></i></p>
                </li>
            </ul>
        </footer>
    </section>
</body>

</html>