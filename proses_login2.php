<?php
session_start();

include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];

$data= mysqli_query($mysqli,"select * from admin where username='$username' and password='$password'");
$cek=mysqli_num_rows($data);

if($cek>0){
	$_SESSION['username']=$username;
	$_SESSION['status']= "login";
	header("location:admin.php");
}else{
	header("location:login.html?pesan=gagal");
}
?>