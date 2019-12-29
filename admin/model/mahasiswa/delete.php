<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("location: ../../static/content/dosen.php");
}
if (!isset($_POST['NIM'])) {
    header("location: ../../static/content/dosen.php");
} else {
    include "../../config/koneksi.php";
    $id = $_GET['id'];
    $hapus_mahasiswa = "DELETE FROM mahasiswa WHERE id_mahasiswa ='$id'";
    $hasil_mahasiswa = mysqli_query($myKonek, $hapus_mahasiswa);
    if ($hasil_mahasiswa) {

        $hapus_users = "DELETE FROM users WHERE id_level ='$id' AND level = 3";
        $hasil_users = mysqli_query($myKonek, $hapus_users);
        if ($hasil_users) {
            echo "<script>alert('Data Telah Dihapus'); window.location.href='../../static/content/mahasiswa.php';</script>";
        }
    }
}
