<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$nama_member = $_POST['nama_member'];
$password_member = $_POST['password_member'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from member where nama_member='$nama_member' and password_member='$password_member'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$_SESSION['nama_member'] = $nama_member;
	$_SESSION['status'] = "login";
	header("location: member.php");
}else{
	header("location:errorpage.php");
}