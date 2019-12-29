<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (!isset($_SESSION['dosen'])) {
	header("location: ../index.php");
}
if (!isset($_POST['NIP'])) {
	header("location: ../index.php");
} else {

include "koneksi.php";

$query1 = "UPDATE dosen SET NIP = '$_POST[NIP]', nm_dosen = '$_POST[nama]', mata_kuliah = '$_POST[matkul]'";
$hasil = mysqli_query($my, $query1);

if ($my->query($query1) === TRUE) {
    echo "<script>alert('Selamat, Profile Telah Diupdate');window.location.href='../index.php';</script>";
} else {
    echo "Error ! " . $query . "<br>" . $my->error;
}
}