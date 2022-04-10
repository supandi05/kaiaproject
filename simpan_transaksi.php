<?php 
include("koneksi.php");

$date = $_POST['date'];
$tanggal = date('Y-m-d', strtotime($date));
$pembayaran = $_POST['pembayaran'];
$nomorid = $_POST['nomorid'];
$produk = $_POST['produk'];
$hargabeli = $_POST['hargabeli'];
$hargajual = $_POST['hargajual'];
$profit = $_POST['profit'];

$result = mysqli_query($con, "INSERT INTO transaksi(tanggal_transaksi,jenis_pembayaran,nomor_id,produk,harga_beli,harga_jual,profit) VALUES('$tanggal','$pembayaran','$nomorid','$produk','$hargabeli','$hargajual','$profit')");


header("Location: homepage.php")

 ?>