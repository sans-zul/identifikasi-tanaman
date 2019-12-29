<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
if (!isset($_SESSION['dosen'])) {
	header("location: ../index.php");
}
if (!isset($_POST['nm_tanaman'])) {
	header("location: ../index.php");
} else {


include "koneksi.php";
$query1 = "INSERT INTO tanaman (nm_tanaman, khasiat) VALUES ('$_POST[nm_tanaman]','$_POST[kasiat]')";


// if(!mysql_query($mysql))
// 	die(mysql_error());
if ($my->query($query1) === TRUE) {
	echo "<script>alert('Selamat,Info Tanaman Berhasil Didaftarkan');window.location.href='../index.php';</script>";
} else {
	echo "Error ! " . $query . "<br>" . $my->error;
}
} 
