<?php 
// koneksi database
include 'connection.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
 
// update data ke database
mysqli_query($db,"update user set nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' where id='$id'");
 
// mengalihkan halaman kembali ke logbook.php
header("location:index.php");
 
?>
