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

    $query_dosen = "INSERT INTO 
    dosen (NIP, nm_dosen, jurusan, mata_kuliah, username, password) 
    VALUES ('$_POST[NIP]', '$_POST[nama]', '$_POST[jurusan]', '$_POST[mata_kuliah]', '$_POST[username]', '$_POST[password]')";

    if ($myKonek->query($query_dosen) === TRUE) {

        $query1 = "SELECT * FROM dosen";
        $hasil1 = mysqli_query($myKonek, $query1);
        $jumlahData = mysqli_num_rows($hasil1);

        $i = 1;

        $query2 = "SELECT id_dosen FROM dosen";
        $hasil2 = mysqli_query($myKonek, $query2);

        while ($idData = mysqli_fetch_array($hasil2)) {
            if ($i == $jumlahData) {
                $id_dos = $idData['id_dosen'];
            }
            $i++;
        }

        $query_users = "INSERT INTO
    users (username, password, level, nm_level, id_level)
    VALUES ('$_POST[username]', '$_POST[password]', 2, 'Dosen', '$id_dos')";

        if ($myKonek->query($query_users) === TRUE) {
            echo "<script>alert('Selamat Anda Telah Terdaftar'); window.location.href='../../static/content/dosen.php';</script>";
        } else {
            echo "Error ! : " . $query . "<br>" . $myKonek->error;
        }
    } else {
        echo "Error ! : " . $query . "<br>" . $myKonek->error;
    }
}
