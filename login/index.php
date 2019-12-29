<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="style.css">
	<title>Leafy - Tempat terbaik mengenali tanaman</title>
</head>

<body background="#909">
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="static/daftar.php" method="POST">
				<h1>Buat Akun</h1>
				<input type="text" name="nama" placeholder="Nama Lengkap" />
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<input type="text" name="nomor" placeholder="NIM/NIP" />
				<table style="width:100%">
					<tr>
						<td><input type="radio" name="status" value="3" class="radio"> Mahasiswa<br></th>
						<td><input type="radio" name="status" value="2" class="radio"> Dosen<br></th>
					</tr>
				</table>
				<br>
				<button type="submit">Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="static/masuk.php" method="POST">
				<h1>Sign in</h1>
				<input type="text" name="username" placeholder="Username" />
				<input type="password" name="password" placeholder="Password" />
				<button type="submit">Sign In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script src="main.js"></script>
</body>

</html>