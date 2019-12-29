<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("location: ../../static/content/dosen.php");
}

if (!isset($_POST['NIP'])) {
    header("location: ../../static/content/dosen.php");
} else {
    include "../../config/koneksi.php";

    $query = "UPDATE dosen 
    SET NIP = '$_POST[NIP]', nm_dosen = '$_POST[nama]', jurusan = '$_POST[jurusan]', mata_kuliah = '$_POST[mata_kuliah]'
    WHERE id_dosen = '$_POST[id_dosen]'";

    if ($myKonek->query($query) === TRUE) {
        echo "<script>alert('Selamat Data Telah Diubah'); window.location.href='../../static/content/dosen.php';</script>";
    } else {
        echo "Error ! : " . $query . "<br>" . $conn->error;
    }
}
