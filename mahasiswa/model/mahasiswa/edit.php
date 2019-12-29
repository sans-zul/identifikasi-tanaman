<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['mahasiswa'])) {
    header("location: ../../static/content/mahasiswa.php");
}
if (!isset($_POST['NIM'])) {
    header("location: ../../static/content/mahasiswa.php");
} else {
	include "../../config/koneksi.php";

	$query = "UPDATE mahasiswa
	    SET NIM = '$_POST[NIM]', nm_mahasiswa = '$_POST[nama]', semester = '$_POST[semester]', dosen_id = '$_POST[dosen]', jurusan = '$_POST[jurusan]', kelas = '$_POST[kelas]'
	    WHERE id_mahasiswa = '$_SESSION[id_level]'";

	if ($myKonek->query($query) === TRUE) {
	    echo "<script>alert('Selamat Data Telah Diubah'); window.location.href='../../static/content/mahasiswa.php';</script>";
	} else {
	    echo "Error ! : " . $query . "<br>" . $myKonek->error;
	}
}