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
        <script>
              function validateForm() {
                var x = document.forms["myForm"]["NIP"].value;
                var y = document.forms["myForm"]["nama"].value;
                var z = document.forms["myForm"]["matkul"].value;
                if (x == "") {
                alert("NIP must be filled out");
                return false;
              } else if (y == "") {
                alert("Name must be filled out");
                return false;
              } else if (z == "") {
                alert("Course must be filled out");
                return false;
              }
            }
          </script>
    </head>

    <body>
        <div class="wrapper">
            <div class="title">
                My Profile
            </div>

            <div class="social_media">
                <div class="item">
                    <i class="fab fa-google"></i>
                </div>
                <div class="item">
                    <i class="fas fa-seedling"></i>
                </div>
                <div class="item">
                    <a href="profile.php"><i class="far fa-user"></i></a>
                </div>
            </div>

            <div class="form">
                <?php
                include "../koneksi/koneksi.php";
                $query1 = "SELECT * FROM dosen WHERE id_dosen = $_SESSION[id_level]";
                $tampil1 = mysqli_query($my, $query1);
                while ($r1 = mysqli_fetch_array($tampil1)) {
                ?>
                <form name="myForm" action="../koneksi/update.php" onsubmit="return validateForm()" method="POST" required>
                    <div class="input_field">
                        <!-- <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input"> -->
                        <label for="NIP">NIP</label>
                        <input type="text" class="input" name="NIP" value="<?php echo $r1['NIP']; ?>" >
                    </div>
                    <div class="input_field">
                        <!-- <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input"> -->
                        <label for="NAMA">NAMA</label>
                        <input type="text" class="input" name="nama" value="<?php echo $r1['nm_dosen']; ?>">
                    </div>
                    <div class="input_field">
                        <!-- <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input"> -->
                        <label for="NIP">MATA KULIAH</label>
                        <input type="text" class="input"  name="matkul" value="<?php echo $r1['mata_kuliah']; ?>">
                    </div>

                    <div class="btn">
                        <input type="submit" class="button" value="Simpan Data">
                    </div>
                <?php } ?>
                </form>
            </div>
        </div>

    </body>

    </html>
<?php } ?>