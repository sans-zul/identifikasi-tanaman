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
?></div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="?pos=7">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?php echo $indexToVendor; ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo $indexToVendor; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo $indexToVendor; ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo $indexToVendor; ?>js/sb-admin-2.min.js"></script>


<?php if (isset($_GET['pos'])) {
    linkMenu($_GET['pos'], $_GET['id']);
} ?>