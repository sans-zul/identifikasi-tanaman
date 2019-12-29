<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['dosen'])) {
    header("location: ../index.php");
}
$my = mysqli_connect("localhost", "root", "", "db_sistem_pakar");
