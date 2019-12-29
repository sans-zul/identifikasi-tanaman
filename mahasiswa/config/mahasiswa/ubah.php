<?php
session_start();
if (!isset($_SESSION['mahasiswa'])) {
    header("location: ../../../index.php");
}
include "../../static/setup/header.php";
$title = "Mahasiswa";
?>
<title><?= $title; ?></title>

<?php include "../../static/setup/sidebar.php"; ?>

<h1 class="h3 mb-5 text-gray-800">Menampilkan Data Mahasiswa</h1>
            <form action="../../model/mahasiswa/edit.php" method="POST" class="was-validated">
<div class="row">
    <div class="col-lg-8">

        <?php
        include "../koneksi.php";
        $query1 = "SELECT * FROM mahasiswa WHERE id_mahasiswa = $_SESSION[id_level]";
        $tampil1 = mysqli_query($myKonek, $query1);
        while ($r1 = mysqli_fetch_array($tampil1)) {
        ?>
            <div class="form-group row">
                <label for="NIM" class="col-lg-6 col-form-label text-right">NIM</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="NIM" name="NIM" value="<?php echo $r1['NIM']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-lg-6 col-form-label text-right">Nama</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r1['nm_mahasiswa']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="semester" class="col-lg-6 col-form-label text-right">Semester</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $r1['semester']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="dosen" class="col-lg-6 col-form-label text-right">Dosen</label>
                <div class="col-sm-5">
                        <select class="form-control is-invalid" id="select" name="dosen" required>
                            <?php
                            $query2 = "SELECT * FROM dosen WHERE id_dosen = $r1[dosen_id]";
                            $query3 = "SELECT * FROM dosen";
                            $tampil2 = mysqli_query($myKonek, $query2);
                            $tampil3 = mysqli_query($myKonek, $query3);
                            $r2 = mysqli_fetch_array($tampil2);
                            if (!isset($r2)) {
                                echo "<option selected value=''> </option>";
                            } else {
                                echo "<option value=''> </option>";
                            }
                            while ($r3 = mysqli_fetch_array($tampil3)) {
                            ?>
                                <option <?php if ($r2['id_dosen'] == $r3['id_dosen']) {
                                            echo 'selected';
                                        } else {
                                            echo ' ';
                                        } ?> value="<?= $r3['id_dosen']; ?>"><?= $r3['nm_dosen']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-lg-6 col-form-label text-right">Jurusan</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $r1['jurusan']; ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelas" class="col-lg-6 col-form-label text-right">Kelas</label>
                <div class="col-sm-5">
                        <select class="form-control is-invalid" id="kelas" name="kelas" value="<?php echo $r1['kelas']; ?>" required>

                            <option <?php if ($r1['kelas'] == '') echo 'selected'; ?> value=""> </option>
                            <option <?php if ($r1['kelas'] == 'A') echo 'selected'; ?> value="A">A</option>
                            <option <?php if ($r1['kelas'] == 'B') echo 'selected'; ?> value="B">B</option>
                            <option <?php if ($r1['kelas'] == 'C') echo 'selected'; ?> value="C">C</option>
                            <option <?php if ($r1['kelas'] == 'D') echo 'selected'; ?> value="D">D</option>
                            <option <?php if ($r1['kelas'] == 'E') echo 'selected'; ?> value="E">E</option>

                        </select>
                </div>
            </div>
            <br><br>
                        <button type="submit"style="margin-left: 550px" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-primary">Reset</button>


        <?php } ?>

    </div>

</div>
            </form>

<?php include "../../static/setup/footer.php"; ?>
<div class="text-center">

</div>



</body>

</html>