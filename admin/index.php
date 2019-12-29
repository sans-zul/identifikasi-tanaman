<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../index.php");
} else {
    header("location: static/content/dashboard.php");
    // echo "<script>window .location.href='content/dashboard.php';</script>";
}
