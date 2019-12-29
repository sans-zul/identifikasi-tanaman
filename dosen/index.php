<?php
session_start();
if (!isset($_SESSION['dosen'])) {
  header("location: ../index.php");
}

$_SESSION['isi'] = "ya";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link rel="stylesheet" href="styles.css">
  <script>
    function validateForm() {
      var x = document.forms["myForm"]["nm_tanaman"].value;
      var y = document.forms["myForm"]["kasiat"].value;
      if (x == "") {
        alert("Name must be filled out");
        return false;
      } else if (y == "") {
        alert("Benefit must be filled out");
        return false;
      }
    }
  </script>
</head>

<body>
  <div class="wrapper">
    <div class="title">
      Data Plant
    </div>

    <div class="social_media">
      <div class="item">
        <a href="module/profile.php"><i class="far fa-user"></i></a>
      </div>
      <div class="item">
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i></a>
      </div>
    </div>

    <div class="form">
      <form name="myForm" action="koneksi/register.php" onsubmit="return validateForm()" method="POST" required>
        <div class="input_field">
          <input type="text" placeholder="Plant Name" name="nm_tanaman" class="input">
          <i class="fas fa-leaf"></i>
        </div>
        <div class="input_field">
          <!-- <input type="text" placeholder="Benefit" class="input"> -->
          <textarea rows="4" cols="50" placeholder="Benefit" name="kasiat" class="input"></textarea>
          <i class="fas fa-book-open"></i>
        </div>

        <div class="btn">
          <input type="submit" class="button" value="INPUT DATA">
        </div>
      </form>
    </div>
  </div>

</body>

</html>