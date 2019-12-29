<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("location: ../../index.php");
}
include "../setup/header.php";
$title = "Tanaman";
?>

<title><?= $title; ?></title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body {
  background: #3aaf9f;
}

.wrapper {
  max-width: 350px;
  width: 100%;
  height: auto;
  background: #fff;
  padding: 60px 45px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  border-radius: 20px;
}

.wrapper .title {
  margin-bottom: 20px;
  text-align: center;
  font-size: 26px;
  font-weight: bold;
  color: #3aaf9f;
}

.wrapper .social_media {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
}

.wrapper .social_media .item {
  width: 35px;
  height: 35px;
  border: 2px solid #eeeeee;
  margin: 0 5px;
  text-align: center;
  line-height: 35px;
  border-radius: 50%;
  cursor: pointer;
  color: #eeeeee;
  transition: all 0, 5s ease;
}

.wrapper .social_media .item:hover {
  border-color: #3aaf9f;
  color: #3aaf9f;
}

.wrapper .form .input_field {
  position: relative;
  margin-bottom: 10px;
}

.wrapper .form .input_field .input {
  width: 100%;
  padding: 12px;
  padding-left: 30px;
  border: none;
  background: #eeeeee;
}

.wrapper .form .btn .button {
  color: #eeeeee;
  width: 118px;
  margin-left: 70px;
  margin-top: 20px;
  background: #3aaf9f;
  padding: 12px;
  text-align: center;
  border-radius: 25px;
}


.wrapper .form .input_field i {
  position: absolute;
  top: 10px;
  left: 10px;
  color: #1d2120;
  font-size: 14px;
}
</style>
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

<?php include "../setup/sidebar.php"; ?>
<div class="wrapper">
  <div class="title">
    Data Plant
  </div>

  <div class="social_media">
    <div class="item">
      <i class="fab fa-google"></i>
    </div>
    <div class="item">
      <i class="fas fa-seedling"></i>
    </div>
    <div class="item"><i class="far fa-user"></i>
    </div>
  </div>

  <div class="form">
    <form name="myForm" action="../../config/tanaman/tambah.php" onsubmit="return validateForm()" method="POST" required>
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
<?php include "../setup/footer.php"; ?>

</body>

</html>