<?php 

session_start();
include 'koneksi.php';
 
$email = $_POST['email'];
$password = md5($_POST['password']);

$data = mysqli_query($con, "select * from user where email = '$email' and password = '$password'");

$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location: homepage.php");
}else{
	header("location: login.php?pesan=gagal");
}



?>