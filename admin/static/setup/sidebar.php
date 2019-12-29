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
?></head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "prosedur.php"; ?>

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="?pos=1">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Dashboard -->
            <?php if ($title == "Dashboard") { ?>
                <li class="nav-item active">
                <?php } else { ?>
                <li class="nav-item">
                <?php } ?>
                <a class="nav-link" href="?pos=1">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
                </li>

                <!-- Nav Item - Dashboard -->
                <?php if ($title == "Mahasiswa") { ?>
                    <li class="nav-item active">
                    <?php } else { ?>
                    <li class="nav-item">
                    <?php } ?>
                    <a class="nav-link" href="?pos=3">
                        <i class="fas fa-fw fa-users"></i>
                        <span>Mahasiswa</span></a>
                    </li>

                    <!-- Nav Item - Dashboard -->
                    <?php if ($title == "Dosen") { ?>
                        <li class="nav-item active">
                        <?php } else { ?>
                        <li class="nav-item">
                        <?php } ?>
                        <a class="nav-link" href="?pos=4">
                            <i class="fas fa-fw fa-user-cog"></i>
                            <span>Dosen</span></a>
                        </li>

                        <!-- Nav Item - Dashboard -->
                        <?php if ($title == "Tanaman") { ?>
                            <li class="nav-item active">
                            <?php } else { ?>
                            <li class="nav-item">
                            <?php } ?>
                            <a class="nav-link" href="?pos=5">
                                <i class="fab fa-fw fa-canadian-maple-leaf"></i>
                                <span>Tanaman</span></a>
                            </li>

                            <!-- Nav Item - Dashboard -->
                            <?php if ($title == "Laporan") { ?>
                                <li class="nav-item active">
                                <?php } else { ?>
                                <li class="nav-item">
                                <?php } ?>
                                <a class="nav-link" href="?pos=6">
                                    <i class="fas fa-fw fa-chart-area"></i>
                                    <span>Charts</span></a>
                                </li>

                                <!-- Nav Item - Dashboard -->
                                <?php if ($title == "Logout") { ?>
                                    <li class="nav-item active">
                                    <?php } else { ?>
                                    <li class="nav-item">
                                    <?php } ?>
                                    <a class="nav-link" href="?pos=7">
                                        <i class="fas fa-fw fa-chart-area"></i>
                                        <span>Logout</span></a>
                                    </li>
                                    <!-- Divider -->
                                    <hr class="sidebar-divider d-none d-md-block">

                                    <!-- Sidebar Toggler (Sidebar) -->
                                    <div class="text-center d-none d-md-inline">
                                        <button class="rounded-circle border-0" id="sidebarToggle"></button>
                                    </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">