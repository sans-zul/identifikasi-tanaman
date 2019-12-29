<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../index.php");
}
include "../setup/header.php";
$title = "Mahasiswa";
?>

<!-- Custom styles for this page -->
<link href="<?php echo $indexToVendor; ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

<title><?= $title; ?></title>

<?php include "../setup/sidebar.php"; ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
        </div>
        <div class="card-header py-3">
            <a class="nav-link" href="?pos=add_mahasiswa">
                <i class="fas fa-fw fa-plus"></i>
                <span>Mahasiswa</span></a>
            </li>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Dosen</th>
                            <th>Kelas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php include "../../config/koneksi.php";
                        $query = "SELECT * FROM mahasiswa ORDER BY id_mahasiswa";
                        $tampil = mysqli_query($myKonek, $query);
                        $no = 1;
                        while ($r = mysqli_fetch_array($tampil)) {
                        ?>
                            <tr>
                                <td><a href="?pos=info_mahasiswa&id=<?php echo $r['id_mahasiswa']; ?>"><?php echo $no; ?></a></td>
                                <td><a href="?pos=info_mahasiswa&id=<?php echo $r['id_mahasiswa']; ?>"><?php echo $r['NIM']; ?></a></td>
                                <td><a href="?pos=info_mahasiswa&id=<?php echo $r['id_mahasiswa']; ?>"><?php echo $r['nm_mahasiswa']; ?></a></td>
                                <td>
                                    <?php
                                    $idDosen = $r['dosen_id'];
                                    $quer = "SELECT nm_dosen FROM dosen where id_dosen = $idDosen";
                                    $ambil =  mysqli_query($myKonek, $quer);
                                    while ($dos = mysqli_fetch_array($ambil)) {
                                    ?>
                                        <a href="?pos=info_dosen&id=<?php echo $r['dosen_id']; ?>"><?php echo $dos['nm_dosen']; ?></a>
                                    <?php
                                    }
                                    ?>
                                </td>
                                <td><?php echo $r['kelas']; ?></td>
                                <td>
                                    <a href="?pos=edit_mahasiswa&id=<?php echo $r['id_mahasiswa']; ?>" class="badge badge-success">edit</a>
                                    <a href="?pos=info_mahasiswa&id=<?php echo $r['id_mahasiswa']; ?>" class="badge badge-info">info</a>
                                    <a href="?pos=delete_mahasiswa&id=<?php echo $r['id_mahasiswa']; ?>" class="badge badge-danger">hapus</a>
                                </td>
                            </tr>
                        <?php
                            $no++;
                        } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->


<?php include "../setup/footer.php"; ?>

<!-- Page level plugins -->
<script src="<?php echo $indexToVendor; ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo $indexToVendor; ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="<?php echo $indexToVendor; ?>js/demo/datatables-demo.js"></script>

</body>

</html>