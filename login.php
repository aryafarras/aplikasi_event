<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
		<link href="../dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-image:url(k.jpg); background-size:cover;" align="center">
	<form action="proses_login.php" method="POST">
	<p>Selamat Datang Di Halaman Login|SMK LUQMAN AL HAKIM</p>
	<hr>
	<fieldset>		
		<legend align="center">login</legend>
		<table align="center">
			<tr>
				<td>username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="masukkan username anda..."></td>
			</tr><tr>
				<td>password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="masukkan password anda..."></td>
			</tr><tr>
				<td><input type="submit" value="login" class="btn btn-primary btn block"></td>
			</tr>
		</table>
		<center><p><a href="tambah_pendaftaran.php">belum punya akun</a></p>
	</fieldset>
	<br>
	<hr>
	<div> copyright &copy; 2023|SMK Luqman AL Hakim</div>
</form>
</body>
</html>