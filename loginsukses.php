<?php
include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$login= mysqli_query($conn,"SELECT * FROM alumni WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
$_SESSION['username'] = $username;
header("location:beranda.php");
}else{
header("location:login.php");
}
?>