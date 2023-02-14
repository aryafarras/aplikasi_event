<?php

include "koneksi.php";
$id=$_GET['id'];
$tampil=mysqli_query($mysqli, "select * from admin where id='$id'");
$hasil=mysqli_fetch_array($tampil);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>tambah event</title>

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
  <body>
    
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
        <a class="nav-link" href="index.php">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled"></a>
      </li>
    </ul>
   
  </div>
</nav>
<br>
<br>
<br>
<fieldset>
	<legend align="center">edit data</legend>
<form method="POST" action="proses_edit_admin.php">
<table align="center">
	<tr>
		<td>nama event</td>
		<td>:</td>
		<td><input type="hidden" name="id" value="<?php echo $hasil['id']?>">
			<input style="width: 530px;" type="text" name="nama" value="<?php echo $hasil['nama']?>">
		</td>
	</tr>
	<tr>
		<td>tanggal event</td>
		<td>:</td>
		<td><input style="width: 530px;" type="date" name="tanggal" value="<?php echo $hasil['tanggal']?>"></td>
	</tr>
	<tr>
		<td>informasi event</td>
		<td>:</td>
		<td><textarea rows="6" cols="70%" name="informasi"  value="<?php echo $hasil['informasi']?>"></textarea></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" value="selesai" name="kirim" class="btn btn-primary btn block" style="width: 530px;"></td>
	</tr>
</table>	
</form>