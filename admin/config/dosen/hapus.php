<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../static/content/dosen.php");
}
include "../../model/dosen/delete.php";
