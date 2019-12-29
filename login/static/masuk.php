<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM users";
$tampil = mysqli_query($myKonek, $query);

$ada_users = 0;

while ($r = mysqli_fetch_array($tampil)) {
    if ($r['username'] == $username && $r['password'] == $password) {
        switch ($r['level']) {
            case 1: {
                    $_SESSION['admin'] = 'admin';
                    $_SESSION['id_level'] = $r['id_level'];
                    header("location: ../../admin/index.php");
                    break;
                }
            case 2: {
                    $_SESSION['dosen'] = 'dosen';
                    $_SESSION['id_level'] = $r['id_level'];
                    header("location: ../../dosen/index.php");
                    break;
                }
            case 3: {
                    $_SESSION['mahasiswa'] = 'mahasiswa';
                    $_SESSION['id_level'] = $r['id_level'];
                    header("location: ../../mahasiswa/static/content/mahasiswa.php");
                    break;
                }
        }
        $ada_users = 1;
    }
}

if ($ada_users == 0) {
    header("location: ../index.php");
}
