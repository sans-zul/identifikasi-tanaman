<?php
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    header("location: ../../../index.php");
}
include "../setup/header.php";
$title = "Mahasiswa";
?>

<title><?= $title; ?></title>

<style>
    .isi {
        width: 1000px;
        height: 800px;
        background-color: #FF0;
        margin: 50px auto;
    }

    .headerDiv {
        width: 1000px;
        height: 200px;
        background-color: #050;
        text-align: center;
        vertical-align: center;
    }

    .h1Header {
        font-size: 850%;
    }

    .descr p {
        text-align: center;
    }
</style>

<?php include "../setup/sidebar.php"; ?>

<div class="isi">
    <a href="mahasiswa.php" class="btn btn-primary" role="button" aria-pressed="true" style="width: 1000px;">Kembali</a>
    <div class="headerDiv">
        <h1 class="h1Header"><?= $_SESSION['nama_tanaman']; ?></h1>
    </div>
    <div class="descr">
        <p><?= $_SESSION['deskripsi']; ?></p>
    </div>
</div>

<?php include "../setup/footer.php"; ?>
<div class="text-center">

</div>



</body>

</html>