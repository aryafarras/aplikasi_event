<!DOCTYPE html>
<html>
<?php
include "koneksi.php";

?>
<head>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>pendaftaran</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
<link href="../dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body  style="background-image:url(s.jpg); background-size:cover;" align="center">
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="pendaftaran.php">Pendaftaran</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Event <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index2.html">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled"></a>
      </li>
    </ul>
   
  </div>
</nav>
<br>
<br>
</head>
<body>
	<form action="pendaftaran.php" method="POST">
<br>
	<center><h2><p>Selamat Datang Di Halaman Pendaftaran|SMK Luqman AL Hakim</p></h2>
		<hr>
<center><h1>data pendaftaran</h1></center>
<br>
<table border="1" align="center">
	<tr align="center" bgcolor="orange">
		<td>id</td>
		<td>nama</td>
		<td>email</td>
		<td>tanggal lahir</td>
		<td>alamat</td>
	</tr>
	<?php
	$tampil=mysqli_query($mysqli,"select * from pendaftaran");
	$no=1;
	while($hasil=mysqli_fetch_array($tampil)){

		?>
		<tr bgcolor="gray" style="color: white">
			<td><?php echo $no++; ?></td>
			<td><?php echo $hasil['nama'];?></td>
			<td><?php echo $hasil['email'];?></td>
			<td><?php echo $hasil['tanggal_lahir'];?></td>
			<td><?php echo $hasil['alamat'];?></td>
  </tr>
		<?php
	}
	?>
</table>
<br>
<hr>
<center><div>copyright &copy; 2023|SMK Luqman AL Hakim</div>
</form>
</body>
</html>