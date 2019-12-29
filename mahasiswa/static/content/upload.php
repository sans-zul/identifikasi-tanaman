<?php
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    header("location: ../../../index.php");
}
include "../setup/header.php";
$title = "Mahasiswa";
?>
<title><?= $title; ?></title>

<?php include "../setup/sidebar.php"; ?>

<div class="container">
    <br><br><br><br><br>
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="gambar_tanaman" style="margin-left: 300px;">
        <button name="submit_identifikasi" type="submit">Submit</button>
    </form>
</div>

<?php include "../setup/footer.php"; ?>
<div class="text-center">

</div>



</body>

</html>