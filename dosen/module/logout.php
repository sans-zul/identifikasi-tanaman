<?php
session_start();
if (!isset($_SESSION['dosen'])) {
    session_unset();
    header("location: ../../../index.php");
} else {
    session_unset();
    header("location: ../../index.php");
}
echo "<script>alert('Selamat, Anda Berhasil Keluar');window.location.href='../../index.php';</script>";