<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../content/mahasiswa.php");
}
include "../../static/setup/header.php";
$title = "Mahasiswa";
?>

<title><?= $title; ?></title>

<?php include "../../static/setup/sidebar.php"; ?>

<h1 class="h3 mb-4 text-gray-800">Menampilkan Data Mahasiswa</h1>
<div class="row">
    <div class="col-lg-8">

        <?php
        include "../koneksi.php";
        $query1 = "SELECT * FROM mahasiswa WHERE id_mahasiswa = $_GET[id]";
        $tampil1 = mysqli_query($myKonek, $query1);
        while ($r1 = mysqli_fetch_array($tampil1)) {
        ?>
            <div class="form-group row">
                <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIM" name="NIM" value="<?php echo $r1['NIM']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r1['nm_mahasiswa']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="semester" class="col-sm-2 col-form-label">Semester</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="semester" name="semester" value="<?php echo $r1['semester']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="dosen" class="col-sm-2 col-form-label">Dosen</label>
                <div class="col-sm-10">
                    <select class="form-control" id="dosen" name="dosen" disabled>
                        <?php
                        $idDosen = $r1['dosen_id'];
                        $quer = "SELECT nm_dosen FROM dosen WHERE id_dosen = $idDosen";
                        $ambil =  mysqli_query($myKonek, $quer);
                        while ($dos = mysqli_fetch_array($ambil)) {
                        ?>
                            <option><?php echo $dos['nm_dosen']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $r1['jurusan']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" name="kelas" value="<?php echo $r1['kelas']; ?>" disabled>
                </div>
            </div>
            <br><br>
            <a href="?pos=edit_mahasiswa&id=<?php echo $r1['id_mahasiswa']; ?>" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
            <a href="?pos=delete_mahasiswa&id=<?php echo $r1['id_mahasiswa']; ?>" class="btn btn-danger" role="button" aria-pressed="true">Hapus</a>

        <?php } ?>

    </div>
</div>

<?php include "../../static/setup/footer.php"; ?>


</body>

</html>