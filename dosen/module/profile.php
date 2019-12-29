<?php
session_start();
if (!isset($_SESSION['dosen'])) {
    header("location: ../index.php");
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Data Dosen</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
        <link rel="stylesheet" href="../styles.css">
    </head>

    <body>
        <div class="wrapper">
            <div class="title">
                My Profile
            </div>

            <div class="social_media">
                <div class="item">
                    <a href="../index.php" class="fas fa-seedling"></a>
                </div>
                <div class="item">
                    <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>

            <div class="form">
                <?php
                include "../koneksi/koneksi.php";
                $query1 = "SELECT * FROM dosen WHERE id_dosen = $_SESSION[id_level]";
                $tampil1 = mysqli_query($my, $query1);
                while ($r1 = mysqli_fetch_array($tampil1)) {
                ?>
                    <div class="input_field">
                        <!-- <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input"> -->
                        <label for="NIP">NIP</label>
                        <input type="text" class="input" id="NIP" value="<?php echo $r1['NIP']; ?>" disabled>
                    </div>
                    <div class="input_field">
                        <!-- <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input"> -->
                        <label for="NAMA">NAMA</label>
                        <input type="text" class="input" id="NAMA" name="NAMA" value="<?php echo $r1['nm_dosen']; ?>" disabled>
                    </div>
                    <div class="input_field">
                        <!-- <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input"> -->
                        <label for="NIP">MATA KULIAH</label>
                        <input type="text" class="input" id="" name="NIP" value="<?php echo $r1['mata_kuliah']; ?>" disabled>
                    </div>

                    <div class="btn">
                        <a href="edit.php">
                            <input type="submit" class="button" value="Edit Data">
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>

    </body>

    </html>
<?php } ?>