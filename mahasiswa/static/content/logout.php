<?php
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    session_unset();
    header("location: ../../index.php");
} else {
    session_unset();
    header("location: ../../..");
}
