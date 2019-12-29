<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../index.php");
}
include "../setup/header.php";
$title = "Users";
?>

<title><?= $title; ?></title>

<?php include "../setup/sidebar.php"; ?>

<h1 class="h3 mb-4 text-gray-800">Users</h1>

<?php include "../setup/footer.php"; ?>


</body>

</html>