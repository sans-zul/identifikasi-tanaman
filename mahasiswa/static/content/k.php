<?php
session_start();
include "get.php";
if (!isset($_SESSION['mahasiswa'])) {
    header("location: ../../../index.php");
}
include "../setup/header.php";
$title = "Mahasiswa";
$_SESSION['home'] = 'home'
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

    <?php


    function linkMenu($posisiMenu, $id = -1)
    {
        switch ($posisiMenu) {
            case "logout": {
                    echo "<script>window.location.href='../../static/content/logout.php?id=$id';</script>";
                    break;
                }
            case "edit_mahasiswa": {
                    echo "<script>window.location.href='../../config/mahasiswa/ubah.php';</script>";
                    break;
                }
            case "upload": {
                    echo "<script>window.location.href='../../static/content/upload.php';</script>";
                    break;
                }

            case "view": {
                    echo "<script>window.location.href='../../config/mahasiswa/view.php';</script>";
                    break;
                }
            case "mahasiswa": {
                    echo "<script>window.location.href='../../static/content/mahasiswa.php';</script>";
                    break;
                }
        }
    }
    ?>

    <title><?= $title; ?></title>

    <?php include "../setup/sidebar.php"; ?>

    <div class="container" style="border:1px dashed #f00;margin-top: 10px; padding:10px; border-radius: 12px; width:800px;">
        <form action="uploads.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="gambar_tanaman" style="margin-left: 200px;">
            <button name="submit_identifikasi" type="submit">Submit</button><br><br>
            <hr>
            <a href="?pos=view" class="btn btn-primary" role="" aria-pressed="true" style="margin-left: 200px;">My Profile</a>
            <a href="?pos=logout" class="btn btn-primary" role="" aria-pressed="true" style="margin-left: 225px;">Logout</a>
        </form>
    </div>


    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

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
        linkMenu($_GET['pos'], $_SESSION['id_level']);
    } ?>

    <div class="text-center">

    </div>



    </body>

</html>