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

<h1 class="h3 mb-4 text-gray-800">Menampilkan Data Dosen</h1>
<div class="row">
    <div class="col-lg-8">

        <?php
        include "../koneksi.php";
        $query1 = "SELECT * FROM dosen WHERE id_dosen = $_GET[id]";
        $tampil1 = mysqli_query($myKonek, $query1);
        while ($r1 = mysqli_fetch_array($tampil1)) {
        ?>
            <div class="form-group row">
                <label for="NIP" class="col-sm-2 col-form-label">NIP</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NIP" name="NIP" value="<?php echo $r1['NIP']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $r1['nm_dosen']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?php echo $r1['jurusan']; ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="mata_kuliah" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mata_kuliah" name="mata_kuliah" value="<?php echo $r1['mata_kuliah']; ?>" disabled>
                </div>
            </div>
            <br><br>
            <a href="?pos=edit_dosen&id=<?php echo $r1['id_dosen']; ?>" class="btn btn-primary" role="button" aria-pressed="true">Edit</a>
            <a href="?pos=delete_dosen&id=<?php echo $r1['id_dosen']; ?>" class="btn btn-danger" role="button" aria-pressed="true">Hapus</a>

        <?php } ?>

    </div>
</div>

<?php include "../../static/setup/footer.php"; ?>


</body>

</html>