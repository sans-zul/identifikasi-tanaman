<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../static/content/dosen.php");
}
include "../../static/setup/header.php";
$title = "Dosen";
?>

<title><?= $title; ?></title>

<?php include "../../static/setup/sidebar.php"; ?>

<h1 class="h3 mb-4 text-gray-800">Tambah Data Dosen</h1>
<div class="row">
    <div class="col-lg-8">
        <form action="../../model/dosen/add.php" method="POST" class="was-validated">
            <div class="form-group row">
                <label for="NIM" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="NIM" name="NIP" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="nama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="jurusan" name="jurusan" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="mata_kuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="mata_kuliah" name="mata_kuliah" required>
                </div>
            </div>
            <br><br>
            <div class="form-group row">
                <label for="username">Username</label>
                <input type="text" class="form-control is-invalid" id="username" aria-describedby="emailHelp" name="username" required>
            </div>
            <div class="form-group row">
                <label for="password">Password</label>
                <input type="password" class="form-control is-invalid" id="password" name="password" required>
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <button type="reset" class="btn btn-primary">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include "../../static/setup/footer.php"; ?>


</body>

</html>