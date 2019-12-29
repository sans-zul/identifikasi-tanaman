<?php
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    header("location: ../../../index.php");
}
include "../setup/header.php";
$title = "Mahasiswa";
$_SESSION['home']='home'
?>
<title><?= $title; ?></title>

<?php include "../setup/sidebar.php"; ?>

<div class="container" style="border:1px dashed #f00;margin-top: 10px; padding:10px; border-radius: 12px; width:800px;">
    <form action="uploads.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="gambar_tanaman" style="margin-left: 200px;">
        <button name="submit_identifikasi" type="submit">Submit</button><br><br><hr>
            <a href="?pos=view" class="btn btn-primary" role="" aria-pressed="true" style="margin-left: 200px;">My Profile</a>
            <a href="?pos=logout" class="btn btn-primary" role="" aria-pressed="true" style="margin-left: 225px;">Logout</a>
    </form>
</div>



<?php include "../setup/footer.php"; ?>
<div class="text-center">

</div>



</body>

</html>