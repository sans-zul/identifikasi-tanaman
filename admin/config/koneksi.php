<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['admin'])) {
    include "index.php";
}
$myKonek = mysqli_connect("localhost", "root", "", "db_sistem_pakar");
