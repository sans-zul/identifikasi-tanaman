<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../static/content/mahasiswa.php");
}
include "../../static/setup/header.php";
$title = "Mahasiswa";
?>

<title><?= $title; ?></title>

<?php include "../../static/setup/sidebar.php"; ?>

<h1 class="h3 mb-4 text-gray-800">Tambah Data Mahasiswa</h1>
<div class="row">
    <div class="col-lg-8">
        <form action="../../model/mahasiswa/add.php" method="POST" class="was-validated">
            <div class="form-group row">
                <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="NIM" name="NIM" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="nama" name="nama" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="semester" name="semester" required>
                </div>
            </div>
            <?php
            include "../koneksi.php";
            $query = "SELECT * FROM dosen";
            $tampil = mysqli_query($myKonek, $query);
            $cek =  mysqli_fetch_array($tampil);
            if (!isset($cek)) {
            ?>
                <div class="form-group row">
                    <label for="pemberitahuan" class="col-sm-2 col-form-label">Warning...</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control is-invalid" id="pemberitahuan" name="pemberitahuan" value="Harap Isi Data Dosen TerHlebih Dahulu" disabled>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="form-group row">
                <label for="dosen" class="col-sm-2 col-form-label">Dosen</label>
                <div class="col-sm-10">
                    <select class="form-control is-invalid" id="dosen" name="dosen" required>

                        <option value=""> </option>
                        <?php
                        $tampil1 = mysqli_query($myKonek, $query);
                        if (isset($cek)) {
                            while ($r = mysqli_fetch_array($tampil1)) {
                        ?>
                                <option value="<?php echo $r['id_dosen']; ?>"><?php echo $r['nm_dosen']; ?></option>
                        <?php
                            }
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control is-invalid" id="jurusan" name="jurusan" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <select class="form-control is-invalid" id="kelas" name="kelas" required>

                        <option value=""> </option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>

                    </select>
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