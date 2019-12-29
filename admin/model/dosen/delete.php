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
    $id = $_GET['id'];
    $query_dosen = "DELETE FROM dosen WHERE id_dosen ='$id'";
    $hasil_dosen = mysqli_query($myKonek, $query_dosen);

    if ($hasil_dosen) {

        $query_users = "DELETE FROM users WHERE id_level = '$id' AND level = 2";
        $hasil_users = mysqli_query($myKonek, $query_users);

        if ($hasil_users) {
            echo "<script>alert('Data Telah Dihapus'); window.location.href='../../static/content/dosen.php';</script>";
        }
    }
}
