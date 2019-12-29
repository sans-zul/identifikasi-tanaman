<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    header("location: ../../static/content/mahasiswa.php");
}
if (!isset($_POST['NIM'])) {
    header("location: ../../static/content/mahasiswa.php");
} else {
    include "../../config/koneksi.php";

    $query_mahasiswa = "INSERT INTO 
    mahasiswa (NIM, nm_mahasiswa, semester, dosen_id, jurusan, kelas, username, password, data_submit) 
    VALUES ('$_POST[NIM]', '$_POST[nama]', '$_POST[semester]', '$_POST[dosen]', '$_POST[jurusan]', '$_POST[kelas]', '$_POST[username]', '$_POST[password]', 0)";

    if ($myKonek->query($query_mahasiswa) === TRUE) {

        $query1 = "SELECT * FROM mahasiswa";
        $hasil1 = mysqli_query($myKonek, $query1);
        $jumlahData = mysqli_num_rows($hasil1);

        $i = 1;

        $query2 = "SELECT id_mahasiswa FROM mahasiswa";
        $hasil2 = mysqli_query($myKonek, $query2);

        while ($idData = mysqli_fetch_array($hasil2)) {
            if ($i == $jumlahData) {
                $id_dos = $idData['id_mahasiswa'];
            }
            $i++;
        }

        $query_users = "INSERT INTO
            users (username, password, level, nm_level, id_level)
            VALUES ('$_POST[username]', '$_POST[password]', 3, 'Mahasiswa', '$id_dos')";


        if ($myKonek->query($query_users) === TRUE) {
            echo "<script>alert('Selamat Anda Telah Terdaftar'); window.location.href='../../static/content/mahasiswa.php';</script>";
        } else {
            echo "Error ! : " . $query . "<br>" . $myKonek->error;
        }
    } else {
        echo "Error ! : " . $query . "<br>" . $myKonek->error;
    }
}
