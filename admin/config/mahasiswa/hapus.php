<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../content/mahasiswa.php");
}
include "../../model/mahasiswa/delete.php";
