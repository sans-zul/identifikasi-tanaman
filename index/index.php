<!-- index/index.php -->
<?php
session_start();
if (isset($_SESSION['mahasiswa'])) {
	header("location: ../mahasiswa/static/content/mahasiswa.php");
} else
	if (isset($_SESSION['admin'])) {
	header("location: ../admin/static/content/dashboard.php");
} else
	if (isset($_SESSION['dosen'])) {
	header("location: ../dosen/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Leafy - Tempat terbaik mengenali tanaman</title>
	<style type="text/css">
		.tom {
			padding: 10px;
			border: 1px solid #ccc;
			background: lightblue;
			position: fixed;
			left: 50%;
			top: 50%;
		}
	</style>
</head>

<body background="bucketflower.jpg">

	<div class="tom">
		<form>
			<a href="../login/index.php">MASUK</a>
		</form>
	</div>

</body>

</html>