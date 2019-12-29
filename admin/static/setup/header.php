<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
?>
    <html>

    <head>
        <title>Error</title>
        <style>
            body {
                margin: 0;
                padding: 20px;
                background-color: #FFC900;
                font-family: arial;
                height: 700px
            }

            .info {
                position: absolute;
                top: 0;
                left: 0;
                padding: 10px 0;
                font-size: 110%;
                text-transform: capitalize;
                color: #FFC900;
                font-weight: 700;
                background-color: #fff;
                width: 100%;
                text-align: center
            }

            .info a {
                text-decoration: none;
                color: #333
            }

            .info a:after {
                content: " | ";
                color: #FFC900
            }

            .info a:last-of-type:after {
                content: ""
            }

            .box {
                text-align: center;
                position: relative;
            }

            .box div {
                width: 250px;
                height: 80px;
                line-height: 80px;
                color: #ffc900;
                background-color: #fff;
                font-size: 280%;
                position: absolute;
                top: 490px;
                left: 40%;
                text-transform: capitalize;
                animation: moving 8s linear infinite;
                -webkit-animation: moving 8s linear infinite;
                -moz-animation: moving 8s linear infinite;
                -o-animation: moving 8s linear infinite;

                transform-origin: 50% -400%;
                -webkittransform-origin: 50% -400%;
                -moz-transform-origin: 50% -400%;
                -o-transform-origin: 50% -400%;
            }

            .box div:before {
                content: "";
                width: 25px;
                height: 25px;
                background-color: #fff;
                border-radius: 50%;
                display: block;
                position: absolute;
                left: 45%;
                top: -350px;
            }

            .box div:after {
                content: "";
                width: 3px;
                height: 335px;
                background-color: #fff;
                display: block;
                position: absolute;
                left: 50%;
                top: -330px;
            }

            .box p {
                position: absolute;
                top: 560px;
                left: 38%;
                font-weight: 700;
                text-transform: uppercase;
                color: #fff;
                width: 300px
            }

            .box p span {
                display: block;
                font-size: 300%
            }

            @keyframes moving {

                0%,
                100% {
                    transform: rotate(0)
                }

                25% {
                    transform: rotate(3deg);
                }

                50% {
                    transform: rotate(-3deg)
                }
            }

            @-webkit-keyframes moving {

                0%,
                100% {
                    transform: rotate(0)
                }

                25% {
                    transform: rotate(3deg);
                }

                50% {
                    transform: rotate(-3deg)
                }
            }

            @-moz-keyframes moving {

                0%,
                100% {
                    transform: rotate(0)
                }

                25% {
                    transform: rotate(3deg);
                }

                50% {
                    transform: rotate(-3deg)
                }
            }

            @-o-keyframes moving {

                0%,
                100% {
                    transform: rotate(0)
                }

                25% {
                    transform: rotate(3deg);
                }

                50% {
                    transform: rotate(-3deg)
                }
            }
        </style>
    </head>

    <body>

        <div class="box">
            <div>
                <a href="../../../admin/" class="close">CLOSE</a>
            </div>
            <p><span>error 404 !</span> sorry page isn't found for one of the reformes </p>
        </div>
    </body>

    </html>
<?php

}
include "get.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Custom fonts for this template-->
    <link href="<?php echo $indexToVendor; ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $indexToVendor; ?>css/sb-admin-2.min.css" rel="stylesheet">